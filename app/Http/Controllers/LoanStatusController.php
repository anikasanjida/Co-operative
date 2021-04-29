<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\user_request;
use Illuminate\Http\Request;

class LoanStatusController extends Controller
{
    public function LoanStatus(){

        $loan = user_request::with('userreq')->get();

        return view('backend.content.LoanStatus',[
            'user_request'=>$loan
        ]);
    }
    public function checkLoan($id)
    {
        $u_rqs = user_request::with('userreq.member')->find($id);
        // dd($u_rqs->userreq);

        return view('backend.content.checkLoan',compact('u_rqs'));
    }


    public function completedUpdate( $id, $status)
    {

        $loanstatus= user_request::find($id);
        $loanstatus->update(['status'=>$status]);

        return redirect()->back();
    }

}
