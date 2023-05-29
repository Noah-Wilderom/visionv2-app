<?php

use Visionv2\Http\Router;
use App\Http\Controllers\TestController;

// print_r('test');
// exit();

Router::get('/test', [TestController::class, 'index']);
