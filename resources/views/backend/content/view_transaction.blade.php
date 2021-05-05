@extends('AdminMain')
@section('content')

  {{-- Table title --}}

  <div class="title text-center mb-3 bg-info text-dark">
    <h3 class="font-weight-bolder p-1 m-5">Transaction List</h3>

 </div>


     {{-- table --}}
 <table class=" container table table-striped table-bordered border-primary bg-success table-cell-padding-.2rem">
     <thead class= "table-dark">
       <tr>
         <th scope="col"> member  </th>
         <th scope="col"> loan_amount  </th>
         <th scope="col"> paid_amount</th>
         <th scope="col">payment_Date</th>
         <th scope="col">Due_Payment</th>
       </tr>
     </thead>
     <tbody>

        @foreach ($u_rqs as $data )
        <tr>
            <th scope="row">{{$data->transactionUserName->name}}</th>
{{-- @dd($data); --}}

           <td>{{$data->transactionUserReq->total_interest_amount}}</td>
           <td>{{$data->amount}}</td>
           <td>{{$data->date}}</td>
        </tr>
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>{{$total}}</td>
        </tr>
     </table>
@endsection
