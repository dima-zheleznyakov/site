<?php

namespace App\Http\Controllers\Admin\SubCategories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(SubCategory $subCategory)
    {
        $categories = Category::all();
        return view('admin.sub_categories.edit', compact('subCategory', 'categories'));
    }
}
