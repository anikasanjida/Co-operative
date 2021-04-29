{{-- <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="cover.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> --}}

@extends('main')

@section('login')
<div class="row" style="padding: 115px;">
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


<body style="background-image:url(/img/1.jpg); background-repeat:no-repeat;background-size:100 100%;background-attachment:fixed">
	<div class="flex-container">
            <div class="flex-item-1">
                <form method="post" action="{{route('userlogin')}}"class="container">
                    @csrf

                    <div class="flex-item-login">


                        <h2 ><center>Welcome to User Panel</center></h2>
                    </div>


                    {{-- <div class="flex-item">
                        <input type="text" name="name" placeholder="Enter your Username" required>
                    </div>
                    <br> --}}

                    <div class="flex-item">
                        <input type="email" name="email" placeholder="name@example.com" required>
                    </div>
                    <br>
                    <div class="flex-item">
                        <input type="password" name="password" placeholder="Enter your Password" required>
                    </div>
                    <br>
                    <div class="flex-item">
                        <button type="submit" class="btn btn-warning">Login</button>
                    </div>
                </form>
            </div>
        </div>

</body>
</html>
@endsection
