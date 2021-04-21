<?php

namespace App\Http\Controllers;

use App\Models\member;
use App\Models\User;
use Illuminate\Http\Request;

class MemberListController extends Controller
{
    public function list()
    {
        $members = member::paginate(3);
        return view('backend.content.MemberList', compact('members'));
    }

    public function add(Request $request)
    {

        // dd($request->file('members_image')->getClientOriginalExtension());

        $file_name = '';
        //step1: check request has file?
        if ($request->hasFile('members_image')) {
            //file is valid or not
            $file = $request->file('members_image');
            if ($file->isValid()) {
                //generate unique file name
                $file_name = date('Ymdhms') . '.' . $file->getClientOriginalExtension();

                //store image into local directory
                $file->storeAs('member', $file_name);
            }
        }
// dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'email|required|unique:users'
        ]);
            $User=User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt ($request->password)
            ]);

            member::create([
                'user_id'=>$User->id,
                'address' => $request->address,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'voter_id' => $request->voter_id,
                'phon_no' => $request->phon_no,
                'account_no' => $request->account_no,
                'branch' => $request->branch,
                'image' => $file_name
                ]);
            // DB::commit();

            return redirect()->back();


    }

    public function deleteMember($id)
    {
        //        first get the product
        $members = member::find($id);
        //then delete it
        $members->delete();

        //        Product::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Member Deleted Successfully.');
    }
}



// public function createWorker(Request  $request){
//     DB::beginTransaction();
//     try {
//         $user = User::create([]);
//         $worker = Worker::create([
//             'user_id'=>$user->id,
//             'amount'=>$request->input('')
//         ]);
//         DB::commit();
//     }catch (\Throwable $exception){
//         DB::rollBack();
// return redrect->withinput();
//     }
// }
