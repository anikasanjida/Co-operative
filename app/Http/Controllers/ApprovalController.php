<?php

namespace App\Http\Controllers;

use App\Models\user_request;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    public function approve(){
        $user_request = user_request::where('status','approved','rejected')->get();
        return view('backend.content.Approval',compact('user_request'));
    }
    public function ApproveStatus ($id){
        $Approval = user_request ::find($id);

    $intarest_amount = ($Approval->requested_amount * 0.1 * 1) + $Approval->requested_amount;

    // // dd(100 * .06 * 1);
    // dd($intarest_amount);
        $Approval->update([
                'status'=>'approved',
                'note'=>'Your loan have been approved',
                'total_interest_amount'=>$intarest_amount,
                'payable_amount'=>$intarest_amount

                ]);

            return redirect()->route('Approval');

    }
    public function RejectStatus ($id){
        $Approval = user_request ::find($id);

        $Approval->update([

                'status'=>'Rejected',
                'note'=>'Your loan have been Rejected because there is due of  your previous loan payment  '

                ]);
            return redirect()->route('Approval');

    }

    // public function search(Request $request)
    // {
    //     $search=$request->search;

    //     if($search){
    //         $members=member::whereHas('Memberuser',function($query) use($search){
    //             $query->where('name','like','%'.$search.'%')->orWhere('email','like','%'.$search.'%');
    //         })->orWhere('phon_no','like','%'.$search.'%')
    //                         ->orWhere('account_no','like','%'.$search.'%')->paginate(3);
    //     }else
    //     {
    //         $members=member::paginate(3);
    //     }

    //     // where(name=%search%)
    //     $title="Search result";
    //     return view('backend.content.MemberList',compact('title','members','search'));
    // }



}
