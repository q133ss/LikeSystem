<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderController\NewOrderRequest;
use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function newOrder(NewOrderRequest $request)
    {
        return OrderService::create($request->validated());
    }
}
