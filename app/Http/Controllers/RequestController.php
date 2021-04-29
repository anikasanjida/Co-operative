<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\user_request;

class RequestController extends Controller
{

    public function loanRequest(Request $request){
        $this->validate($request,[
            'type'=>'required',
            'loan_purpose'=>'required'
        ]);

        user_request::create([
            'user_id'=>auth()->user()->id,
            'request_type' =>$request->type,
            'loan_purpose' =>$request->loan_purpose,
            'requested_amount' =>$request-> R_Amount
        ]);
        return redirect('/User/Deposit-withdraw');

        // validate


        //user_id

    }


}
