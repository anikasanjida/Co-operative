<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\member;
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

        $member = auth()->user();
        // $m=member::all();
        return view('backend.content.profile',compact('member'));

    }


    // public function profile(){
    //     $members= member::all();
    //     return view('backend.content.UserHome', compact('members'));


    // }

    public function Mytransaction(){
        return view('backend.content.My-transaction');
    }

}
