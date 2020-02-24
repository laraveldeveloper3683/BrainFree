<li class="{{ $route2 ===  'roles' ? 'active' : ''  }}">
    <a href="{{ url('/admin/roles') }}"><i class="fa fa-user"></i> <span class="nav-label">Roles</span></a>
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
</li>
