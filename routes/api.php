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

Route::namespace('Backend\NewsControllers')->prefix('v1')->group(function () {
// Route::namespace('Backend\NewsControllers')->group(function () {
    Route::get('/categories', 'CategoriesController@index');
    Route::post('/category', 'CategoriesController@store');
    Route::put('/category/{id}', 'CategoriesController@edit');
    Route::delete('/category/{id}', 'CategoriesController@delete');
});

