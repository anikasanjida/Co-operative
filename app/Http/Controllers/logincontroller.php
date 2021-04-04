<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\adminlogin;
use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function login(){
        return view('backend.content.login');
    }

    public function adminlogin(Request $request)
    {

              adminlogin::create([
                  'Name'=>$request->Name,
                  'Password'=>$request->Password
                  ]);

                  return redirect()-> back();

    }


}
