<?php

namespace App\Http\Controllers;
use App\Mail\AddedNotification;
use App\Models\installment_collect;
use App\Models\loan_transaction;
use App\Models\m_collect;
use App\Models\member;
use App\Models\User;
use App\Models\user_request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MemberListController extends Controller
{
    public function list()
    {
        // $title='Member List';
        $members = member::paginate(3);
        // dd($members);
        return view('backend.content.MemberList', compact('members'));
    }


    public function search(Request $request)
    {
        $search=$request->search;

        if($search){
            $members=member::whereHas('Memberuser',function($query) use($search){
                $query->where('name','like','%'.$search.'%')->orWhere('email','like','%'.$search.'%');
            })->orWhere('phon_no','like','%'.$search.'%')
                            ->orWhere('account_no','like','%'.$search.'%')->paginate(3);
        }else
        {
            $members=member::paginate(3);
        }

        // where(name=%search%)
        $title="Search result";
        return view('backend.content.MemberList',compact('title','members','search'));
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
                'email' => 'email|required|unique:users',
                'account_no' => 'required|unique:members,account_no'
            ]);

            $User=User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt ($request->password)
            ]);

           $add= member::create([
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


            //send email to user
            Mail::to($User->email)->send(new AddedNotification($add));

            return redirect()->back()->with('success','Member Added Successfully.');





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

    public function editmember($id)
    {
       //get all data of for this id
        $members=member::find($id);

        //pass data to a view
        return view('backend.content.edit',compact('members'));

    }

    public function updatemember(Request $request,$id)
    {

        member::find($id)->update([
            'address' => $request->address,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'voter_id' => $request->voter_id,
            'phon_no' => $request->phon_no,
            'account_no' => $request->account_no,
            'branch' => $request->branch,
            // 'image' => $file_name
        ]);
        return redirect()->route('MemberList')->with('success','Updated Successfully.');
    }

    public function collectmoney($id){

        $collects = m_collect::where('user_id',$id)->orderBy('id','desc')->get();

        // dd($collects);

        return view('backend.content.collectmoney',compact('id','collects'));


    }
    public function store(Request $request){
// dd($request->all());

  m_collect::create([
    'user_id'=>$request->user_id,
    'month' => $request->month,
    'year' => $request->year,
    'amount' => $request->amount,

    ]);
    return redirect()->back()->with('success','money collect successfully');
 }

 public function collectinstallment($id){


    return view('backend.content.collectinstallment',compact('id'));


}
public function datastore(Request $request){
// dd($request->all());



$loan = user_request::where('user_id',$request->user_id)->where('status','approved')->first();



if($loan){
    installment_collect::create([
        'user_id'=>$request->user_id,
        'loan_id'=>$loan->id,
        'month' => $request->month,
        'date'=>$request->date,
        'amount' => $request->amount,

        ]);
        return redirect()->back()->with('success','installment  given successfully');
}else{
    return redirect()->back();
}

}

}

