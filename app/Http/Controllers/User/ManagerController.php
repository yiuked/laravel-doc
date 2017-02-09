<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class ManagerController extends Controller {

  public function getIndex() {
    return 'hello laravel';
  }

  public function getHistroy() {
    return 'User histroy';
  }

  public function postLogin() {
    print_r($_POST);
    return 'POST data';
  }

}
