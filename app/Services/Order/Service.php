<?php


namespace App\Services\Order;


use App\Models\OrderProduct;

class Service
{
    public function getTotalQuantity($user_data_id)
    {
        $orderProducts = OrderProduct::where('user_data_id', $user_data_id)->get();
        $totalQuantity = 0;

        foreach ($orderProducts as $orderProduct) {
            $totalQuantity += $orderProduct->quantity;
        }

        return $totalQuantity;
    }
}
