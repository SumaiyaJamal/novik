<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\Question;
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
        return view('website.questions');
    }
    public function advertising()
    {
        return view('website.cookies');
    }
    public function query(Request $request)
    {
        $query = $request->id;
        $question = Question::find($query);
        return view('website.query', compact('question'));

    }
    public function querySubmit(Request $request)
    {
        $request->validate([
            'query'=>'required',
        ]);
        if($request->login == 'login_first')
        {
            return redirect()->route('login');
        }
        // Define your API endpoint and bearer token
        $url = 'https://api.openai.com/v1/chat/completions';
        $bearerToken = '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'; // Replace with your actual token

        // Define the request body
        $body = [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'You are an expert medical assistant.'],
                ['role' => 'user', 'content' => $request->input('query')],
            ],
            'max_tokens' => 10,
        ];
        // Make the HTTP POST request
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $bearerToken,
            'Content-Type' => 'application/json',
        ])->post($url, $body);

        // Handle the response
        if ($response->successful()) {
            $assistantMessage = $response->json()['choices'][0]['message']['content'];
            $question = new Question();
            $question->text =  $request->input('query');
            $question->response =  $assistantMessage;
            if(auth()->user()){
                $question->user_id =  auth()->user()->id;
            }
            $question->save();
            return redirect()->route('query_detail', ['id' => $question->id]);
        } else {
            // Handle error
            return redirect()->back()->with(['type'=>'error', 'message'=> 'Something wents wrong!']);
        }
    }
}
