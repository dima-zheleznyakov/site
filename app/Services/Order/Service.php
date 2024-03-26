<?php


namespace App\Services\Order;


use App\Models\OrderProduct;

class Service
{
    public function getTotalQuantity($orderId)
    {
        $orderProducts = OrderProduct::where('order_id', $orderId)->get();
        $totalQuantity = 0;

        foreach ($orderProducts as $orderProduct) {
            $totalQuantity += $orderProduct->quantity;
        }

        return $totalQuantity;
    }
}
