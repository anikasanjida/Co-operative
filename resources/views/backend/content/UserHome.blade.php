
@extends('UserMain')
@section('content')
<body style="background-image:url(/img/userp.jpg); background-repeat:no-repeat;background-size:100% 100%;background-attachment:fixed">
    <div class="flex-container">
        <div class="flex-item">
            <h1 id="customer">
                Welcome User !
                {{auth()->user()->name}}
            </h1>
            {{-- @dd() --}}
            <p id="customer" style="max-width:800px text-centered">
                From here you can manage the system.
                You can add/manage member, view their transactions, edit their
                details and even delete them. You can also post news on the site.
            </p>
        </div>
    </div>

</body>
</html>
@endsection

