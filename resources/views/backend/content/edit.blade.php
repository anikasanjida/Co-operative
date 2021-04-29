@extends('AdminMain')
@section('content')

<body style="background-image:url(/img/star.jpg); background-repeat:no-repeat;background-size:100 100%;background-attachment:fixed">

 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif



        {{-- from start --}}

        <form method="post" action="{{route('member.update',$members->id)}}" enctype="multipart/form-data" class="container">
        @csrf
        @method('PUT')

        <div class="modal-body bg-info">

                <div class=" from-group">
                  <label for="exampleInputEmail1">Enter Name</label>
                  <input type="text" value="{{$members->Memberuser->name}}" class="form-control"name="name" placeholder="Enter member name">

                </div>

               <div class=" from-group">
                  <label for="exampleInputEmail1">date of birth</label>
                  <input type="date" value="{{$members->dob}}"  class="form-control"name="dob" placeholder="Enter birathday date">

                </div>
                <div class=" from-group">
                    <label for="exampleInputEmail1">Address</label>

                    <textarea type="text" class="form-control" name="address" placeholder="Enter Address here">{{$members->address}}</textarea>

                  </div>
                  <div class=" from-group">
                    <label for="exampleInputEmail1">Gender</label>
                    <select class="form-control"  value="{{$members->gender}}"  name="gender" id="" aria-label="Default select example">
                        <option value="Null" >select from here</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>

                  </div>

                  <div class=" from-group">
                    <label for="exampleInputEmail1">Voter id</label>
                    <input type="number"  value="{{$members->voter_id}}"class="form-control"name="voter_id" placeholder="Enter voter id">

                  </div>
                  <div class=" from-group">
                    <label for="phon_no">Phone_number</label>
                    <input type="tel"  value="{{$members->phon_no}}"class="form-control" name="phon_no" placeholder="Enter phn_no">
                </div>
                <div class=" from-group">
                  <label for="exampleInputEmail1">Email Address</label>
                  <input type="email"  value="{{$members->Memberuser->email}}" class="form-control"name="email" placeholder="name@example.com">

                </div>

                  <div class=" from-group">
                    <label for="exampleInputEmail1">Account no</label>
                    <input type="number" value="{{$members->account_no}}" class="form-control"name="account_no" placeholder="Enter Account number">
                  </div>

                  <div class=" from-group">
                    <label for="exampleInputEmail1">Branch Name</label>
                    <input type="text" value="{{$members->branch}}" class="form-control"name="branch" placeholder="Enter Branch Name">

                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Image</label>
                    <input name="members_image" type="file" class="form-control">
               </div>

        </div>
                <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>

  @endsection
