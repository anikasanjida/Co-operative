<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class noticecontroller extends Controller
{
    public function notice(){
        return view('backend.content.notice');
    }
    public function add(){
        return view('backend.content.notice');
    }

}
