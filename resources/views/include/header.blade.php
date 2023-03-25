<header class="p-1" style="background-color: rgb(41, 64, 145)">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                {{-- / --}}
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-flex" role="search" method="POST" action="{{ route('search') }}">
                {{ csrf_field() }}
                <input type="search" class="form-control form-control-sm  mx-1" placeholder="Rechercher" aria-label="Search">
                <button type="submit" class="btn btn-sm btn-light">Search</button>
            </form>
        </div>
    </div>
</header>


<div class="shadow-sm">
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
            <a href="{{ url('/') }}" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img class="rounded-circle" width="50px" height="50px" src="{{ asset('images/img1.jpg') }}" alt="logo">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('acceuil') }}" class="nav-link px-2 link-secondary">ACCEUIL</a></li>
                <li><a href="{{ route('about') }}" class="nav-link px-2 link-dark">A PROPOS</a></li>
                <li><a href="{{ route('service') }}" class="nav-link px-2 link-dark">SERVICES</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link px-2 link-dark">CONTACTS</a></li>
            </ul>
        </header>
    </div>
</div>