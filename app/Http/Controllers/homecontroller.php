<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function home(){
        return view('backend.content.home-list');
    }
}
