@extends('layouts.master')
@section('content')

@include('backend.admin.dashboard.includes.header')
<div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>BrainFree<small> Add Form For Add New Vendor</small></h5>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" action="/admin/vendor/form/submit" enctype="multipart/form-data">
                              @csrf
                                <div class="form-group"><label class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-10"><input type="text" name ="f_name" value="{{ isset($form) ? $form->f_name : old('f_name') }}" class="form-control">
                                      @if ($errors->has('f_name'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('f_name') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Last Name</label>
                                    <div class="col-sm-10"><input type="text" name="l_name" value="{{ isset($form) ? $form->l_name : old('l_name') }}" class="form-control">
                                      @if ($errors->has('l_name'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('l_name') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10"><input type="email" value="{{ isset($form) ? $form->email : old('email') }}" name="email" class="form-control">
                                      @if ($errors->has('email'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Phone / Mobile Number</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="phone" value="{{ isset($form) ? $form->phone : old('phone') }}">
                                      @if ($errors->has('phone'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('phone') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">House No./Village/Street</label>
                                    <div class="col-sm-10"><input type="text" name="street" value="{{ isset($form) ? $form->street : old('street') }}" class="form-control">
                                      @if ($errors->has('street'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('street') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Near By Place</label>
                                    <div class="col-sm-10"><input type="text" name="near_place" value="{{ isset($form) ? $form->near_place : old('near_place') }}" class="form-control">
                                      @if ($errors->has('near_place'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('near_place') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">City</label>
                                    <div class="col-sm-10"><input type="text" name="city" value="{{ isset($form) ? $form->city : old('city') }}" class="form-control">
                                      @if ($errors->has('city'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('city') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">District</label>
                                    <div class="col-sm-10"><input type="text" name="district" value="{{ isset($form) ? $form->district : old('district') }}" class="form-control">
                                      @if ($errors->has('district'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('district') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">State</label>
                                    <div class="col-sm-10"><input type="text" name="state" value="{{ isset($form) ? $form->state : old('state') }}" class="form-control">
                                      @if ($errors->has('state'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('state') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Country</label>
                                    <div class="col-sm-10"><input type="text" name="country" class="form-control" value="{{ isset($form) ? $form->country : old('country') }}">
                                      @if ($errors->has('country'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('country') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Business / Shop Name</label>
                                    <div class="col-sm-10"><input type="text" name="business_name" class="form-control" value="{{ isset($form) ? $form->business_name : old('business_name') }}">
                                      @if ($errors->has('business_name'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('business_name') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Business / Shop Work Type</label>
                                    <div class="col-sm-10"><input type="text" name="business_work_type" value="{{ isset($form) ? $form->business_work_type : old('business_work_type') }}" class="form-control">
                                      @if ($errors->has('business_work_type'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('business_work_type') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10"><input type="password" name="password" class="form-control">
                                      @if ($errors->has('password'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Upload Photo</label>
                                    <div class="col-sm-10"><input type="file" name ="vendor_photo"  class="form-control">
                                      @if ($errors->has('vendor_photo'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('vendor_photo') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Upload PAN Card</label>
                                    <div class="col-sm-10"><input type="file" name="vendor_pan_card_photo" class="form-control" >
                                      @if ($errors->has('vendor_pan_card_photo'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('vendor_pan_card_photo') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Upload Adhaar Card Front</label>
                                    <div class="col-sm-10"><input type="file" name="vendor_adhaar_card_front" class="form-control">
                                      @if ($errors->has('vendor_adhaar_card_front'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('vendor_adhaar_card_front') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Upload Adhaar Card Back</label>
                                    <div class="col-sm-10"><input type="file" name="vendor_adhaar_card_back" class="form-control">
                                      @if ($errors->has('vendor_adhaar_card_back'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('vendor_adhaar_card_back') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Upload Business Logo / Shop Logo (Optional)</label>
                                    <div class="col-sm-10"><input type="file" name="vendor_business_logo" class="form-control">
                                      @if ($errors->has('vendor_business_logo'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('vendor_business_logo') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Upload Shop / Office Front Photo</label>
                                    <div class="col-sm-10"><input type="file" name="vendor_business_front" class="form-control">
                                      @if ($errors->has('vendor_business_front'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('vendor_business_front') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{ isset($form) ? $form->id : '' }}">
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-10">
                                      <select class="form-control m-b" name="status">
                                        <option value="" disabled>-Select-Status</option>
                                        <option value="1">Enable</option>
                                        <option value="2">Disable</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
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
