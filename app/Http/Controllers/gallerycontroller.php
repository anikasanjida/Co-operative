<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class gallerycontroller extends Controller
{
    public function gallery(){
        return view('backend.content.gallery');
    }
}
