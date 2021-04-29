@extends('AdminMain')
@section('content')

<body style="background-image:url(/img/star.jpg); background-repeat:no-repeat;background-size:100 100%;background-attachment:fixed">

 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

    <!-- Button trigger modal -->
<div class=" text-start">
<a class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add member
</a>
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-warning" id="exampleModalLabel">Add new member</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        {{-- from start --}}

        <form method="post" action="{{route('member.add')}}" enctype="multipart/form-data" class="container">
        @csrf

        <div class="modal-body bg-info">

                <div class=" from-group">
                  <label for="exampleInputEmail1">Enter Name</label>
                  <input type="text" class="form-control"name="name" placeholder="Enter member name">

                </div>

               <div class=" from-group">
                  <label for="exampleInputEmail1">date of birth</label>
                  <input type="date" class="form-control"name="dob" placeholder="Enter birathday date">

                </div>
                <div class=" from-group">
                    <label for="exampleInputEmail1">Address</label>
                    <textarea type="text" class="form-control"name="address" placeholder="Enter Address here"></textarea>

                  </div>
                  <div class=" from-group">
                    <label for="exampleInputEmail1">Gender</label>
                    <select class="form-control" name="gender" id="" aria-label="Default select example">
                        <option value="Null" >select from here</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>

                  </div>

                  <div class=" from-group">
                    <label for="exampleInputEmail1">Voter id</label>
                    <input type="number" class="form-control"name="voter_id" placeholder="Enter voter id">

                  </div>
                  <div class=" from-group">
                    <label for="phon_no">Phone_number</label>
                    <input type="tel" class="form-control" name="phon_no" placeholder="Enter phn_no">
                </div>
                <div class=" from-group">
                  <label for="exampleInputEmail1">Email Address</label>
                  <input type="email" class="form-control"name="email" placeholder="name@example.com">

                </div>

                  <div class=" from-group">
                    <label for="exampleInputEmail1">Account no</label>
                    <input type="number" class="form-control"name="account_no" placeholder="Enter Account number">
                  </div>

                  <div class=" from-group">
                    <label for="exampleInputEmail1">Branch Name</label>
                    <input type="text" class="form-control"name="branch" placeholder="Enter Branch Name">

                  </div>
                  <div class="from-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your Password" required>
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

  {{-- Table title --}}

<div class="title text-center mb-3 bg-info text-dark">
   <h3 class="font-weight-bolder p-1 m-5">Member List</h3>

</div>


    {{-- table --}}
<table class="table table-striped table-bordered border-primary bg-light table-cell-padding-.2rem">
    <thead class= "table-dark">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">Address</th>
        <th scope="col">Gender</th>
        <th scope="col">Voter id</th>
        <th scope="col">phn_no</th>
        <th scope="col">Email Address</th>
        <th scope="col">Account no</th>
        <th scope="col">Branch Name</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($members as $data )

        <tr>
           <th scope="row">{{$data->Memberuser->name}} </th>
           <td>{{$data->dob}}</td>
           <td>{{$data->address}}</td>
           <td>{{$data->gender}}</td>
           <td>{{$data->voter_id}}</td>
           <td>{{$data->phon_no}}</td>
           <td>{{$data->Memberuser->email}}</td>
           <td>{{$data->account_no}}</td>
           <td>{{$data->branch}}</td>
           <td>
            <img style="width: 100px;" src="{{url('/files/member/'.$data->image)}}" alt="">
        </td>

        <td>
            <a class="btn btn-success" href="{{route('member.edit',$data->id)}}">Edit</a>
            <a class="btn btn-danger" href="{{route('member.delete',$data->id)}}">Delete</a>
        </td>

        </tr>

        @endforeach

  </table>
{{$members->links()}}
</body>
@endsection
