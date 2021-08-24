<?php

namespace App\controllers;

use App\core\Request;

class AuthController extends BaseController
{


    public function showLogin()
    {
        $array = ['url' => 'login'];
        return $this->render('login', $array);
    }

    public function validate(Request $request)
    {
            
    }

    public function showRegister()
    {
        $array = ['url' => 'register'];
        return $this->render('register', $array);
    }

  
}