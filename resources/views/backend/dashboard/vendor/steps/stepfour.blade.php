@extends('layouts.master')
@section('content')
    @include('backend.dashboard.includes.header')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title"><small>Complete Profile / Step-Third</small></div>
                <div class="ibox-content">
                    <form method="POST" class="form-horizontal" action="/vendor/vendor/step/step4/submit" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Upload Pan Card :</label>
                            <div class="col-sm-10"><input type="file" name ="pan_card" value="{{ isset($vendor) ? $vendor->pan_card : old('pan_card') }}" class="form-control">
                                @if ($errors->has('pan_card'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('pan_card') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Upload Aadhar Card Front:</label>
                            <div class="col-sm-10"><input type="file" name ="aadhar_front" value="{{ isset($vendor) ? $vendor->aadhar_front : old('aadhar_front') }}" class="form-control">
                                @if ($errors->has('aadhar_front'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('aadhar_front') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Upload Aadhar Card Back:</label>
                            <div class="col-sm-10"><input type="file" name ="aadhar_back" value="{{ isset($vendor) ? $vendor->aadhar_back : old('aadhar_back') }}" class="form-control">
                                @if ($errors->has('aadhar_back'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('aadhar_back') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Business Photo / Shop Photo:</label>
                            <div class="col-sm-10">
                                <input type="file" name="shop_photo" value="{{(isset($vendor) && ($vendor->shop_photo))? $vendor->shop_photo: old('shop_photo')}}" class="form-control">
                                @if ($errors->has('shop_photo'))
                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('shop_photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Upload Business logo (Optional) :</label>
                            <div class="col-sm-10">
                                <input type="file" name="business_logo" value="{{(isset($vendor) && ($vendor->business_logo))? $vendor->business_logo: old('business_logo')}}" class="form-control">
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
