<?php
/*
*Route principal da aplicacao, aqui esta e redirecionamento para
*o Frontend e para o Front end, e os demais url que provera o acesso
*as paginas do sistema que pode ser acedido por quaisquer pessoas,
*e claro desde que tenha a permissoes para tal.
*/
Route::get('/', 'Frontend\FrontController@index');

Auth::routes();


// ------------------------------------------------------------------------------------
// -----------------------Ruteadores da aplicacao--------------------------------------
// ------------------------------------------------------------------------------------
Route::get('/admin', 'Backend\AdminController@index')->name('admin');


// ------------------------------------------------------------------------------------
// -----------------------Ruteadores dos conteudos--------------------------------------
// ------------------------------------------------------------------------------------
Route::namespace('Backend\NewsControllers')->prefix('news')->group(function () {
    Route::resource('/articles', 'ArticlesController', ['only' => ['index']]);
});

// ------------------------------------------------------------------------------------
// -----------------------Ruteadores dos System----------------------------------------
// ------------------------------------------------------------------------------------
Route::namespace('Backend\SystemControllers')->middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/users', 'UsersController@index')->name('users');

    Route::get('user/profile', function () {
        // Uses first & second Middleware
    });
});
