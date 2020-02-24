@extends('layouts.master')
@section('content')
    @include('backend.dashboard.includes.header')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title"><small>Complete Profile / Step-Two</small></div>
                <div class="ibox-content">
                    <form method="POST" class="form-horizontal" action="/vendor/vendor/step/step2" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Father's Name:</label>
                            <div class="col-sm-10"><input type="text" name ="f_name" value="{{ isset($vendor) ? $vendor->father_name : old('f_name') }}" class="form-control">
                                @if ($errors->has('father_name'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('f_name') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Mother's Name:</label>
                            <div class="col-sm-10"><input type="text" name ="m_name" value="{{ isset($vendor) ? $vendor->mother_name : old('m_name') }}" class="form-control">
                                @if ($errors->has('m_name'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('m_name') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Date of Birth:</label>
                            <div class="col-sm-10"><input type="date" name ="dob" value="{{ isset($vendor) ? $vendor->dob : old('dob') }}" class="form-control">
                                @if ($errors->has('dob'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('dob') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Select Gender:</label>
                            <div class="col-sm-10">
                                <input type="text" name="gender" value="{{(isset($vendor) && ($vendor->gender))? $vendor->gender: old('gender')}}" class="form-control">
                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Phone Number:</label>
                            <div class="col-sm-10">
                                <input type="text" name="phone" value="{{(isset($vendor) && ($vendor->phone))? $vendor->phone: old('phone')}}" class="form-control">
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
