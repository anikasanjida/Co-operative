@extends('main')
@section('login')

<body>
    <div class="row">

        <div class="col-md-3">

        </div>
        <div class="col-md-6" style="padding:50px; ">
            <h1>Reset Your Password</h1>
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif

            <form action="{{route('password.reset.post')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Enter New Password</label>
                    <input required name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Enter Password Again</label>
                    <input required name="password_confirmation" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <input type="hidden" value="{{$token}}" name="token">
                <input type="hidden" value="{{$email}}" name="email">

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-3">

        </div>
    </div>
</body>
@endsection
