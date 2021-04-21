@extends('UserMain')
@section('content')

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


{{-- @dd($m=auth()->id) --}}
        <div class="col">
          <div class="card shadow-sm">
            <img style=" height: 200px; width: 100% ;" src="{{url('/files/member/'.$member->member->image)}}" alt="">
            <div class="card-body">
                <h4 class="text-dark">Name: {{$member->name}}</h4>
                <p class="text-dark">Date of Birth: {{$member->member->dob}}</p>
                <p class="text-dark">Address: {{$member->member->address}}</p>
                <p class="text-dark">Account_no: {{$member->member->account_no}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    {{-- <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div> --}}
                    <small class="text-muted">{{$member->member->gender}}</small>
                </div>
            </div>
          </div>
        </div>











      </div>
    </div>
  </div>

  <div class="p-3 bg-light">

</div>


@endsection
