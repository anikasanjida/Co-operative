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
                        <a class="nav-link" href={{ route('AdminHome') }}>Profile</a>
                    </li>
                    <li class="nav-item nav-style">
                        <a class="nav-link" href="{{ route('notice') }}">Notice</a>
                    </li>
                    <li class="nav-item nav-style ">
                        <a class="nav-link" href="{{ route('member') }}">Members</a>
                    </li>

                    <li class="nav-item nav-style ">
                        <a class="nav-link" href="{{ route('transaction') }}">Transaction Request</a>
                    </li>
                    <li class="nav-item nav-style ">
                        <a class="nav-link" href="{{ route('contact') }}">Loan module</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>



</header>





