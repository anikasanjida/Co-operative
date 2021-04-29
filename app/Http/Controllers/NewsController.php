<?php

namespace App\Http\Controllers;
use App\Models\news_body;
use App\Http\Controllers\Controller;
use App\Models\user_request;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news(){
        return view('backend.content.news');
    }

    public function Depositwithdraw(){
       // dd(auth()->user());
    //    auth()->user()->first_name
    $user_request=user_request::where('user_id',auth()->user()->id)->get();

        return view('backend.content.Deposit-withdraw',compact('user_request'));
    }


    public function news_body(Request $request)
    {

              news_body::create([

                  'news_description'=>$request->news_description,
                  ]);

                  return redirect()-> back();

    }

}
