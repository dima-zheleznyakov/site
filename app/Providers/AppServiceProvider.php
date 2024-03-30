<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\SubCategory;
use App\Services\Order\Service;
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
    public function boot(Service $service)
    {

        $categories = Category::all();
        $subCategories = SubCategory::all();
        $products = Product::all();

        View::share('categories', $categories);
        View::share('subCategories', $subCategories);
        View::share('products', $products);



        if (isset($_COOKIE['user_data_id'])){
            $user_data_id = $_COOKIE['user_data_id'];
            $generalUserData = $service->getTotalQuantity($user_data_id);
            View::share('generalUserData', $generalUserData);
        }

    }
}
