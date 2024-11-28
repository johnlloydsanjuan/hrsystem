<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginIndex(){
        return view('login');
    }

    public function loginProcess(){

    }

    public function logout(){
        return redirect('/');
    }
}
