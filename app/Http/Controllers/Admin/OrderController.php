<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/18
 * Time: 15:16
 */
 namespace App\Http\Controllers\Admin;

 use App\Http\Controllers\Controller;

 class OrderController extends Controller {

     public function getIndex() {
         print_r('Controller Dashboard');
     }

     public function getStatic() {
         print_r('Controller Static');
     }
 }