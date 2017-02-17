<?php

Route::auth();
Route::group(['prefix' => 'user', 'middleware' => ['web', 'auth']], function () {
    Route::get('/', function() {
        return 'Hello user!';
    });
});

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function() {
        return 'Hello world!';
    });
});