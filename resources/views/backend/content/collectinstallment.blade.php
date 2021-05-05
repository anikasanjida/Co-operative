@extends('AdminMain')
@section('content')

<body>
<div class='container' class="modal-footer">
<form method="post" action="{{route('money.installment')}}">
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
    <td  class="bodytext"><strong class="style4"><span style="color:#0999BE;font-size:30px"> Amount ( Tk.)</td>
    <td>
     <input type="string" class="form-control" name="amount" style="BACKGROUND-COLOR: #ffffff; BORDER-BOTTOM: #8e8e6e 1px solid; BORDER-LEFT: #8e8e6e 1px solid; BORDER-RIGHT: #8e8e6e 1px solid; BORDER-TOP: #8e8e6e 1px solid; COLOR: #000000; FONT-FAMILY: verdana; FONT-SIZE: 8pt">
    </label></td>
  </tr>

  <tr>
    <td  class="bodytext"><strong class="style4"><span style="color:#0999BE;font-size:30px"> Date</td>
    <td>
     <input type="date" class="form-control" name="date" style="BACKGROUND-COLOR: #ffffff; BORDER-BOTTOM: #8e8e6e 1px solid; BORDER-LEFT: #8e8e6e 1px solid; BORDER-RIGHT: #8e8e6e 1px solid; BORDER-TOP: #8e8e6e 1px solid; COLOR: #000000; FONT-FAMILY: verdana; FONT-SIZE: 8pt">
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
</body>
@endsection
