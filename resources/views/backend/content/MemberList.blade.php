@extends('AdminMain')
@section('content')


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

        <form method="post" action="{{route('member.add')}}"class="container">
        @csrf

        <div class="modal-body bg-info">

                <div class=" from-group">
                  <label for="exampleInputEmail1">Enter first_Name</label>
                  <input type=" first_name" class="form-control"name="first_name" placeholder="Enter member first name">

                </div>
                <div class="from-group ">
                  <label for="exampleInputPassword1">Enter last_Name</label>
                  <input type='last_name' class="form-control"name="last_name"placeholder="Enter member last name">
                </div>

               <div class=" from-group">
                  <label for="exampleInputEmail1">dob</label>
                  <input type="date" class="form-control"name="dob" placeholder="Enter birathday date">

                </div>
                <div class=" from-group">
                    <label for="exampleInputEmail1">Adress</label>
                    <textarea type="address" class="form-control"name="address" placeholder="Enter Address here"></textarea>

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
                    <input type="value" class="form-control"name="id" placeholder="Enter voter id">

                  </div>
                  <div class=" from-group">
                    <label for="phon_no">phn_no</label>
                    <input type="tel" class="form-control" name="phon_no" placeholder="Enter phn_no">
                </div>
                <div class=" from-group">
                  <label for="exampleInputEmail1">Email Address</label>
                  <input type="email" class="form-control"name="email" placeholder="name@example.com">

                </div>

                  <div class=" from-group">
                    <label for="exampleInputEmail1">Account no</label>
                    <input type="value" class="form-control"name="account_no" placeholder="Enter Account number">
                  </div>

                  <div class=" from-group">
                    <label for="exampleInputEmail1">Branch Name</label>
                    <input type="text" class="form-control"name="branch" placeholder="Enter Branch Name">

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

<div class="title text-center mb-3 bg-white text-dark">
   <h3 class="font-weight-bolder p-1 m-5">Member List</h3>

</div>


    {{-- table --}}
<table class="table">
    <thead>
      <tr>
        <th scope="col">Enter first_Name</th>
        <th scope="col">Enter last_Name</th>
        <th scope="col">dob</th>
        <th scope="col">Adress</th>
        <th scope="col">Gender</th>
        <th scope="col">Voter id</th>
        <th scope="col">phn_no</th>
        <th scope="col">Email Address</th>
        <th scope="col">Account no</th>
        <th scope="col">Branch Name</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($members as $data )

        <tr>
           <th scope="row">{{$data->first_name}}</th>
           <td>{{$data->last_name}}</td>
           <td>{{$data->address}}</td>
           <td>{{$data->dob}}</td>
           <td>{{$data->gender}}</td>
           <td>{{$data->id}}</td>
           <td>{{$data->phon_no}}</td>
           <td>{{$data->email}}</td>
           <td>{{$data->account_no}}</td>
           <td>{{$data->branch}}</td>

        </tr>

        @endforeach

  </table>

@endsection
