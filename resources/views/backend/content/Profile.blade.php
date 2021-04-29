@extends('UserMain')
@section('content')

{{-- <div class="album py-5 bg-info">

    <div class="container">
        <h3 class="font-weight-bolder p-1 ">User Profile</h3>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">



        <div class="col">
          <div class="card shadow-sm">
            <img style=" height: 200px; width: 100% ;" src="{{url('/files/member/'.$member->member->image)}}" alt="">
            <div class="card-body">
                <h4 class="text-dark">Name: {{$member->name}}</h4>
                <p class="text-dark">Date of Birth: {{$member->member->dob}}</p>
                <p class="text-dark">Address: {{$member->member->address}}</p>
                <p class="text-dark">Account_no: {{$member->member->account_no}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                         <button type="button" class="btn btn-sm btn-outline-success">update profile</button>

                         <button type="button" class="btn btn-success">Change Password</button>
                    </div>
                    <small class="text-muted">{{$member->member->gender}}</small>
                </div>
            </div>
          </div>
        </div>











      </div>
    </div>
  </div>

  <div class="p-3 bg-light">

</div> --}}


<div class="container">
    <div class="main-body pt-5">

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{url('/files/member/'.$member->member->image)}}" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-5">
                      <h4>{{$member->name}}</h4>
                      <p class="text-secondary mb-1">Co-operative society member</p>
                      <p class="text-muted font-size-sm">Female</p>
                      <div class="btn-group">
                        <button type="button" class="btn btn-success">Update Profile</button>
                        <br> <button type="button" class="btn btn-info">Change Password</button>
                   </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$member->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$member->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$member->member->dob}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$member->member->phon_no}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$member->member->address}}
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Account Number</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$member->member->account_no}}
                        </div>
                  </div>
                </div>
              </div>

              </div>
            </div>
          </div>
        </div>
    </div>


@endsection
