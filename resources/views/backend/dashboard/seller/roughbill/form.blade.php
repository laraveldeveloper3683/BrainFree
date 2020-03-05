@extends('layouts.master')
    @section('content')
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Customer's E-Rough Bill Generate</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>E-RoughBill</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Customer's Bill</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title"></div>
                    <div class="ibox-content">
                        <form method="post" action = "/seller/seller/roughbill/form/submit" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Customer's Name</label>
                                <div class="col-sm-10"><input type="text" name ="name" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Father's Name</label>
                                <div class="col-sm-10"><input type="text" name="f_name" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-10"><input type="text" name="phone" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10"><input type="email" name="email" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Address / Street</label>
                                <div class="col-sm-10"><input type="text" name="address" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10"><input type="text" name="city" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">District</label>
                                <div class="col-sm-10"><input type="text" name="district" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Pin Code</label>
                                <div class="col-sm-10"><input type="text" name="pin_code" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-10"><input type="text" name="country" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Mobile Brand</label>
                                <div class="col-sm-10"><input type="text" name="mobile_brand" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Mobile Model</label>
                                <div class="col-sm-10"><input type="text" name="mobile_model" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Mobile Price</label>
                                <div class="col-sm-10"><input type="text" name="mobile_price" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Mobile Color</label>
                                <div class="col-sm-10"><input type="text" name="mobile_color" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Mobile Payment Mode:</label>
                                <div class="col-sm-10"><input type="text" name="payment_mode" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Mobile IMEI</label>
                                <div class="col-sm-10"><input type="text" name="mobile_imei" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Mobile IMEI Photo</label>
                                <div class="col-sm-10"><input type="file" name="mobile_imei_photo" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-white btn-sm" type="submit">Cancel</button>
                                    <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
