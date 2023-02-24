<?php

namespace App\GraphQL\Queries;

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Arr;

class Orders
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $allOrders = collect();
        $orders = Order::orderBy('created_at', 'desc')->get();

        foreach ($orders as $order) {
            $order['created_at'] = $order->created_at->format('H:i d/m/Y');
            $order['user'] = User::find($order['user_id'])->name;
            $allOrders->push($order);
        }

        return $allOrders;
    }
}
