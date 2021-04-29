@extends('AdminMain')
@section('content')
{{-- table --}}
<table class="table mt-5 table-striped table-bordered border-primary bg-light table-cell-padding-.2rem">
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

        <tr>
            <th scope="row">{{$data->userreq->name}}</th>
           <td>{{$data->request_type}}</td>
           <td>{{$data->loan_purpose}}</td>
           <td>{{$data->requested_amount}}</td>
           <td>{{$data->status}}</td>


        <td>
            {{-- <div class="dropdown">
                <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Action
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        @if ($data->status == 'pending')
                            <a class="btn btn-success" href="{{ route('completedUpdate', ['id' => $data->id, 'status' => 'occupied']) }}">Approve</a>
                        @elseif ( $data->status == 'occupied')
                            <a class="btn" href="{{ route('completedUpdate', ['id' => $data->id, 'status' => 'available']) }}">Make Available</a>
                        @else
                            <a class="btn" href="">Pending</a>
                        @endif
                    </li>


                    <li>
                        @if ($data->status == 'yes')
                            <a class="btn" href="{{ route('completedUpdate', ['id' => $data->id, 'status' => 'occupied']) }}">Make Occupied</a>
                        @elseif ( $data->status == 'occupied')
                            <a class="btn" href="{{ route('completedUpdate', ['id' => $data->id, 'status' => 'available']) }}">Make Available</a>
                        @else
                            <a class="btn" href="">Pending</a>
                        @endif
                    </li>




                </ul>
            </div> --}}

            <a href="{{ route('checkLoan',$data->id) }}" class="btn btn-warning">Check Request</a>
        </td>

        </tr>

           @endforeach

  </table>

    @endsection
