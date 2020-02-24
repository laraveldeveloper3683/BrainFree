<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\User;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index ()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store (Request $request)
    {
        $vendor = New Vendor;
        $vendorOne = $request->session()->get('stepone');
        $vendorTwo = $request->session()->get('steptwo');
        $vendorThree = $request->session()->get('stepthree');
        $vendor->user_id = Auth::id();
        $vendor->f_name = $vendorTwo['f_name'];
        $vendor->m_name = $vendorTwo['m_name'];
        $vendor->dob = $vendorTwo['dob'];
        $vendor->gender = $vendorTwo['gender'];
        $vendor->phone = $vendorTwo['phone'];
        $vendor->street = $vendorThree['street'];
        $vendor->state = $vendorThree['state'];
        $vendor->district = $vendorThree['district'];
        $vendor->city = $vendorThree['city'];
        $vendor->pin_code = $vendorThree['pin_code'];
        if ($PanImage = $request->file('pan_card')) {
            $panCardImage = time().' '.$PanImage->getClientOriginalName();
            $request->pan_card->move(public_path('/vendor/images/pancard'), $panCardImage);
            $panCard = $panCardImage;
        }
        $vendor->pan_card = $panCard;
        if ($AadharFrontImage = $request->file('aadhar_front')) {
            $AadharFront = time().' '.$AadharFrontImage->getClientOriginalName();
            $request->aadhar_front->move(public_path('/vendor/images/aadharcardfront'), $AadharFront);
            $AadharFrontPhoto = $AadharFront;
        }
        $vendor->aadhar_front = $AadharFrontPhoto;
        if ($AadharBackImage = $request->file('aadhar_back')) {
            $AadharBack = time().' '.$AadharBackImage->getClientOriginalName();
            $request->aadhar_back->move(public_path('/vendor/images/aadharcardback'), $AadharBack);
            $AadharBackPhoto = $AadharBack;
        }
        $vendor->aadhar_back = $AadharBackPhoto;
        if ($ShopImage = $request->file('shop_photo')) {
            $ShopPhoto = time().' '.$ShopImage->getClientOriginalName();
            $request->shop_photo->move(public_path('/vendor/images/shoplogos'), $ShopPhoto);
            $Shop = $ShopPhoto;
        }
        $vendor->shop_photo = $Shop;
        if ($BusinessLogoImage = $request->file('business_logo')) {
            $BusinessLogoPhoto = time().' '.$BusinessLogoImage->getClientOriginalName();
            $request->business_logo->move(public_path('/vendor/images/businesslogos'), $BusinessLogoPhoto);
            $BusinessLogo = $BusinessLogoPhoto;
        }
        $vendor->business_logo = $BusinessLogo;
        $vendor->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show ($id)
    {
        $data['form'] = Vendor::where('id', $request->id)->first();
        return view('backend.admin.vendor.form', $data);
    }

    public function getSteponeform(Request $request){
        $data['vendor'] = Auth::check() ? Auth::user(): null;
        return view('backend.dashboard.vendor.steps.stepone', $data);
    }

    public function postSteponeform(Request $request){
         Session::put('stepone',$request->all());

       return view('backend.dashboard.vendor.steps.steptwo');
    }

    public function getSteptwoform(Request $request){
        Session::put('steptwo',$request->all());
        return view('backend.dashboard.vendor.steps.stepthree');
    }


    public function getStepthreeform(Request $request){
        Session::put('stepthree',$request->all());
        return view('backend.dashboard.vendor.steps.stepfour');
    }



    public static function routers ()
    {
        \Route::prefix('vendor')->group(function () {
            \Route::resource('vendor', 'Vendor\VendorController');
            \Route::get('/vendor/step/step1','Vendor\VendorController@getSteponeform');
            \Route::post('/vendor/step/step1','Vendor\VendorController@postSteponeform');
            \Route::post('/vendor/step/step2','Vendor\VendorController@getSteptwoform');
            \Route::post('/vendor/step/step3','Vendor\VendorController@getStepthreeform');
            \Route::post('/vendor/step/step4/submit','Vendor\VendorController@store');
        });
    }
}
