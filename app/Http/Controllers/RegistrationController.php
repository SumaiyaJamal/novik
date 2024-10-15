<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function signup()
    {
        return view('website.signup');
    }
    public function registerSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'dob' => 'required',
            'country' => 'required',
            'occupation' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        if($user){
            $profile = new Profile();
            $profile->dob = $request->dob;
            $profile->country = $request->country;
            $profile->occupation = $request->occupation;
            $profile->user_id = $user->id;
            $profile->save();
        }
        $user->assignRole('user'); // Assign the 'admin' role
        return redirect('/')->with(['type'=> 'success', 'message'=> 'Registration Successfully']);

    }
    public function login()
    {
        return view('website.login');
    }
    public function loginSubmit(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed, redirect to the home page
            return redirect()->route('home')->with(['type'=>'success', 'message'=>'Login Successfully!']);// Use the intended method to redirect to the originally requested page or home
        }

        // If authentication fails, redirect back with an error message
        return redirect()->back()->withErrors([
            'crediancials' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('crediancials'));
    }
}
