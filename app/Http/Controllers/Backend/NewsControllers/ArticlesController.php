<?php

namespace STEE\Http\Controllers\Backend\NewsControllers;

use Illuminate\Http\Request;
use STEE\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('backend.news.articles.index');
    }
}
