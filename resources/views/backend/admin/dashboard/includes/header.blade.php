@php
$route1 = Request::segment(1);
$route2 = Request::segment(2);
$route3 = Request::segment(3);
@endphp
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>{{ucfirst($route2)}}s</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/home">Home</a>
                        </li>
                        <li>
                            <a>{{ucfirst($route1)}}</a>
                        </li>
                        <li class="active">
                            <strong>{{ucfirst($route3)}} Vendor</strong>
                        </li>
                        <li class="active">
                            <a href="/admin/{{$route2}}"><strong>{{isset($route2) && ($route3) && ($route3=='view')?ucfirst($route3):ucfirst($route2)}} List</strong></a>
                        </li>

                    </ol>
                </div>
                <div class="col-lg-2">
                  <a href="/admin/{{$route2}}/add">
                  <button style ="margin-top:28px;" type="button" class="btn btn-w-m btn-primary">Add {{ucfirst($route2)}}</button>
                </a>
                </div>
            </div>
