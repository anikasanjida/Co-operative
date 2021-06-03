<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

    public function forgetPassword()
    {
        return view('backend.content.forget-password');
    }

    public function forgetPasswordLink(Request $request)
    {
        //first i need to check email is registered or not?
        $user = User::where('email', $request->email)->first();
        if ($user) {
            //send forget password link
            Password::sendResetLink(
                $request->only('email')
            );
            return redirect()->back()->with('success', 'Email sent to :' . $request->email);
        } else {
            return redirect()->back()->with('success', 'Email not found.');
        }
    }

    public function passwordReset($p_token, $p_email)
    {
        $token = $p_token;
        $email = $p_email;
        return view('backend.content.reset-password', compact('token', 'email'));
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);
        Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) use ($request) {
                $user->forceFill([
                    'password' => bcrypt($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

            });
        return redirect()->route('adminlogin')->with('success','password reset successful.');
    }




}
