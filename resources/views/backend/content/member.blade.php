@extends('AdminMain')

@section('content')

<div >

        <!-- Example single danger button -->
<div class="text-center">
    <button type="button" class="btn btn-danger dropdown-toggle m-5" data-bs-toggle="dropdown" aria-expanded="false">
      Select from here
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="{{route('MemberList')}}">Add Member</a></li>
      <li><a class="dropdown-item" href="{{route('ManageMember')}}">Manage Memeber</a></li>

    </ul>
  </div>








</div>


@endsection
