<?php

namespace Controllers;

use Models\Order;
use Models\Product;
use Leaf\Http\Request;
use Leaf\Http\Response;

class OrderController
{
    public function store(Request $request)
    {
        $orderData = $request->body();
        $order = Order::create($orderData);
        Response::json($order, 201);
    }

    public function show(Request $request)
    {
        $order = Order::find($request->param('id'));
        Response::json($order);
    }

    public function userOrders(Request $request)
    {
        $orders = Order::where('user_id', $request->param('user_id'))->get();
        Response::json($orders);
    }
}
