@extends('UserMain')
@section('content')


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
                      {{-- <div class="btn-group">
                        <button type="button" class="btn btn-success">Update Profile</button>
                        <br> <button type="button" class="btn btn-info">Change Password</button>
                   </div> --}}
                   <div class="bg-light mt-3 p-3 d-flex justify-content-center">

                    <a class="btn btn-success m-1" href="{{ route('profile.edit', $member->id) }}">Update Profile</a>

                    <a class="btn btn-warning m-1" href="{{route('password.change',$member->id)}}">Change Password</a>
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
