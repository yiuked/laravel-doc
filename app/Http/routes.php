<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/about', function() {
  print 'Hello laravel';
});

//隐匿声明
Route::controller('users', 'User\ManagerController');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
  Route::get('/', function () {
      return view('welcome', ['name' => 'PHP Framework']);
  });
});


Route::group(['prefix' => 'admin'], function(){
    Route::controller('login', 'Admin\LoginController');
    Route::controller('dashboard', 'Admin\DashboardController');
    Route::controller('user', 'Admin\DashboardController');
    Route::controller('employee', 'Admin\EmployeeController');
    Route::controller('category', 'Admin\CategoryController');
    Route::controller('product', 'Admin\ProductController');
    Route::controller('cart', 'Admin\CartController');
    Route::controller('order', 'Admin\OrderController');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
