<?php

namespace App\Http\Controllers;
use App\Models\user_request;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    public function approve(){
        $user_request = user_request::whereIn('status',['approved','rejected'])->paginate(3);

        return view('backend.content.Approval',compact('user_request'));
    }


    public function list()
    {
        // $title='Member List';
        $user_request = user_request::paginate(3);
        // dd($members);
        return view('backend.content.Approval', compact('user_request'));
    }


    public function apsearch(Request $request)
    {
        // dd($request->all());
        $apsearch=$request->search;

        if($apsearch){
            $user_request=user_request::whereHas('userreq',function($query) use($apsearch)
            {
               $query->where('name','like','%'.$apsearch.'%');
            })->paginate(3);

        }

        else
        {
            $user_request=user_request::paginate(3);
        }

        // where(name=%search%)
        $title="Search result";
        return view('backend.content.Approval',compact('title','user_request','apsearch'));
    }



    public function ApproveStatus ($id){
        $Approval = user_request ::find($id);

        //loan calculation
    $interest_amount = ($Approval->requested_amount * 0.1 * 1) + $Approval->requested_amount;

    // // dd(100 * .06 * 1);
    // dd($intarest_amount);
        $Approval->update([
                'status'=>'approved',
                'note'=>'Your loan have been approved',
                'total_interest_amount'=>$interest_amount,
                'payable_amount'=>$interest_amount

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




}
