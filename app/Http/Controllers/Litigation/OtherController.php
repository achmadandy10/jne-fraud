<?php

namespace App\Http\Controllers\Litigation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function index()
    {
        return view('pages.litigation.other.index');
    }

    public function check()
    {
        return view('pages.litigation.other.check');
    }

    public function report()
    {
        return view('pages.litigation.other.report');
    }
}
