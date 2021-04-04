<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageMemberController extends Controller
{
    public function list(){
        return view('backend.content.ManageMember');
    }


}
