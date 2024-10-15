<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
}
