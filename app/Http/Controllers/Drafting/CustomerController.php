<?php

namespace App\Http\Controllers\Drafting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('pages.drafting.customer.index');
    }

    public function check()
    {
        return view('pages.drafting.customer.check');
    }
}
