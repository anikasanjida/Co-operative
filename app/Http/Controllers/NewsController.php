<?php

namespace App\Http\Controllers;
use App\Models\news_body;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news(){
        return view('backend.content.news');
    }

    public function Depositwithdraw(){
        return view('backend.content.Deposit-withdraw');
    }


    public function news_body(Request $request)
    {

              news_body::create([

                  'news_description'=>$request->news_description,
                  ]);

                  return redirect()-> back();

    }

}
