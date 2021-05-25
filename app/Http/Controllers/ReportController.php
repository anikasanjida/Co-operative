<?php

namespace App\Http\Controllers;

use App\Models\user_request;
use App\Models\installment_collect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function report(){

       $u_rqs=installment_collect::with('transactionUserName','transactionUserReq')->select('user_id','loan_id',DB::raw('SUM(amount) AS amount'))->groupBy('user_id','loan_id')->get();

    //    dd($u_rqs);

    // $u_rqs = installment_collect::get();

        return view('backend.content.Report',compact('u_rqs'));
    }
}
