<?php

namespace App\Http\Controllers\Seller\RoughBill;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RoughBill;
use Auth;

class RoughBillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        return view('backend.dashboard.seller.roughbill.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store (Request $request)
    {
        $mobile_imei_photo = null;
        if ($request->hasFile('mobile_imei_photo')) {
            $mobile_imei_photo =$request->file('mobile_imei_photo')->storeAs('seller/roughbill/images/imei', time() . Auth::id() . $request->file('mobile_imei_photo')->getClientOriginalName());
        }
        RoughBill::firstOrCreate([
            'name' => $request->name,
            'f_name' => $request->f_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'district' => $request->district,
            'pin_code' => $request->pin_code,
            'country' => $request->country,
            'mobile_brand' => $request->mobile_brand,
            'mobile_model' => $request->mobile_model,
            'mobile_color' => $request->mobile_color,
            'mobile_price' => $request->mobile_price,
            'payment_mode' => $request->payment_mode,
            'mobile_imei' => $request->mobile_imei,
            'mobile_imei_photo' => $mobile_imei_photo
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show ($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit ($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        //
    }

    public function getRoughBill ()
    {
        return view('backend.dashboard.seller.roughbill.form');
    }

    public static function routers ()
    {
        \Route::prefix('seller')->group(function () {
            \Route::resource('roughbill', 'Seller\RoughBill\RoughBillController');
            \Route::get('/seller/roughbill/generate', 'Seller\RoughBill\RoughBillController@getRoughBill');
            \Route::post('/seller/roughbill/form/submit', 'Seller\RoughBill\RoughBillController@store');
        });
    }

}
