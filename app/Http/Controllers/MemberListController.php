<?php

namespace App\Http\Controllers;
use App\Models\member;
use Illuminate\Http\Request;

class MemberListController extends Controller
{
    public function list()
    {
        $members= member::all();
        return view('backend.content.MemberList', compact('members'));
    }

    public function add(Request $request)
    {

      member::create([
          'first_name'=>$request->first_name,
          'last_name'=>$request->last_name,
          'address'=>$request->address,
          'dob'=>$request->dob,
          'gender'=>$request->gender,
          'voter_id'=>$request->id,
          'phon_no'=>$request->phon_no,
          'email'=>$request->email,
          'account_no'=>$request->account_no,
          'branch'=>$request->branch

          ]);

          return redirect()-> back();
    }


}
