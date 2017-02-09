<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/18
 * Time: 15:16
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class LoginController extends Controller {

    public function getIndex() {
        return view('admin.login.index');
    }

    public function postAuth() {
        return response()->json(['name' => 'Abigail', 'state' => 'CA']);
    }

    public function getStatic() {
        print_r('Controller Static');
    }
}