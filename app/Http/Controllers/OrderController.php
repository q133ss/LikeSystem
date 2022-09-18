<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderController\NewOrderRequest;
use App\Models\Order;
use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function newOrder(NewOrderRequest $request)
    {
        return OrderService::create($request->validated());
    }

    public function index()
    {
        $orders = Order::get();
        return view('orders', compact('orders'));
    }
}
