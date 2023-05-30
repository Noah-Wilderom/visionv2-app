<?php

namespace App\Http\Controllers;

use App\Services\TestService;
use Visionv2\Http\Controller;

class TestController extends Controller
{
    public function __construct()
    {
        // app()->container()->add(TestService::class);
        // print_r(app()->container()->getContainers());
    }

    public function index(TestService $service)
    {
        $service->test();
        return 'App doet het!';
    }
}
