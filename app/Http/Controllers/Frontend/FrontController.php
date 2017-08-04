<?php

namespace STEE\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use STEE\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        return view('frontend.frontPage');
    }
}
