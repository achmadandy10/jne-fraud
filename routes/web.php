<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('welcome'); });
Route::get('/contact-us', function () { return view('contact_us'); });

Route::prefix('/drafting')->group(function () {
    Route::get('/', function () { return view('pages.drafting.index'); });
    Route::get('/customer', function(){return view('pages.drafting.customer.index'); });
    Route::get('/vendor-supplier', function(){return view('pages.drafting.vendor_supplier.index'); });
    Route::get('/lease', function(){return view('pages.drafting.lease.index'); });
});

Route::prefix('/litigation')->group(function () {
    Route::get('/', function () { return view('pages.litigation.index'); });
    
    Route::get('/customer-dispute', function () { return view('pages.litigation.customer_dispute.index'); });
    Route::get('/customer-dispute/check', function () { return view('pages.litigation.customer_dispute.check'); });
    
    Route::get('/fraud', function () { return view('pages.litigation.fraud.index'); });
    Route::get('/fraud/check', function () { return view('pages.litigation.fraud.check'); });
    
    Route::get('/outstanding', function () { return view('pages.litigation.outstanding.index'); });
    Route::get('/outstanding/check', function () { return view('pages.litigation.outstanding.check'); });
    
    Route::get('/other', function () { return view('pages.litigation.other.index'); });
    Route::get('/other/check', function () { return view('pages.litigation.other.check'); });
});

Route::prefix('/permit')->group(function () {
    Route::get('/', function () { return view('pages.permit.index'); });
    Route::get('/perizinan-baru', function () { return view('pages.permit.perizinan_baru.index'); });
});
