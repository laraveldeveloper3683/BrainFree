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
                       <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{auth()->user()->name}}</strong>
                        </span>
                        <span class="text-muted text-xs block">{{auth()->user()->name}}<b class="caret"></b></span> </span> </a>
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
            @hasanyrole('admin')
                @include('backend.dashboard.includes.leftbars.admin')
            @endhasanyrole
            @hasanyrole('buyer')
                @include('backend.dashboard.includes.leftbars.buyer')
            @endhasanyrole
            @hasanyrole('seller')
                @include('backend.dashboard.includes.leftbars.seller')
            @endhasanyrole
            @hasanyrole('vendor')
                @include('backend.dashboard.includes.leftbars.vendor')
            @endhasanyrole
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
