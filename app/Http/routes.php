<?php

Route::auth();
// 中间件的顺序一定要正确，如auth一定要在access前，否则在进行权限验证时会找不到user
Route::group(['prefix' => 'user', 'middleware' => ['web', 'auth', 'access']], function () {
    Route::get('/', 'Admin\DashboardController@index');
    Route::controller('users', 'Admin\UsersController');
    Route::controller('credit', 'Admin\CreditController');
});

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function() {
        return 'Hello world!';
    });
    Route::controller('credit', 'CreditController');
});