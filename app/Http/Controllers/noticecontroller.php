<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\news_body;
use Illuminate\Http\Request;

class noticecontroller extends Controller
{
    public function notice(){
        $new=news_body::all();
        return view('backend.content.notice',compact('new'));
    }

}
