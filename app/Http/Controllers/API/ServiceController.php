<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\GetServicesService;

class ServiceController extends Controller
{
    public function get()
    {
        return GetServicesService::getServices();
    }
}
