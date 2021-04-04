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
        return view('backend.content.AdminHome');
    }
}
