<header class="p-1" style="background-color: rgb(41, 64, 145)">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                {{-- / --}}
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-flex" role="search" method="POST" action="{{ route('recherche') }}">
                {{ csrf_field() }}
                <input class="form-control form-control-sm me-2" type="search" placeholder="Recherche" aria-label="Search">
                <button class="btn btn-sm btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg bg-light shadow-sm" aria-label="Offcanvas navbar large">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="rounded-circle" width="50px" height="50px" src="{{ asset('images/img1.jpg') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('acceuil') }}">ACCEUIL</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">A PROPOS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('service') }}">SERVICES</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACTS</a></li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</nav>