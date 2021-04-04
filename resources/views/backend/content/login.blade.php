{{-- <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="cover.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> --}}

@extends('main')

@section('login')

<body>

	<div class="flex-container">
            <div class="flex-item-1">
                <form method="post" action="{{route('adminlogin')}}"class="container">
                    @csrf

                    <div class="flex-item-login">


                        <h2 ><center>Welcome to Admin Panel</center></h2>
                    </div>


                    <div class="flex-item">
                        <input type="text" name="Name" placeholder="Enter your Username" required>
                    </div>
                    <br>

                    <div class="flex-item">
                        <input type="password" name="Password" placeholder="Enter your Password" required>
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
