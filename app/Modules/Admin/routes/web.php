<?php

Route::group(
    [
        'module' => 'Admin',
        'prefix' => 'admin',
        'middleware' => ['web', 'auth'],
        'namespace' => 'App\Modules\Admin\Controllers'],
    function() {
    Route::get('/', 'AdminController@index');
    Route::get('/categories', 'AdminController@cagetoriesPage');
    Route::get('/works', 'AdminController@worksPage');
});
