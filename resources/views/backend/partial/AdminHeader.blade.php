<header >

    <nav class="navbar navbar-expand-lg navbar-secondary bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Co-operative System </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item nav-style">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}"></a>
                    </li>
                    <li class="nav-item nav-style ">
                        <a class="nav-link" href={{ route('AdminHome') }}>Home</a>
                    </li>
                    <li class="nav-item nav-style">
                        <a class="nav-link" href="{{ route('news') }}">News</a>
                    </li>
                    <li class="nav-item nav-style ">
                        <a class="nav-link" href="{{ route('member') }}">Members</a>
                    </li>

                    <li class="nav-item nav-style ">
                        <a class="nav-link" href="{{ route('transaction') }}">Transaction</a>
                    </li>
                    <li class="nav-item nav-style ">
                        <a class="nav-link" href="{{ route('loan') }}">Loan module</a>
                    </li>
                    <li class="nav-item nav-style ">
                        <a class="nav-link" href="{{route('report')}}">Rport Generate</a>
                    </li>

                  <li class="nav-item nav-style ">
                    @auth()
                    <div class="nav-link">
                         <span style="color:rgb(236, 11, 11);">{{auth()->user()->name}}</span> <a style="text-decoration: none;" href="{{route('adminlogout')}}"> Logout</a>
                    </div>
                         @else
                        <a class="nav-link" href="{{route('userlogin')}}">Login</a>
                        @endauth
                </li>
                </ul>

            </div>
        </div>
    </nav>



</header>





