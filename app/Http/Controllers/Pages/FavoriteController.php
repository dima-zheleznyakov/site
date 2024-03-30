<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\FavoriteProduct;
use App\Models\Product;
use App\Models\UserData;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $favoriteProducts = [];

        if (isset($_COOKIE['user_data_id'])) {
            $favoritesUsers[] = FavoriteProduct::where('user_data_id', $_COOKIE['user_data_id'])->get();

            foreach ($favoritesUsers as $favoritesUser) {
                foreach ($favoritesUser as $item) {
                    $favoriteProducts[] = Product::where('id', $item->product_id)->first();
                }
            }
        }
        return view('pages.favorite.index', compact('favoriteProducts'));
    }
    public function add(Request $request, $id)
    {
        $user_data_id = $request->cookie('user_data_id');
        if ($user_data_id === null) {
            $userData = UserData::create();
            $user_data_id = $userData->id;
        } else {
            $userData = UserData::findOrFail($user_data_id);
            $userData->touch();
        }

        $product_id = $request->product_id;

        $favoritesUser = FavoriteProduct::where('user_data_id', $user_data_id)->get();

        $favoriteStatus = [];

        foreach ($favoritesUser as $favoriteUser) {
            if ($favoriteUser->product_id != $product_id) {
                $favoriteStatus[] = 'not';
            } else {
                $favoriteStatus[] = 'there';
            }
        }

        if (in_array('there', $favoriteStatus)) {
            // Если есть, выполняем что-то
            foreach ($favoritesUser as $favoriteUser) {
                if ($favoriteUser->product_id == $product_id) {
                    $favoritesDelete = FavoriteProduct::where('product_id', $favoriteUser->product_id)->get();

                    foreach ($favoritesDelete as $favoriteDelete) {
                        if ($favoriteDelete->user_data_id == $user_data_id) {
                            $favoriteDelete->delete();
                        }
                    }
                }
            }
        } else {
            // Если нет, выполняем что-то другое
            FavoriteProduct::create(['user_data_id' => $user_data_id, 'product_id' => $product_id]);
        }

        return back()->cookie('user_data_id', $user_data_id, 43200);
    }
}
