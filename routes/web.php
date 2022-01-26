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
Route::get('/drafting', function () { return view('pages.drafting'); });
Route::get('/litigation', function () { return view('pages.litigation'); });
Route::get('/permit', function () { return view('pages.permit'); });
Route::get('/customer-dispute', function () { return view('pages.customer_dispute'); });
Route::get('/contact-us', function () { return view('pages.contact_us'); });