<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\member;
use App\Models\User;
use App\Models\user_request;
use App\Models\installment_collect;
use App\Models\m_collect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class aboutuscontroller extends Controller
{
    public function about(){
        return view('backend.content.about');
    }

    public function home(){
        return view('backend.content.AdminHome',);
    }
    public function User(){

        return view('backend.content.UserHome');

    }

    public function changePassword(){
        //  $title='User Profile';
        $member = auth()->user();
        // $m=member::all();
        return view('backend.content.Update_password',compact('member',));

    }


    public function updatePassword(Request $request)
    {
        if (!Hash::check($request->input('current_password'), auth()->user()->password)) {
            return redirect()->back()->with('error', 'Current Password does not match.');
        }


        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password'

        ]);


        if (Hash::check($request->input('new_password'), auth()->user()->password)) {
            return redirect()->back()->with('error', 'New password should not match the old one.');
        }



        // $workers = Worker::find($request->id);
        // $users = User::find($workers->user_id);
        $users = User::find(auth()->user()->id);
        // dd($users);
        $users -> update([
            'password' => bcrypt($request->new_password)
        ]);

        // $users->password = $request->bcrypt($request->password);
        // $users->save();
        return redirect()->back()->with('success', 'Password updated successfully.');
    }

    public function profile(){
        //  $title='User Profile';
        $member = auth()->user();
        // $m=member::all();
        return view('backend.content.profile',compact('member',));

    }

    public function editprofile($id)
    {

        $title = 'Edit Profile';
        $profile = User::find($id);
        // dd($profile->member);

        // $members =member::find($profile->profile->id);

       //get all data of for this id
        // $members=member::find($profile->member);
        // dd($members);

        //pass data to a view
        return view('backend.content.profile_edit',compact('title','profile'));

    }

    public function updateprofile(Request $request,$id)
    {
        $profile = User::find($id);
        $members = member::find($profile->member->id);

        $profile -> update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        $members -> update([
            'phon_no' => $request->contact,
            'address' => $request->address,
        ]);

        return redirect()->route('profile')->with('success','Updated Successfully.');
    }



    public function Mytransaction(){

        $user_id = auth()->user()->id;


        $loan_total = user_request::where('user_id',$user_id)->sum('total_interest_amount');
        // dd($loan_total);
        $paid_total = installment_collect::where('user_id',$user_id)->sum('amount');
        $unpaid_total = $loan_total - $paid_total;
        $balance= m_collect::where('user_id',$user_id)->sum('amount');


        // dd($unpaid_total);

        return view('backend.content.My-transaction',compact('loan_total','paid_total','unpaid_total','balance'));
    }

}
