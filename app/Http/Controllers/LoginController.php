<?php

namespace App\Http\Controllers;

use App\Model\LoginModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getData() {
        $users = LoginModel::all();
        return $users;
    }
}
