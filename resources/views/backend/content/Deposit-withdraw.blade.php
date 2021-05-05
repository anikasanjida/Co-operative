@extends('UserMain')
@section('content')



<body style="background-image:url(/img/ful.jpg); background-repeat:no-repeat;background-size:50 50%;background-attachment:fixed">
    <form method="post" action="{{ route('loan.request')}}" class="container w-26 my-4">
        @csrf

        <div class="modal-body bg-info" style="height: 300px;">

                  <div class=" from-group">
                    <label for="exampleInputEmail1">Request Type</label>
                    <select class="form-control" name="type" id="" aria-label="Default select example">
                        <option value="" >select from here</option>
                        <option value="Loan">Loan</option>
                        <option value="Withdraw">Withdraw</option>
                        <option value="Deposit">Deposit</option>

                      </select>

                      @error('type')
                      <p class="invalid">{{$message}}</p>
                      @enderror

                  </div>

                  <div class=" from-group">
                    <label for="exampleInputEmail1">Loan Purpose</label>
                    <textarea type="text" class="form-control"name="loan_purpose" placeholder="Enter Reason here"></textarea>

                    @error('loan_purpose')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>

                 <div class=" from-group">
                    <label for="exampleInputEmail1">Requested Amount</label>
                    <input type="text" class="form-control"name="R_Amount" placeholder="10000000">

                <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">submit</button>
          {{-- <a href="{{ route('requestview') }}" class="btn btn-warning">submit</a> --}}
        </div>
    </div>
    </form>

    <div class="title text-center mb-3 bg-info text-dark">
        <h3 class="font-weight-bolder p-1 m-5">Request View</h3>

     </div>



{{-- table --}}
    <table class="table table-striped table-bordered border-primary bg-light table-cell-padding-.2rem">
        <thead class= "table-light">
          <tr>
            <th scope="col"> member  </th>
            <th scope="col">Request Type  </th>
            <th scope="col">Loan Purpose</th>
            <th scope="col">Requested Amount</th>
            <th scope="col">Payable_Amount</th>
            <th scope="col">Total_interest amount</th>
            <th scope="col">Action</th>
            <th scope="col">Note</th>
          </tr>
        </thead>
        <tbody>
           @foreach ($user_request as $data )

        <tr>
            <th scope="row">{{$data->userreq->name}}</th>
           <td>{{$data->request_type}}</td>
           <td>{{$data->loan_purpose}}</td>
           <td>{{$data->requested_amount}}</td>
           <td>{{$data->payable_amount}}</td>
           <td>{{$data->total_interest_amount}}</td>
           <td>{{$data->status }}</td>
           <td class="text-success">{{$data->note }}</td>


        </tr>
    </tbody>

    @endforeach



  </table>

</body>
@endsection

    {{-- <script>
        function confirmReset() {
            return confirm('Do you really want to reset?')
        }
    </script>

    </body> --}}

{{-- @dd($data->loanMember->Memberuser); --}}
