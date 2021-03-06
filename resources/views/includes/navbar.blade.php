<nav class="navbar navbar-expand-lg navbar-light bg-white ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="user/images/logo.png" alt="Brand Logo" class="brand-logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Travel</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Service
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Testimonial</a>
            </li>
        </ul>
        @guest
        <form class="d-flex form-inline d-sm-block d-md-none">
            <botton href="{{ route('login') }}" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ route('login') }}';">Sign in</botton>
        </form>
        <form class="d-flex form-inline my-2 my-lg-0 d-none d-md-block">
            <button href="{{ route('login') }}" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ route('login') }}';">Sign in</button>
        </form>
        @endguest

        @auth
        <form class="d-flex form-inline d-sm-block d-md-none" method="post" action="{{ route('logout') }}">
            @csrf
            <button href="{{ route('login') }}" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">Sign out</button>
        </form>
        <form class="d-flex form-inline my-2 my-lg-0 d-none d-md-block" method="post" action="{{ route('logout') }}">
            @csrf
            <button href="{{ route('login') }}" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">Sign out</button>
        </form>
        @endauth
      </div>
    </div>
</nav>

