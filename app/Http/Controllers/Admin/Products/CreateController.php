<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $subCategories = SubCategory::all();
        return view('admin.products.create', compact('subCategories'));
    }
}
