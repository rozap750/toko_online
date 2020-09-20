<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        # code...
    }
}
