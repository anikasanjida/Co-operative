<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function login(){
        return view('backend.content.login');
    }




}
