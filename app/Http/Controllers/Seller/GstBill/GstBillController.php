<?php

namespace App\Http\Controllers\Seller\GstBill;

use App\GstBill;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GstBillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.dashboard.seller.gstbill.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function generateGstBill(){
        return view('backend.dashboard.seller.gstbill.form');
    }
    public function postGstBill(Request $request){
        $GstBill =  new GstBill;
        $GstBill->name = $request->name;
        $GstBill->f_name = $request->f_name;
        $GstBill->gst_number = $request->gst_number;
        $GstBill->phone = $request->phone;
        $GstBill->email = $request->email;
        $GstBill->address = $request->address;
        $GstBill->city = $request->city;
        $GstBill->district = $request->district;
        $GstBill->pin_code = $request->pin_code;
        $GstBill->country = $request->country;
        $GstBill->mobile_brand = $request->mobile_brand;
        $GstBill->mobile_model = $request->mobile_model;
        $GstBill->mobile_price = $request->mobile_price;
        $GstBill->payment_mode = $request->payment_mode;
        $GstBill->gst_percentage = $request->gst_percentage;
        $GstBill->total_gst_price = $request->total_gst_price;
        $GstBill->mobile_color = $request->mobile_color;
        $GstBill->mobile_imei = $request->mobile_imei;
        if ($ImeiPhoto = $request->file('mobile_imei_photo')) {
            $ImeiImage = time().' '.$ImeiPhoto->getClientOriginalName();
            $request->mobile_imei_photo->move(public_path('/seller/images/gstbill/imei'), $ImeiImage );
            $Imei  = $ImeiImage ;
        }
        $GstBill->mobile_imei_photo = $Imei;
        if ($customerPhoto = $request->file('customer_photo')) {
            $CustomerImage = time().' '.$customerPhoto->getClientOriginalName();
            $request->customer_photo->move(public_path('/seller/images/gstbill/customerimages'), $CustomerImage );
            $Customer  = $CustomerImage ;
        }
        $GstBill->customer_photo = $Customer;
        $GstBill->save();
        return back();
    }

    public static function routers ()
    {
        \Route::prefix('seller')->group(function () {
            \Route::resource('gstbill', 'Seller\GstBill\GstBillController');
            \Route::get('seller/gstbills/generate', 'Seller\GstBill\GstBillController@generateGstBill');
            \Route::post('seller/gstbills/form/submit', 'Seller\GstBill\GstBillController@postGstBill');
        });
    }

}
