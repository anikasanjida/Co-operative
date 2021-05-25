@extends('UserMain')
@section('content')


<div class="container p-3">
<div class="modal-body bg-info">

            {{-- from start --}}

<div class="col-md-8">
    <div class="card mb-3">

        <form method="post" action="{{ route('profile.update', $profile['id']) }}">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" name="name" value="{{ $profile->name }}"
                            id="">

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" name="email" value="{{ $profile->email }}"
                            id="">

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" name="contact"
                            value="{{ $profile->member->phon_no }}" id="">

                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" name="address" value="{{ $profile->member->address }}"
                            id="">

                    </div>
                </div>
                <hr>

                </div>
                <hr>
                <a class="btn btn-danger w-25" href="{{ route('profile')}}">Cancel</a>
                <button class="btn btn-info w-25" type="submit">Update</button>
            </div>
        </form>

    </div>
@endsection
