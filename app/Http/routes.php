<?php

Route::group(['prefix' => 'admin', 'middleware' => 'web'], function () {
    Route::auth();
});

Route::group(['middleware' => 'web'], function () {
    return 'Hello world!';
    //echo $this->app->instance('path.storage');
    //Route::get('/', 'HomeController@index');
});