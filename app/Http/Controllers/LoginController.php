<?php

namespace App\Http\Controllers;

use App\Model\LoginModel;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function getData()
    {
        $users = LoginModel::all();
        return $users;
    }
}
