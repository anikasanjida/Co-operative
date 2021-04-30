<?php

namespace App\Http\Controllers;

use App\Models\user_request;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    public function approve(){
        $user_request = user_request::where('status','approved')->get();
        return view('backend.content.Approval',compact('user_request'));
    }
    public function ApproveStatus ($id){
        $Approval = user_request ::find($id);

        $Approval->update([

                'status'=>'approved',
                'note'=>'Your loan have been approved'

                ]);
            return redirect()->route('Approval');

    }

}
