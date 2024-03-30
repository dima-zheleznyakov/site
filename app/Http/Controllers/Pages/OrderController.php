<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\OrderProduct;
use App\Models\UserData;
use App\Models\Product;
use App\Services\Order\Service;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index(Request $request)
    {
        $user_data_id = $request->cookie('user_data_id');
        if (!empty($user_data_id)) {
            $products = UserData::findOrFail($user_data_id)->products;
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
        $user_data_id = $request->cookie('user_data_id');
        $quantity = $request->input('quantity');
        if($user_data_id === null) {
            $userData = UserData::create();
            $user_data_id = $userData->id;
        } else {
            $userData = UserData::findOrFail($user_data_id);
            $userData->touch();
        }
        if($userData->products->contains($id)) {
            $pivotRow = $userData->products()->where('product_id', $id)->first()->pivot;
            $quantity = $pivotRow->quantity + $quantity;
            $pivotRow->update(['quantity' => $quantity]);
        } else {
            $userData->products()->attach($id, ['quantity' => $quantity]);
        }

        // Получаем общее количество товаров в корзине
        $generalUserData = $service->getTotalQuantity($user_data_id);

        // Создаем JSON-ответ с общим количеством товаров
        $response = response()->json(['generalUserData' => $generalUserData]);

        // Добавляем куки к ответу
        return $response->cookie('user_data_id', $user_data_id, 43200);
    }

    public function update(Request $request)
    {
        $userDataProduct = OrderProduct::where('product_id', $request->product_id)->first();
        $userDataProduct->update(['quantity' => $request->quantity]);
        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $deletedIds = [];
        if (isset($request->delete)) {
            foreach ($request->delete as $productId) {
                $userDataProduct = OrderProduct::where('product_id', $productId)->first();
                if ($userDataProduct) {
                    $userDataProduct->delete();
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
