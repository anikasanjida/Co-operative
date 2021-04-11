<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoanStatusController extends Controller
{
    public function LoanStatus(){
        return view('backend.content.LoanStatus');
    }
}
