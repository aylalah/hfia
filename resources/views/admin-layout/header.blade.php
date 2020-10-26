<div data-active-color="white" data-background-color="man-of-steel" data-image="app-assets/img/sidebar-bg/01.jpg" class="app-sidebar">
 
    <div class="sidebar-header">
      <div class="logo "><a href="#" class="logo-text">
          <div class="logo-img"><img src="app-assets/img/logo.png"/></div><span class="text align-middle">HFIA</span></a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="expanded" class="toggle-icon ft-toggle-right"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a></div>
    </div>
    <div class="sidebar-content" >
      <div class="nav-container">
        <ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true" class="navigation navigation-main">
        <li><a href="{{url('/home')}}"><i class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
          </li>
            <li class="has-sub nav-item"><a href="#"><i class="ft-aperture"></i><span data-i18n="" class="menu-title"> Front End </span></a>
              <ul class="menu-content">
                <li><a href="{{url('/homepage')}}" class="menu-item nav-item"><i class="ft-home"></i>Homepage</a>
                </li>
                <li><a href="{{url('/adminAbout')}}" class="menu-item nav-item"><i class="ft-briefcase"></i>About</a>
                </li>
                <li><a href="{{url('/adminMinistry')}}" class="menu-item nav-item"><i class="ft-home"></i>Ministry</a>
                </li>
                <li><a href="{{url('/adminSermon')}}" class="menu-item nav-item"><i class="ft-edit-3"></i>Sermons</a>
                </li>
                <li><a href="{{url('/adminEvent')}}" class="menu-item nav-item"><i class="ft-tag"></i>Events</a>
                </li>
                <li><a href="{{url('/adminBlog')}}" class="menu-item nav-item"><i class="ft-layout"></i>Blog</a>
                </li>
                <li><a href="{{url('/adminContact')}}" class="menu-item nav-item"><i class="ft-phone"></i>Contact</a>
                </li>
                <li><a href="{{url('/adminShop')}}" class="menu-item nav-item"><i class="ft-shopping-cart"></i>Shop</a>
                </li>
              </ul>
            </li>
                <li class=" nav-item"><a href="{{url('/order')}}"><i class="icon-basket-loaded"></i><span data-i18n="" class="menu-title">Orders</span></a>
                </li>
                <li class=" nav-item"><a href="{{url('/members')}}"><i class="icon-users"></i><span data-i18n="" class="menu-title">Members</span></a>
                </li>
                <li class=" nav-item"><a href="{{url('/admin')}}"><i class="icon-user"></i><span data-i18n="" class="menu-title">Admin</span></a>
                </li>
                <li class=" nav-item"><a href="{{url('/account')}}"><i class="ft-settings"></i><span data-i18n="" class="menu-title">Account Settings</span></a>
                </li>
        </ul>
      </div>
    </div>
   
    <div class="sidebar-background"></div>
    
  </div>
 

  
  <nav class="navbar navbar-expand-lg navbar-light bg-faded header-navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><span class="d-lg-none navbar-right navbar-collapse-toggle"><a aria-controls="navbarSupportedContent" href="javascript:;" class="open-navbar-container black"><i class="ft-more-vertical"></i></a></span>
        {{-- <form role="search" class="navbar-form navbar-right mt-1">
          <div class="position-relative has-icon-right">
            <input type="text" placeholder="Search" class="form-control round"/>
            <div class="form-control-position"><i class="ft-search"></i></div>
          </div>
        </form> --}}
      </div>
      <div class="navbar-container">
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item mr-2 d-none d-lg-block"><a id="navbar-fullscreen" href="javascript:;" class="nav-link apptogglefullscreen"><i class="ft-maximize font-medium-3 blue-grey darken-4"></i>
                <p class="d-none">fullscreen</p></a></li>
            <li class="dropdown nav-item"><a id="dropdownBasic2" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-bell font-medium-3 blue-grey darken-4"></i><span class="notification badge badge-pill badge-danger">4</span>
                <p class="d-none">Notifications</p></a>
              <div class="notification-dropdown dropdown-menu dropdown-menu-right">
                <div class="noti-list"><a class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4"><i class="ft-bell info float-left d-block font-large-1 mt-1 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 info">New Order Received</span><span class="noti-text">Lorem ipsum dolor sit ametitaque in, et!</span></span></a><a class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4"><i class="ft-bell warning float-left d-block font-large-1 mt-1 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 warning">New User Registered</span><span class="noti-text">Lorem ipsum dolor sit ametitaque in </span></span></a><a class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4"><i class="ft-bell danger float-left d-block font-large-1 mt-1 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 danger">New Order Received</span><span class="noti-text">Lorem ipsum dolor sit ametest?</span></span></a><a class="dropdown-item noti-container py-3"><i class="ft-bell success float-left d-block font-large-1 mt-1 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 success">New User Registered</span><span class="noti-text">Lorem ipsum dolor sit ametnatus aut.</span></span></a></div><a class="noti-footer primary text-center d-block border-top border-top-blue-grey border-top-lighten-4 text-bold-400 py-1">Read All Notifications</a>
              </div>
            </li>
            <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-user font-medium-3 blue-grey darken-4"></i>
                <p class="d-none">User Settings</p></a>
              <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu text-left dropdown-menu-right">
                <a href="{{url('/admin')}}" class="dropdown-item py-1"><i class="ft-user mr-2"></i><span> {{ Auth::user()->name }} </span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>