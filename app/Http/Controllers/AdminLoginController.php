<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function adminlogin(){
        return view('backend.content.Adminlogin');
    }

    public function add(Request $request)
    {
                        // dd($request->all());
                        // dd(auth()->user()->first_name);
//validate input
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        //authenticate
        $credentials = $request->only('email', 'password');
    //    dd($credentials);
    // dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('AdminHome')->with('success','Login Success');
        }
        return back()->withErrors([
            'email' => 'Invalid Credentials.',
        ]);
    }


    public function addlogout()
    {
        Auth::logout();

        return redirect()->route('adminlogin')->with('success','Logout Successful.');

    }

}
