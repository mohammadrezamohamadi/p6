<?php

namespace App\controllers;

class AuthController extends BaseController
{
    public function showLogin()
    {
        return $this->render('login');
    }


        
}