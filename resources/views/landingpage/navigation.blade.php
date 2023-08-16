<div class="container">
    <a class="navbar-brand" href="{{url('/')}}">
      <img src="{{asset('img/logo-navbar-new.png')}}" alt="Bootstrap" width="201" id="logo-scroll">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item mx-2">
          <a class="nav-link active" aria-current="page" href="{{('/')}}">Home</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="{{url('/About')}}">About</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Product
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item menu-dropdown" href="{{url('/Polyester-Astroll-Details')}}">Polyester Film | ASTROLL</a></li>
              <li><a class="dropdown-item menu-dropdown" href="{{url('/Nylon-Amidroll-Details')}}">Nylon Film | AMIDROLL</a></li>
              <li><a class="dropdown-item menu-dropdown" href="{{url('/Nylon-Kofil-Details')}}">Nylon Film | KOFIL</a></li>
            </ul>
          </li>
        <li class="nav-item mx-2">
            <a class="nav-link" href="{{url('/Career')}}">Career</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="{{url('/Contact')}}">Contact</a>
        </li>
      </ul>
      <div>
      </div>
    </div>
  </div>
