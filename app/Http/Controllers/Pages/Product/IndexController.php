<?php

namespace App\Http\Controllers\Pages\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Product $product)
    {
        return view('pages.product.index', compact('product'));
    }
}
