<?php

namespace STEE\Http\Controllers\Backend\SystemControllers;

use User;

use Illuminate\Http\Request;
use STEE\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        return view('backend.system.users');
    }
}
