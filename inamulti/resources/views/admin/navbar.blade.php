<nav class="navbar navbar-expand fixed-top">
    <ul class="navbar-nav mr-auto align-items-center">
      <li class="nav-item">
        <a class="nav-link toggle-menu" href="javascript:void();">
         <i class="icon-menu menu-icon"></i>
       </a>
      </li>
      <li class="nav-item">
        <form class="search-bar">
          <input type="text" class="form-control" placeholder="Enter keywords">
           <a href="javascript:void();"><i class="icon-magnifier"></i></a>
        </form>
      </li>
    </ul>

    <ul class="navbar-nav align-items-center right-nav-link">
      <li class="nav-item">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
          <span class="user-profile"><img src="{{asset('img/nophoto.jpeg')}}" class="img-circle" alt="user avatar"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
         <li class="dropdown-item user-details">
          <a href="javaScript:void();">
             <div class="media">
               <div class="avatar"><img class="align-self-start mr-3" src="{{asset('img/nophoto.jpeg')}}" alt="user avatar"></div>
              <div class="media-body">
                @if(empty(Auth::user()->name))
                {{ '' }}
                @else
                {{ Auth::user()->name }}
                @endif
              <i class="bi bi-patch-check-fill"></i></h6>
              <p class="user-subtitle">
                @if(empty(Auth::user()->email))
                {{ '' }}
                @else
                {{ Auth::user()->email }}
                @endif
              </div>
             </div>
            </a>
          </li>
          <li class="dropdown-divider"></li>
          <li class="dropdown-item">
            <a href="{{url('/Account-Admin')}}"> Account</a>
        </li>
          <li class="dropdown-divider"></li>
          <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        </ul>
      </li>
    </ul>
  </nav>
