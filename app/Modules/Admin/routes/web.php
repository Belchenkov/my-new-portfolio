<?php

Route::group(
    [
        'module' => 'Admin',
        'prefix' => 'admin',
        'middleware' => ['web', 'auth'],
        'namespace' => 'App\Modules\Admin\Controllers'],
    function() {
    Route::get('/', 'AdminController@index');
    Route::get('/categories', 'AdminController@categoriesPage');
    Route::get('/works', 'AdminController@worksPage');
    Route::post('/api/save-work', 'AdminController@saveWork');
});
