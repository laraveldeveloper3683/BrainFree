<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);;

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::prefix('admin')->group(function () {

Route::prefix('vendor')->group(function () {
Route::get('/', 'VendorController@index');
Route::get('/add' ,'VendorController@show');
Route::get('/edit/{id}' ,'VendorController@show');
Route::post('/form/submit' ,'VendorController@store');
Route::get('/delete' ,'VendorController@destroy');
Route::get('/block' ,'VendorController@block');
Route::get('/view' ,'VendorController@view');
});

    Route::get('/buyer', 'BuyerController@index');

    Route::get('/seller', 'SellerController@index');
});
