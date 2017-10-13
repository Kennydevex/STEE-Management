<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Url aqui é acessado atraves do url do Projeto barra api barra url especifico da rota
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
