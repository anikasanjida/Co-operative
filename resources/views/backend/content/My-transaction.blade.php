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
                <div class="card bg-danger text-white shadow" style="width: 20rm;height:10rem;">
                    <div class="card-body">
                        <h5><span data-feather="alert-octagon"></span>
                            <small>Loan Amount</small></h5>
                        <h1>1000000</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="card text-white shadow" style="background-color:rgb(121, 109, 3); width: 20rm; height:10rem">
                    <div class="card-body">
                        <h5><span data-feather="package"></span>
                            <small>Paid Amount</small> </h5>
                        <h1>500000</h1>
                    </div>
                </div>
            </div>

        </div>
        {{-- 2nd row --}}
        <div class="row m-3">
            <div class="col-md-6 ">
                <div class="card text-white shadow" style="background-color:rgb(11, 4, 99);width: 20rm;height:10rem;">
                    <div class="card-body">
                        <h5><span data-feather="activity"></span>
                            <small>Unpaid Amount</small></h5>
                        <h1>500000</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="card text-white shadow" style="background-color:rgb(252, 127, 10);width: 20rm; height:10rem">
                    <div class="card-body">
                        <h5><span data-feather="user-x"></span>
                            <small>Balance </small> </h5>
                        <h1>50000</h1>
                    </div>
                </div>
            </div>

        </div>
     </div>

    {{-- 3rd row --}}
    {{-- <div class="row m-3">
        <div class="col-md-4 ">
            <div class="card bg-success text-white shadow" style="width: 20rm;height:10rem;">
                <div class="card-body">
                    <h5><span data-feather="truck"></span>
                        <small>Product Ready for Shipment</small></h5>
                    <h1>50 Unit</h1>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="card bg-warning text-white shadow" style="width: 20rm; height:10rem">
                <div class="card-body">
                    <h5><span data-feather="users"></span>
                        <small>Number of Active Warkers in production </small> </h5>
                    <h1>1200</h1>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="card text-white shadow" style="background-color:brown; width: 20rm;height:10rem;">
                <div class="card-body">
                    <h5><span data-feather="alert-triangle"></span>
                        <small>Material Shortage</small> </h5>
                    <h1>3 Units</h1>
                </div>
            </div>
        </div>

    </div> --}}

    @endsection
