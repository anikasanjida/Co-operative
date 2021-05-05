@extends('AdminMain')
@section('content')
<div class="album py-5 bg-info">

    <div class="container">
        <h3 class="font-weight-bolder p-1 ">User Profile</h3>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">



        <div class="col">
          <div class="card shadow-sm">
            <img style=" height: 200px; width: 100% ;" src="{{url('/files/member/'.$u_rqs->userreq->member->image)}}" alt="">
            <div class="card-body">
                <h4 class="text-dark">Name: {{ $u_rqs->userreq->name}}</h4>
                <p class="text-dark">Date of Birth:{{$u_rqs->userreq->member->dob}} </p>
                <p class="text-dark">Email:{{ $u_rqs->userreq->email}} </p>
                <p class="text-dark">Address:{{$u_rqs->userreq->member->address}}</p>
                <p class="text-dark">Account_no:{{$u_rqs->userreq->member->account_no}} </p>
                <p class="text-dark">Request type: {{ $u_rqs->request_type }}</p>
                <p class="text-dark"> Purpose: {{ $u_rqs->loan_purpose}}</p>
                <p class="text-dark"> Request Amount: {{ $u_rqs->requested_amount }} BDT</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('request.rejected',$u_rqs->id)}}" class="btn btn-danger w-100 text-center">
                               Request Cancel </a>
                        </div>
                            <div class="col-md-6">
                                <a href="{{ route('request.approval',$u_rqs->id)}}"class="btn btn-danger w-100 text-center">
                                   Request Approve  </a>
                            </div>

                    </div>
                    <small class="text-muted"></small>
                </div>
            </div>
          </div>
        </div>











      </div>
    </div>
  </div>

  <div class="p-3 bg-light">

</div>

@endsection
