<?php

namespace App\controllers;

use App\core\Response;

class UploadController extends BaseController
{


    public function showUpload()
    {

        return $this->render('upload');
    }

    public function showGuestUpload()
    {

        return $this->render('guestUpload');
    }

}