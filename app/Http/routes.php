<?php

Route::auth();
Route::group(['prefix' => 'user', 'middleware' => ['web', 'auth']], function () {
    Route::get('/', 'Admin\DashboardController@index');
    Route::controller('users', 'Admin\UserController');
});

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function() {
        return 'Hello world!';
    });
});