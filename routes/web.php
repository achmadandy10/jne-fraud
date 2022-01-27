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
});

Route::prefix('/litigation')->group(function () {
    Route::get('/', function () { return view('pages.litigation.index'); });
    Route::get('/customer-dispute', function () { return view('pages.litigation.customer_dispute.customer_dispute'); });
    Route::get('/other', function () { return view('pages.litigation.other.index'); });
});

Route::prefix('/permit')->group(function () {
    Route::get('/', function () { return view('pages.permit.index'); });
    Route::get('/perizinan-baru', function () { return view('pages.permit.perizinan_baru.index'); });
});
