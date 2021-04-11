<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    public function contact(){
        return view('backend.content.contact');
    }
    public function member(){
        return view('backend.content.member');
    }
    public function Balance(){
        return view('backend.content.Balance');
    }

    public function transaction(){
        return view('backend.content.transaction');
    }
    public function loan(){
        return view('backend.content.loan');
    }

}
