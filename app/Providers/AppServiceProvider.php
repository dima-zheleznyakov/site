<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $categories = Category::all();
        $subCategories = SubCategory::all();
        $products = Product::all();

        View::share('categories', $categories);
        View::share('subCategories', $subCategories);
        View::share('products', $products);



        if (isset($_COOKIE['order_id'])){
            $orderId = $_COOKIE['order_id'];
            $orderProducts = OrderProduct::where('order_id', $orderId)->get();

            $generalOrder = 0;
            foreach($orderProducts as $orderProduct) {
                $generalOrder += $orderProduct->quantity;
            }

            View::share('generalOrder', $generalOrder);
        }

    }
}
