
@extends('UserMain')
@section('content')
<body style="background-image:url(/img/blue.jpg); background-repeat:no-repeat;background-size:100% 100%;background-attachment:fixed">
    <div class="flex-container">
        <div class="flex-item">
            <h1 id="customer">
                Welcome User !
                {{auth()->user()->name}}
            </h1>
            {{-- @dd() --}}
            <p id="customer" style="max-width:800px text-centered">
                From here you can see your all account status with your profile
                and also you can send request to the admin for balance transaction process.
            </p>
        </div>
    </div>

</body>
</html>
@endsection

