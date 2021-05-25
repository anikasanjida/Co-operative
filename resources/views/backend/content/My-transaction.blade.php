@extends('UserMain')
@section('content')

<!-- Button trigger modal -->
<div class=" text-start">
    {{-- <a class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
        View Transaction History
    </a> --}}

    <h3> View Transaction History</h3>
    </div>

     {{-- 1st row --}}
     <div class="container">
        <div class="row m-3">
            <div class="col-md-6">
                <div class="card bg-info text-black shadow" style="width: 20rm;height:10rem;">
                    <div class="card-body">
                        <h5><span data-feather="alert-octagon"></span>
                            <small>Loan Amount</small></h5>
                        <h2>{{$loan_total}}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="card text-black shadow" style="background-color:rgb(50, 241, 194); width: 20rm; height:10rem">
                    <div class="card-body">
                        <h5><span data-feather="package"></span>
                            <small>Paid Amount</small> </h5>
                        <h1>{{$paid_total}}</h1>
                    </div>
                </div>
            </div>

        </div>
        {{-- 2nd row --}}
        <div class="row m-3">
            <div class="col-md-6 ">
                <div class="card text-black shadow" style="background-color:rgb(168, 240, 100);width: 20rm;height:10rem;">
                    <div class="card-body">
                        <h5><span data-feather="activity"></span>
                            <small>Unpaid Amount</small></h5>
                        <h1>{{$unpaid_total}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="card text-white shadow" style="background-color:rgb(252, 127, 10);width: 20rm; height:10rem">
                    <div class="card-body">
                        <h5><span data-feather="user-x"></span>
                            <small>Deposit Balance </small> </h5>
                        <h1>{{$balance}}</h1>
                    </div>
                </div>
            </div>

        </div>
     </div>

    @endsection
