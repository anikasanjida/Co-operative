<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontcontroller extends Controller
{
    public function front(){
        return view('backend.partial.front');
    }
}
