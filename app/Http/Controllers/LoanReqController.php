<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\loan;
use App\Models\member;
use Illuminate\Http\Request;

class LoanReqController extends Controller
{
    public function LoanRequest(){
        $loans=loan::all();
        $member=member::all();
        return view('backend.content.LoanRequest',compact('loans','member'));
    }

    public function add(Request $request){


      loan::create([
        'member_id'=>$request->member_id,
          'loan_amount'=>$request->loan_amount,
          'loan_interest'=>$request->loan_interest,
          'payment_term'=>$request->payment_term,
          'total_amount_interest'=>$request->total_amount_interest,
          'payment_schedule'=>$request->payment_schedule,
          'due_date'=>$request->due_date,


          ]);

          return redirect()-> back();
    }
}
