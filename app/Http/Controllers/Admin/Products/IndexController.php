<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $subCategories = SubCategory::all();
        $productsForeach = Product::all();

        foreach($productsForeach as $product){
            foreach($subCategories as $subCategorie){
                if ($product->sub_category_id === $subCategorie->id){
                    $product['sub_category_title'] = $subCategorie->title;
                    $products[] = $product;
                }
            }
        }

        return view('admin.products.index', compact('products'));
    }
}
