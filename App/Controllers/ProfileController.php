<?php

namespace App\controllers;

use App\core\Response;

class ProfileController extends BaseController
{


    public function index()
    {

        return $this->render('profile');
    }

}