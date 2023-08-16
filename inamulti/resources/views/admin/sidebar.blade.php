<div class="brand-logo">
    <a href="{{url('/Admin-Page-Admin-Dashboard')}}">
     <img src="{{asset('img/LOGO-INAMULTI.png')}}" class="logo-icon" alt="logo icon">
     <h5 class="logo-text">Inamulti Intipack</h5>
   </a>
 </div>
 <ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header">MAIN NAVIGATION</li>
    <li>
      <a href="{{url('/Admin-Page-Admin-Dashboard')}}">
        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>
    <li>
      <a href="{{url('/Recruitment')}}">
        <i class="zmdi zmdi-grid"></i> <span>Recruitment</span>
      </a>
    </li>
    <li>
      <a href="{{route('career.create')}}">
        <i class="zmdi zmdi-share text-info"></i> <span>Posting Career</span>
      </a>
    </li>
    <li>
        <a href="{{url('/Career')}}">
          <i class="zmdi zmdi-share text-info"></i> <span>Career</span>
        </a>
    </li>
  </ul>
