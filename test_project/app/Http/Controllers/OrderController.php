<?php

namespace App\Http\Controllers;


use App\Http\Requests\Order\CreateOrderRequest;
use App\Http\Requests\Order\DestroyOrderRequest;
use App\Http\Requests\Order\EditOrderRequest;
use App\Http\Requests\Order\IndexOrderRequest;
use App\Http\Requests\Order\StoreOrderRequest;
use App\Http\Requests\Order\UpdateOrderRequest;
use App\Models\Order;


class OrderController extends Controller
{

    public function index(IndexOrderRequest $request)
    {
        return $request->perform();
    }

    public function create(CreateOrderRequest $request)
    {
        return $request->perform();
    }

    public function store(StoreOrderRequest $request)
    {
        return $request->perform();
    }


    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }


    public function edit(EditOrderRequest $request, Order $order)
    {
        return $request->perform($order);
    }

    public function update(UpdateOrderRequest $request, Order $order)
    {
        return $request->perform($order);
    }

    public function destroy(DestroyOrderRequest $request, Order $order)
    {
        return $request->perform($order);
    }
}
