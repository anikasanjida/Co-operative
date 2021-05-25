
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">
            <span data-feather="home"></span>
            Home
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="{{ route('AdminHome') }}">
            <span data-feather="file"></span>
            Home
          </a> --}}
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('news') }}">
            <span data-feather="shopping-cart"></span>
            News
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('member') }}">
            <span data-feather="users"></span>
            Members
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('loan') }}">
            <span data-feather="bar-chart-2"></span>
            Loan module
            <span class="badge bg-danger rounded-pill">{{$request_count}}</span></a>
          </a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('report')}}">
              <span data-feather="bar-chart-2"></span>
              Report Generate
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('Approval')}}">
              <span data-feather="bar-chart-2"></span>
              Approval List
              <span class="badge bg-danger rounded-pill">{{$Approve_count}}</span></a></a>
            </a>
        </li>
      </ul>



    </div>
  </nav>

