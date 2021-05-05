@extends('AdminMain')
@section('content')

<body>
<div class='container' class="modal-footer">
<form method="post" action="{{route('money.collect')}}">
    @csrf
    <input type="hidden" name="user_id" value="{{$id}}">
<tr>
    <td class="bodytext"><span style="color:#0999BE;font-size:30px"><b>Select month</b></span></td>
    <td class="bodytext">
        <div class=" from-group">
            <label for="exampleInputEmail1">Month</label>
            <input type="month" class="form-control" name="month" placeholder="Enter month">

          </div>
  </tr>
  <br>
  <tr>
    <td class="bodytext"><span style="color:#0999BE;font-size:30px"><b>Select year</b></span></td>
    <td class="bodytext">
     <select name="year" id="" class="form-control">
        <option selected="selected" value="">Select</option>
        @for ($i = date('Y'); $i <= date('Y', strtotime('+50 year')); $i++)
        <option value="{{$i}}">{{$i}}</option>
        @endfor


      </select>
      <span style="font-size:13px"><b>Years</b></label></td>
  </tr>
  <br>

  <tr>
    <td  class="bodytext"><strong class="style4"><span style="color:#0999BE;font-size:30px"> Amount ( Tk.)</td>
    <td>
     <input type="string" class="form-control" name="amount" style="BACKGROUND-COLOR: #ffffff; BORDER-BOTTOM: #8e8e6e 1px solid; BORDER-LEFT: #8e8e6e 1px solid; BORDER-RIGHT: #8e8e6e 1px solid; BORDER-TOP: #8e8e6e 1px solid; COLOR: #000000; FONT-FAMILY: verdana; FONT-SIZE: 8pt">
    </label></td>
  </tr>
  <tr>
  <div class="modal-footer">

    <button type="submit" class="btn btn-warning">submit</button>
  </div>
</tr>
</table>
</form>
</div>

<table class=" container table table-striped table-bordered border-primary bg-light table-cell-padding-.2rem">
    <thead class= "table-info">
      <tr>
        <th scope="col">Member</th>
        <th scope="col">Collection _Amount</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($collects as $data )
        <tr>
            <th scope="row">{{$data->Memberuser->name}}</th>
{{-- @dd($data); --}}

           <td>{{$data->amount}}</td>
           <td>{{$data->month}}</td>

        </tr>
        @endforeach

        <tr>
            <td>Total</td>
            <td>
                {{$collects->sum('amount')}}
            </td>
        </tr>
</body>
@endsection
