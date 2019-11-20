<?php

namespace App\Http\Controllers;

use App\Vendor;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use DB;


class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['vendors'] = Vendor::all();
      return view('backend.admin.vendor.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {

          $request->validate([
          'f_name' => 'required',
          'l_name' => 'required',
          'email' => 'required',
          'phone' => 'required',
          'street' => 'required',
          'near_place' => 'required',
          'city' => 'required',
          'district' => 'required',
          'state'=>'required',
          'country'=>'required',
          'business_name'=>'required',
          'business_work_type'=>'required',
          'password'=>'required|min:8|max:8',
          'vendor_photo'=>'required|mimes:jpeg,png,jpg',
          'vendor_pan_card_photo'=>'required|mimes:jpeg,png,jpg',
          'vendor_adhaar_card_front'=>'required|mimes:jpeg,png,jpg',
          'vendor_adhaar_card_back'=>'required|mimes:jpeg,png,jpg',
          'vendor_business_logo'=>'required|mimes:jpeg,png,jpg',
          'vendor_business_front'=>'required|mimes:jpeg,png,jpg',
          ]);
          $vendor_data = User::firstorNew(['id'=>$request->id]);
          $vendor_data->f_name = $request->f_name;
          $vendor_data->l_name = $request->l_name;
          $vendor_data->email = $request->email;
          $vendor_data->street = $request->street;
          $vendor_data->near_place = $request->near_place;
          $vendor_data->city = $request->city;
          $vendor_data->phone = $request->phone;
          $vendor_data->district = $request->district;
          $vendor_data->state = $request->state;
          $vendor_data->country = $request->country;
          $vendor_data->business_name = $request->business_name;
          $vendor_data->business_work_type = $request->business_work_type;
          $vendor_data->password = $request->password;
          $vendor_data->status = $request->status;
          if($request->hasFile('vendor_photo')) {
            $name = $request->file('vendor_photo')->getClientOriginalName().time().$request->user()->id;
            $path = $request->file('vendor_photo')->storeAs('uploads/images/vendor/profile', $name);
            $vendor_data->vendor_photo = $path;
          }

          if($request->hasFile('vendor_pan_card_photo')) {
            $name = $request->file('vendor_pan_card_photo')->getClientOriginalName().time().$request->user()->id;
            $path = $request->file('vendor_pan_card_photo')->storeAs('uploads/images/vendor/pancard', $name);
            $vendor_data->vendor_pan_card_photo = $path;
          }

          if($request->hasFile('vendor_adhaar_card_front')) {
            $name = $request->file('vendor_adhaar_card_front')->getClientOriginalName().time().$request->user()->id;
            $path = $request->file('vendor_adhaar_card_front')->storeAs('uploads/images/vendor/adhaar/front', $name);
            $vendor_data->vendor_adhaar_card_front = $path;
          }

          if($request->hasFile('vendor_adhaar_card_back')) {
            $name = $request->file('vendor_adhaar_card_back')->getClientOriginalName().time().$request->user()->id;
            $path = $request->file('vendor_adhaar_card_back')->storeAs('uploads/images/vendor/adhaar/back', $name);
            $vendor_data->vendor_adhaar_card_back = $path;
          }

          if($request->hasFile('vendor_business_logo')) {
            $name = $request->file('vendor_business_logo')->getClientOriginalName().time().$request->user()->id;
            $path = $request->file('vendor_business_logo')->storeAs('uploads/images/vendor/logo', $name);
            $vendor_data->vendor_business_logo = $path;
          }

          if($request->hasFile('vendor_business_front')) {
            $name = $request->file('vendor_business_front')->getClientOriginalName().time().$request->user()->id;
            $path = $request->file('vendor_business_front')->storeAs('uploads/images/vendor/businessphoto', $name);
            $vendor_data->vendor_business_front = $path;
          }

          if($vendor_data->assignRole('vendor'))
          {
            $vendor_data->save();
          }

          else{
            echo "data not inserted";
          }
          return redirect('/admin/vendor')->with("success", "You Vendor has been successfully Added in List");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      $data['form'] = Vendor::where('id' , $request->id)->first();
      return view('backend.admin.vendor.form',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $response =  array();
      $vendor  = vendor::find($request->input('id'));
      $vendor->delete();
      if($request->ajax()) {
        $response['message'] = "Vendor delete successfully.";
        return response()->json($response,200);
      }
     }

     public function block(Request $request)
     {
       if($request->ajax())
       {
           if($request->status == 2 )
           {
             // DB::table('vendors')->where('id', $request->id)
             $data = Vendor::where('id', $request->id);
             $data->status = '1';
             $data->save();
           }
           else
           {
             // DB::table('vendors')->where('id', $request->id)->update(array('status' => '2' ));
             $data = Vendor::where('id', $request->id);
             $data->status = '2';
             $data->save();
           }
       }

      }

      public function view(Request $request)
      {
        return view('backend.admin.vendor.view');

       }


}
