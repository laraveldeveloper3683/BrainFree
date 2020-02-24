@extends('layouts.master')
@section('content')
    @include('backend.dashboard.includes.header')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title"><small>Complete Profile / Step-Third</small></div>
                <div class="ibox-content">
                    <form method="POST" class="form-horizontal" action="/vendor/vendor/step/step3" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Address / Street :</label>
                            <div class="col-sm-10"><input type="text" name ="street" value="{{ isset($vendor) ? $vendor->street : old('street') }}" class="form-control">
                                @if ($errors->has('street'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('street') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">State:</label>
                            <div class="col-sm-10"><input type="text" name ="state" value="{{ isset($vendor) ? $vendor->state : old('state') }}" class="form-control">
                                @if ($errors->has('state'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('state') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">District:</label>
                            <div class="col-sm-10"><input type="text" name ="district" value="{{ isset($vendor) ? $vendor->district : old('district') }}" class="form-control">
                                @if ($errors->has('district'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('district') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Select City:</label>
                            <div class="col-sm-10">
                                <input type="text" name="city" value="{{(isset($vendor) && ($vendor->city))? $vendor->city: old('city')}}" class="form-control">
                                @if ($errors->has('city'))
                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Pin Code:</label>
                            <div class="col-sm-10">
                                <input type="text" name="pin_code" value="{{(isset($vendor) && ($vendor->pin_code))? $vendor->pin_code: old('pin_code')}}" class="form-control">
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
