<?php

namespace App\Http\Controllers\Pages\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Services\Order\Service;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index(Request $request)
    {
        $order_id = $request->cookie('order_id');
        if (!empty($order_id)) {
            $products = Order::findOrFail($order_id)->products;
            return view('pages.order.index', compact('products'));
        } else {
            abort(404);
        }
    }

    public function checkout()
    {

    }

    public function add(Request $request, $id, Service $service)
    {
        $order_id = $request->cookie('order_id');
        $quantity = $request->input('quantity');
        if($order_id === null) {
            $order = Order::create();
            $order_id = $order->id;
        } else {
            $order = Order::findOrFail($order_id);
            $order->touch();
        }
        if($order->products->contains($id)) {
            $pivotRow = $order->products()->where('product_id', $id)->first()->pivot;
            $quantity = $pivotRow->quantity + $quantity;
            $pivotRow->update(['quantity' => $quantity]);
        } else {
            $order->products()->attach($id, ['quantity' => $quantity]);
        }

        // Получаем общее количество товаров в корзине
        $generalOrder = $service->getTotalQuantity($order_id);

        // Создаем JSON-ответ с общим количеством товаров
        $response = response()->json(['generalOrder' => $generalOrder]);

        // Добавляем куки к ответу
        return $response->cookie('order_id', $order_id, 43200);
    }

    public function update(Request $request)
    {
        $orderProduct = OrderProduct::where('product_id', $request->product_id)->first();
        $orderProduct->update(['quantity' => $request->quantity]);
        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $deletedIds = [];
        if (isset($request->delete)) {
            foreach ($request->delete as $productId) {
                $orderProduct = OrderProduct::where('product_id', $productId)->first();
                if ($orderProduct) {
                    $orderProduct->delete();
                    $deletedIds[] = $productId; // Собираем ID удаленных продуктов
                }
            }
            return redirect()->back();
        } else {
            return redirect()->back();
        }

        // Возвращаем ID удаленных продуктов
//        return response()->json(['deletedIds' => $deletedIds]);
    }
}
