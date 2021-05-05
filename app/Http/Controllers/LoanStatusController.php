<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\installment_collect;
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


    public function viewtransaction($id,$user_id)
    {

        $u_rqs = installment_collect::with('transactionUserName')->where('loan_id',$id)->where('user_id',$user_id)->get();

        $loan = user_request::find($id);

        $total =$loan->total_interest_amount - $u_rqs->sum('amount');



        // dd($u_rqs);
        // dd($u_rqs->userreq);

        return view('backend.content.view_transaction',compact('u_rqs','total'));
    }

    public function completedUpdate( $id, $status)
    {

        $loanstatus= user_request::find($id);
        $loanstatus->update(['status'=>$status]);

        return redirect()->back();
    }

}
