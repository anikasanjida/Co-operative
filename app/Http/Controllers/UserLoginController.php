<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function Userlogin(){
        return view('backend.content.Userlogin');
    }

     public function addlogin(Request $request)
    {
    //    dd($request->all());
//validate input
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        //authenticate
        $credentials = $request->only('email', 'password');
    //    dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('UserHome')->with('success','User Login Success.');
        }
        return back()->withErrors([
            'email' => 'Invalid Credentials.',
        ]);

    }

    public function userlogout()
    {
        Auth::logout();

        return redirect()->route('userlogin')->with('success','Logout Successful.');

    }

}
