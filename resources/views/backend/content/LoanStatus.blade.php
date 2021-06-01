@extends('AdminMain')
@section('content')
{{-- table --}}
<table class=" container table mt-5 table-striped table-bordered border-primary bg-light table-cell-padding-.2rem">
    <thead class= "table-info">
      <tr>
        <th scope="col"> member  </th>
        <th scope="col">Request Type  </th>
        <th scope="col">Loan Purpose</th>
        <th scope="col">Requested Amount</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($user_request as $data )
        {{-- @dd($data->userreq); --}}

        <tr>
            <th scope="row">{{$data->userreq->name}}</th>
           <td>{{$data->request_type}}</td>
           <td>{{$data->loan_purpose}}</td>
           <td>{{$data->requested_amount}}</td>
           <td>{{$data->status}}</td>


        <td>

         @if($data->status == 'approved')
         <a href="{{route('transaction.view',['id'=>$data->id,'user_id'=>$data->userreq->id])}}" class="btn btn-info">View Transaction</a>
        @elseif ($data->status == 'Rejected')
        <a href="" class="btn btn-warning">No Transaction</a>
        @else
        <a href="{{route('transaction.view',['id'=>$data->id,'user_id'=>$data->userreq->id])}}" class="btn btn-info">View Transaction</a>
        <a href="{{ route('checkLoan',$data->id) }}" class="btn btn-warning">Check Request</a>
        @endif

        </td>

        </tr>

           @endforeach

  </table>

    @endsection
