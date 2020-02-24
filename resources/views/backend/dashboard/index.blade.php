@extends('layouts.master')
@section('content')
<div class="wrapper wrapper-content">
    @hasanyrole('admin')
    @include('backend.dashboard.admin.index')
    @endhasanyrole
    @hasanyrole('buyer')
    @include('backend.dashboard.buyer.index')
    @endhasanyrole
    @hasanyrole('seller')
    @include('backend.dashboard.seller.index')
    @endhasanyrole
    @hasanyrole('vendor')
    @include('backend.dashboard.vendor.index')
    @endhasanyrole
</div>
@endsection
