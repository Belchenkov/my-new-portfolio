<?php

Route::group([
    'module' => 'Portfolio',
    'middleware' => ['web'],
    'namespace' => 'App\Modules\Portfolio\Controllers'],
    function() {
    Route::get('/', 'PortfolioController@index');
});
