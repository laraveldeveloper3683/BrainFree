@extends('layouts.master')
@section('content')
    @include('backend.dashboard.includes.header')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title"><small>Complete Profile / Step One</small></div>
                <div class="ibox-content">
                    <form method="POST" class="form-horizontal" action="/vendor/vendor/step/step1" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10"><input type="text" name ="name" value="{{ isset($vendor) ? $vendor->name : old('name') }}" class="form-control">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                        <input type="hidden" name ="id" value="{{ isset($vendor) ? $vendor->id : old('id') }}">
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" value="{{(isset($vendor) && ($vendor->email))? $vendor-> email: old('email')}}" class="form-control">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Your Role:</label>
                            <div class="col-sm-10">
                                <button class="btn btn-white">{{isset($vendor) ? $vendor->getRoleNames() :''}}</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white" type="submit">Cancel</button>
                                <button class="btn btn-primary" type="submit">Save changes</button>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
