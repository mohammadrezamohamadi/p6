<?php

namespace App\controllers;

use App\core\Response;

class HomeController extends BaseController
{


    public function index()
    {

        return $this->render('home');
    }


}