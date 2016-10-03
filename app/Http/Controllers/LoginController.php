<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function getLogin(){
      return view('admin.login.login');
    }
    public function postLogin(LoginRequest $request){
      echo "Login success";
    }
}
