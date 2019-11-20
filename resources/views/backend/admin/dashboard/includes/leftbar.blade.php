@php
  $route = Request::segment(1);
 $route2 = Request::segment(2);
@endphp

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="/assets/img/profile_small.jpg" />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ ucfirst(Auth::user()->name) }}</strong>
                        </span> <span class="text-muted text-xs block">Admin<b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li>
                          <a href="#">Profile</a>
                        </li>
                        <li>
                          <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </li>
                    </ul>
                </div>
                <div class="logo-element">
                    BF+
                </div>
            </li>
            <li class="{{ $route ===  'home' ? 'active' : ''  }}">
                <a href="{{ url('/home') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li class="{{ $route2 ===  'seller' ? 'active' : ''  }}">
                <a href="/admin/seller"><i class="fa fa-diamond"></i> <span class="nav-label">Seller</span></a>
            </li>
            <li>
                <a href="/admin/buyer"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Buyer</span><span class="fa arrow"></span></a>
                <!-- <ul class="nav nav-second-level collapse">
                    <li><a href="graph_flot.html">Flot Charts</a></li>
                </ul> -->
            </li>
            <li class="{{ $route2 ===  'vendor' ? 'active' : ''  }}">
                <a href="/admin/vendor"><i class="fa fa-envelope"></i> <span class="nav-label">Vendor </span></a>
                <!-- <ul class="nav nav-second-level collapse">
                    <li><a href="/admin/vendor/index">Index</a></li>
                </ul> -->
            </li>
            <li>
              <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  <i class="fa fa-sign-out"></i> {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>
        </ul>

    </div>
</nav>
