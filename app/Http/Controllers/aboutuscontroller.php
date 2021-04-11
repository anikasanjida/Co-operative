<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class aboutuscontroller extends Controller
{
    public function about(){
        return view('backend.content.about');
    }

    public function home(){
        return view('backend.content.AdminHome',);
    }
    public function User(){

        return view('backend.content.UserHome');

    }

    public function profile(){

        return view('backend.content.profile');

    }


    // public function profile(){
    //     $members= member::all();
    //     return view('backend.content.UserHome', compact('members'));


    // }

    public function Mytransaction(){
        return view('backend.content.My-transaction');
    }

}
