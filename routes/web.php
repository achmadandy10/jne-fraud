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
Route::get('/login', function () { return view('pages.auth.login'); });
Route::get('/database', function () { return view('pages.database.index'); });

Route::prefix('/drafting')->group(function () {
    Route::get('/', function () { return view('pages.drafting.index'); });

    Route::get('/customer', function(){return view('pages.drafting.customer.index'); });
    Route::get('/customer/check', function(){return view('pages.drafting.customer.check'); });

    Route::get('/vendor-supplier', function(){return view('pages.drafting.vendor_supplier.index'); });
    Route::get('/vendor-supplier/check', function(){return view('pages.drafting.vendor_supplier.check'); });

    Route::get('/lease', function(){return view('pages.drafting.lease.index'); });
    Route::get('/lease/check', function(){return view('pages.drafting.lease.check'); });
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
    Route::get('/perizinan-baru/approval', function () { return view('pages.permit.perizinan_baru.approval'); });
    Route::get('/perizinan-baru/check', function () { return view('pages.permit.perizinan_baru.check'); });
});

Route::prefix('/legal-permit')->group(function () {
    Route::get('/', function () { return view('pages.permit.legal-permit.index'); });
});


Route::prefix('/admin-legal')->group(function () {
    Route::get('/', function () { return view('pages.admin-legal.index'); });
});

Route::prefix('/legal-litigation-1')->group(function () {
    Route::get('/', function () { return view('pages.litigation.legal-litigation-1.index'); });
});

Route::prefix('/legal-litigation-2')->group(function () {
    Route::get('/', function () { return view('pages.litigation.legal-litigation-2.index'); });
});

Route::prefix('/legal-manager')->group(function () {
    Route::get('/', function () { return view('pages.litigation.legal-manager.index'); });
});

Route::prefix('/team-cs')->group(function () {
    Route::get('/', function () { return view('pages.litigation.team-cs.index'); });
});
