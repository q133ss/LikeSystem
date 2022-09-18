<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Services\GetServicesService;

class ServiceController extends Controller
{
    public function get()
    {
        return GetServicesService::getServices();
    }

    public function getInfo($id)
    {
        return Service::where('service_id',$id)->first();
    }
}
