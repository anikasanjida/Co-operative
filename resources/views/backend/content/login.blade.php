@extends('Main')

@section('login')

<body style="background-image:url(/img/2.jpg); background-repeat:no-repeat;background-size:100 100%;background-attachment:fixed">
<div >

        <!-- Example single danger button -->
<div class="text-center">
    <button type="button" class="btn btn-danger dropdown-toggle m-5" data-bs-toggle="dropdown" aria-expanded="false">
      Select from here
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="{{route('adminlogin')}}">Admin Login</a></li>
      <li><a class="dropdown-item" href="{{route('userlogin')}}">User Login</a></li>

    </ul>
  </div>


</div>
</body>

@endsection
