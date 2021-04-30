@extends('AdminMain')
@section('content')



{{-- search option --}}
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>

  <div class="col-md-4">
    <form action="{{route('member.search')}}" method="get">
        @csrf
    <input name="search" type="text" placeholder="Search" class="form-control">
    <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<div>
@if(isset($search))
        <p>
        <span class="alert alert-success"> you are searching for '{{$search}}' , found ({{count($members)}})</span>
        </p>
    @endif

    </div>

<table class="table mt-5 table-striped table-bordered border-primary bg-light table-cell-padding-.2rem">
    <thead class= "table-info">
      <tr>
        <th scope="col"> member  </th>
        <th scope="col">Request Type  </th>
        <th scope="col">Loan Purpose</th>
        <th scope="col">Requested Amount</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($user_request as $data )

        <tr>
            <th scope="row">{{$data->userreq->name}}</th>
           <td>{{$data->request_type}}</td>
           <td>{{$data->loan_purpose}}</td>
           <td>{{$data->requested_amount}}</td>
           <td class="text-success">{{$data->status}}</td>


        </tr>

           @endforeach

  </table>
@endsection