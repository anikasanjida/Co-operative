@extends('AdminMain')
@section('content')


<body style="background-image:url(/img/m.jpg); background-repeat:no-repeat;background-size:100 100%;background-attachment:fixed">
<!-- Button trigger modal -->
<div class=" text-start">
    <a class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add new Loan
    </a>
    </div>


    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-warning" id="exampleModalLabel">View loan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        {{-- from start --}}

        <form method="post" action="{{route('loan.add')}}"  class="container">
        @csrf

        <div class="modal-body bg-info">


            <div class=" from-group">
                <label for="exampleInputEmail1">Enter member</label>
                <input type="number" class="form-control" name="member_id" placeholder="Enter member_id">

              </div>


                <div class=" from-group">
                  <label for="exampleInputEmail1"> loan_amount</label>
                  <input type="string" class="form-control"name="loan_amount" placeholder="Enter loan_amount">

                </div>
                <div class="from-group ">
                  <label for="exampleInputPassword1">loan_interest</label>
                  <input type='string' class="form-control"name="loan_interest"placeholder="Enter loan_interest">
                </div>

               <div class=" from-group">
                  <label for="exampleInputEmail1">payment_term</label>
                  <input type="text" class="form-control"name="payment_term" placeholder="Enter payment_term">

                </div>
                <div class=" from-group">
                    <label for="exampleInputEmail1">total_amount_interest</label>
                    <input type="string" class="form-control"name="total_amount_interest" placeholder="Enter total_amount_interest">

                  </div>


                  <div class=" from-group">
                    <label for="exampleInputEmail1">payment_schedule</label>
                    <input type="datetime-local" class="form-control"name="payment_schedule" placeholder="Enter payment_schedule">

                  </div>
                  <div class=" from-group">
                    <label for="phon_no">due_date</label>
                    <input type="date" class="form-control" name="due_date" placeholder="Enter due_date">
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

<div class="title text-center mb-3 bg-info text-dark">
   <h3 class="font-weight-bolder p-1 m-5">Loan List</h3>

</div>


    {{-- table --}}
<table class="table table-striped table-bordered border-primary bg-light table-cell-padding-.2rem">
    <thead class= "table-dark">
      <tr>
        <th scope="col"> member  </th>
        <th scope="col"> loan_amount  </th>
        <th scope="col"> loan_interest</th>
        <th scope="col">payment_term</th>
        <th scope="col">total_amount_interest</th>
        <th scope="col">payment_schedule</th>
        <th scope="col">due_date</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($loans as $data )
{{-- @dd($data->loanMember->Memberuser); --}}
        <tr>
            <th scope="row">{{$data->loanMember->Memberuser->name}}</th>
           <td>{{$data->loan_amount}}</td>
           <td>{{$data->loan_interest}}</td>
           <td>{{$data->payment_term}}</td>
           <td>{{$data->total_amount_interest}}</td>
           <td>{{$data->payment_schedule}}</td>
           <td>{{$data->due_date}}</td>

        </tr>

        @endforeach

  </table>

</body>
    @endsection
