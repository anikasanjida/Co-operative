
 @extends('UserMain')
@section('content')


<div class="container p-3">
<div class="modal-body bg-info">

    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            {{-- from start --}}

<div class="col-md-8">
    <div class="card mb-3">

        <form method="post" action="{{ route('update.password', $member['id']) }}">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Current Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="password" class="form-control" required name="current_password" placeholder="**"
                            id="">

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">New Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="password" class="form-control" required name="new_password" placeholder="**"
                            id="">

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Confirm Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="password" required name="confirm_password" class="form-control" placeholder="*"  id="">

                    </div>
                </div>

                </div>
                <hr>
                {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                <a class="btn btn-danger w-15" href="{{ route('profile')}}">Close</a>
                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </form>

    </div>
@endsection
