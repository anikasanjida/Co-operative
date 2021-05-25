@extends('AdminMain')

@section('content')

<div class="container p-3">
    <a class="btn btn-warning" onclick="printDiv()"href="#">Print</a>

</div>
<div id="printArea">
    <div>
    <h3>Loan History</h3>
    </div>
<table class=" container table table-striped table-bordered border-primary bg-success table-cell-padding-.2rem">
    <thead class= "table-dark">
      <tr>
        <th scope="col"> member  </th>
        <th scope="col"> loan_amount  </th>
        <th scope="col"> paid_amount</th>
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

           <td>{{$data->transactionUserReq->total_interest_amount - $data->amount}}</td>

        </tr>
        @endforeach

    </table>
   </div>
<script type="text/javascript">
function printDiv(){
    var printContents = document.getElementById("printArea").innerHTML;
    var orginalContents = document.body.innerHTML;

    document.body.innerHTML=printContents;
    window.print();


    document.body.innerHTML=orginalContents;

}
</script>
@endsection
