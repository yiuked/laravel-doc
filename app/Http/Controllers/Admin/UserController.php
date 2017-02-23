<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {

        return view('admin.user', ['users' => User::all()]);
    }

    public function getAdd()
    {
        return view('admin.user');
    }

    public function postAdd()
    {
        return view('admin.user');
    }

    public function getEdit()
    {
        return view('admin.user');
    }

    public function postEdit()
    {
        return view('admin.user');
    }

    public function getDelete()
    {
        return view('admin.user');
    }

    public function postDelete()
    {
        return view('admin.user');
    }
}
