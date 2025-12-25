<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Contact;
use App\Models\Banner;
use App\Models\SponsorContact;
use Illuminate\Support\Facades\Http;
use DOMDocument;

class WebsiteController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('website.index', compact('banners'));
    }

    public function sponsers()
    {
        return view('website.sponsers');
    }

    public function sponsersSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'type' => 'required',
            'phone' => 'required|max:15',
            'message' => 'required',
        ]);

        SponsorContact::create($request->all());

        return back()->with(['message' => 'Contact form submitted successfully!', 'type' => 'success']);
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'type' => 'required',
            'phone' => 'required|max:15',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        return back()->with(['message' => 'Contact form submitted successfully!', 'type' => 'success']);
    }

    public function myQuestions()
    {
        $questions = Question::where('user_id', auth()->id())->get();
        return view('website.questions', compact('questions'));
    }

    public function query($id)
    {
        $question = Question::findOrFail($id);
        return view('website.query', compact('question'));
    }

    /**
     * MAIN PROCESSING FUNCTION (AJAX)
     */
    public function queryProcessing(Request $request)
    {
        if (!auth()->user()) {
            return response()->json(['message' => 'Please log in first'], 403);
        }

        // try {
            $question = Question::findOrFail($request->question_id);

            /** -----------------------------
             * HANDLE AUDIO
             * ---------------------------- */
            if ($question->type === 'audio') {

                $transcript = $this->extractText($question);

                if (!isset($transcript['text'])) {
                    return response()->json(['message' => 'Audio transcription failed'], 500);
                }

                $question->text = $transcript['text'];
                $question->save();

                $userQuery = $transcript['text'];
            } else {
                $userQuery = $question->text;
            }

            /** -----------------------------
             * OPENAI REQUEST
             * ---------------------------- */
            $openAiResponse = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                'Content-Type'  => 'application/json',
            ])->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'system', 'content' => 'You are an expert medical assistant.'],
                    ['role' => 'user', 'content' => $userQuery],
                ],
                'max_tokens' => 300,
            ]);
            return $openAiResponse;

            if (!$openAiResponse->successful()) {
                return response()->json(['message' => 'OpenAI error'], 500);
            }

            $assistantMessage = $openAiResponse['choices'][0]['message']['content'];
            $question->response = $assistantMessage;
            $question->save();

            /** -----------------------------
             * PUBMED SEARCH
             * ---------------------------- */
            preg_match_all('/[A-Z][a-zA-Z0-9\s\-]+/', $assistantMessage, $matches);
            $terms = implode(' OR ', array_unique($matches[0]));

            $pubmedResponse = Http::get(
                "https://www.ebi.ac.uk/europepmc/webservices/rest/search",
                ['query' => $terms, 'format' => 'json', 'pageSize' => 5]
            );

            $articles = [];

            if ($pubmedResponse->successful()) {
                $results = $pubmedResponse['resultList']['result'] ?? [];

                foreach ($results as $article) {
                    $pmid = $article['id'];

                    $abstract = $this->fetchPubmedAbstract($pmid);

                    $articles[] = [
                        'title' => $article['title'] ?? '',
                        'pmid' => $pmid,
                        'abstract' => $abstract,
                    ];
                }
            }

            return response()->json([
                'question_text' => $question->text,
                'response_text' => $assistantMessage,
                'articles' => $articles,
            ]);

        // } catch (\Throwable $e) {
        //     return response()->json(['message' => 'Something went wrong'], 500);
        // }
    }

    /**
     * CREATE QUESTION
     */
    public function querySubmit(Request $request)
    {
        if ($request->login === 'login_first') {
            return redirect()->route('login');
        }

        $question = new Question();
        $question->user_id = auth()->id();

        if ($request->hasFile('audio')) {
            $path = $request->file('audio')->store('audio', 'public');
            $question->type = 'audio';
            $question->file = $path;
        } else {
            $request->validate(['query' => 'required']);
            $question->text = $request->input('query');
        }

        $question->save();

        return redirect()->route('query_detail', $question->id);
    }

    /**
     * ASSEMBLY AI TRANSCRIPTION
     */
    private function extractText(Question $question)
    {
        $audioUrl = asset('storage/' . $question->file);

        $post = Http::withHeaders([
            'authorization' => env('ASSEMBLYAI_API_KEY'),
            'content-type' => 'application/json',
        ])->post('https://api.assemblyai.com/v2/transcript', [
            'audio_url' => $audioUrl,
        ]);

        if (!$post->successful()) {
            return ['error' => 'Upload failed'];
        }

        $id = $post['id'];

        do {
            sleep(3);
            $get = Http::withHeaders([
                'authorization' => env('ASSEMBLYAI_API_KEY'),
            ])->get("https://api.assemblyai.com/v2/transcript/{$id}");

        } while ($get['status'] === 'processing');

        return $get->json();
    }

    /**
     * FETCH PUBMED ABSTRACT
     */
    private function fetchPubmedAbstract($pmid)
    {
        $html = Http::get("https://pubmed.ncbi.nlm.nih.gov/{$pmid}/")->body();

        $dom = new DOMDocument();
        @$dom->loadHTML($html);
        $xpath = new \DOMXPath($dom);

        $nodes = $xpath->query("//div[contains(@class,'abstract-content')]");

        return $nodes->length ? trim($nodes->item(0)->textContent) : 'No abstract available';
    }

    public function error()
    {
        return view('error');
    }
}
