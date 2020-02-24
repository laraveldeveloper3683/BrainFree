<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['role:admin|seller|vendor|buyer']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/profile/complete/{token}', 'UserController@getToken');


Route::prefix('admin')->group(function () {
    Route::resource('roles', 'Admin\RoleController');
});

\App\Http\Controllers\Buyer\BuyerController::routers();

\App\Http\Controllers\Seller\SellerController::routers();

\App\Http\Controllers\Vendor\VendorController::routers();

