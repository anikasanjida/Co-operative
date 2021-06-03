@extends('main')

@section('login')

<body>
<div class="row">

    <div class="col-md-3">

    </div>
    <div class="col-md-6" style="padding:50px; ">
        <h1>Write your registered email</h1>
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

        <form action="{{route('forget-password.link')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-md-3">

    </div>
</body>
@endsection
