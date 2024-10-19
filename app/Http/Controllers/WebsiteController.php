<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\Question;
use DOMDocument;
use Illuminate\Support\Facades\Http;
class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }
    public function sponsers()
    {
        return view('website.sponsers');
    }
    public function contact()
    {
        return view('website.contact');
    }

    public function terms()
    {
        return view('website.terms');
    }
    public function privacy()
    {
        return view('website.privacy');
    }
    public function myQuestions()
    {
        $questions = Question::where('user_id', auth()->user()->id)->get(); // This line will return the questions and stop execution
        return view('website.questions', compact('questions')); // This line will never be reached
    }
    public function advertising()
    {
        return view('website.cookies');
    }
    public function query(Request $request)
    {
         $question = Question::find($request->question);
        return view('website.query', compact('question'));

    }
    public function queryProcessing(Request $request)
    {

        if ($request->login == 'login_first') {
            return response()->json(['message' => 'Please log in first', 'status' => 'login_required'], 403);
        }
        try{
             // Store the query and response in the database
            $question = Question::find($request->question_id);
            if($question->type == 'audio') {
                return $this->ExtractText($question);
            }
        $url = 'https://api.openai.com/v1/chat/completions';
        $bearerToken = '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'; // Replace with your actual token

        // Define the request body
        $body = [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'You are an expert medical assistant.'],
                ['role' => 'user', 'content' => $request->input('query')],
            ],
            'max_tokens' => 2,
        ];

        // Make the HTTP POST request to OpenAI API
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Content-Type' => 'application/json',
        ])->post($url, $body);

        if ($response->successful()) {
            $assistantMessage = $response->json()['choices'][0]['message']['content'];
            // $assistantMessage = "GLP-1 receptor agonists (GLP-1 RAs) are a class of medications commonly used to treat type 2 diabetes.";
            $question->response = $assistantMessage;
            $question->save();

            // Step 1: Extract key terms using regular expressions
            preg_match_all('/[A-Z][a-zA-Z0-9\s\-]+/', $assistantMessage, $matches);
            $extractedTerms = array_unique($matches[0]);

            // Step 2: Prepare the query for the PubMed API
            $terms = implode(' OR ', $extractedTerms);
            $pubmedUrl = "https://www.ebi.ac.uk/europepmc/webservices/rest/search?query=" . urlencode($terms) . "&format=json&pageSize=5";

            // Step 3: Make the request to the PubMed API
            $pubmedResponse = Http::get($pubmedUrl);
            $articles = [];
            if ($pubmedResponse->successful()) {
                $data = $pubmedResponse->json();
                if (isset($data['resultList']['result'])) {
                    $articles = $data['resultList']['result'];
                } else {
                    $articles = null;
                }
                if($articles != null){
                foreach ($articles as &$article) {
                    $pmid = $article['id']; // Assuming 'pmid' is available in your article array
                    $detailUrl = "https://pubmed.ncbi.nlm.nih.gov/{$pmid}/"; // No need for ?format=pubmed
                    $detailResponse = Http::get($detailUrl);

                    if ($detailResponse->successful()) {
                        // Load the HTML response into DOMDocument
                        $dom = new DOMDocument();
                        @$dom->loadHTML($detailResponse->body()); // Use '@' to suppress warnings from invalid HTML

                        // Create a new DOMXPath object to query the DOM
                        $xpath = new \DOMXPath($dom); // Use global namespace

                        // Find the div with the class 'abstract-content'
                        $abstractDivs = $xpath->query("//div[contains(@class, 'abstract-content')]");

                        if ($abstractDivs->length > 0) {
                            // Get the content of the first abstract div
                            $article['abstract'] = trim($abstractDivs->item(0)->textContent);
                        } else {
                            $article['abstract'] = 'No abstract available';
                        }
                    } else {
                        $article['abstract'] = 'Error fetching abstract';
                    }
                }
            }

            // Return response as JSON to be handled by AJAX
            return response()->json([
                'question_text' => $question->text,
                'response_text' => $assistantMessage,
                'articles' => $articles,
            ]);
        } else {
            // Handle error
            return response()->json(['message' => 'Something went wrong!'], 500);
        }
        }
    }catch(\Throwable $th){
        return response()->json(['message' => 'Something went wrong!'], 500);
    }

    }

    public function querySubmit(Request $request)
    {
        // $request->validate([
        //     'query'=>'required',
        // ]);
        if($request->login == 'login_first')
        {
            return redirect()->route('login');
        }
        $question = new Question();
        if($request->audio)
        {
            $audioPath = $request->file('audio')->store('audio', 'public_audio');
            $question->type =  'audio';
            $question->file =  $audioPath;
            if (auth()->user()) {
                $question->user_id = auth()->user()->id;
            }
            $question->save();
            return response()->json([
                'success' => true,
                'redirect_url' => route('query_detail', ['question' => $question->id]),
            ]);
        }
        else{
            $question->text =  $request->input('query');
            if (auth()->user()) {
                $question->user_id = auth()->user()->id;
            }
            $question->save();
            return redirect()->route('query_detail',['question' => $question->id]);
        }
    }
    public function sugestedArticle(Request $request)
    {
        if($request->login == 'login_first')
        {
            return redirect()->route('login');
        }
        $question = new Question();
        $question->text =  $request->input('query');
        if (auth()->user()) {
            $question->user_id = auth()->user()->id;
        }
        $question->save();
            // Now you can return or use the formatted results
        return redirect()->route('query_detail',['question' => $question->id]);

    }
    public function voiceIndex(){
        return view('website.voice.index');
    }
    private function ExtractText($question){
        return $pathURL =  'http://127.0.0.1:8000'. asset('website/' . $question->file);

        $apiKey = env('ASSEMBLYAI_API_KEY'); // Replace with your actual API key
        $postResponse  = Http::withHeaders([
            'authorization' => $apiKey,
            'content-type' => 'application/json',
        ])->post('https://api.assemblyai.com/v2/transcript', [
            'audio_url' => $pathURL,
        ]);
         // Check if the POST request was successful
    if ($postResponse->successful()) {
        // Get the transcript ID from the response
        $transcriptId = $postResponse->json()['id'];
        // Now make a GET request to retrieve the transcript using the ID
        $getResponse = Http::withHeaders([
            'authorization' => $apiKey,
        ])->get("https://api.assemblyai.com/v2/transcript/{$transcriptId}");

        // Return the GET response
        return $getResponse->json();
    } else {
        // Handle the error response
        return ['error' => 'Failed to create transcript.', 'details' => $postResponse->json()];
    }
    }
}
