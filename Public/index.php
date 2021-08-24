<?php

require_once __DIR__ . "/../vendor/autoload.php";

use App\core\Application;

use App\controllers\HomeController;
use App\controllers\AuthController;
use App\controllers\ProfileController;
use App\controllers\UploadController;


$app = new Application(dirname(__DIR__));

$app->router->get("/auth/login", [AuthController::class, "showLogin"]);
$app->router->get("/auth/register", [AuthController::class, "showRegister"]);
$app->router->get("/upload/guest", [UploadController::class, "showGuestUpload"]);
$app->router->get("/upload/user", [UploadController::class, "showUpload"]);
$app->router->get("/home/index", [HomeController::class, "index"]);
$app->router->get("/", [HomeController::class, "index"]);
$app->router->get("/profile/index", [ProfileController::class, "index"]);

$app->run();



