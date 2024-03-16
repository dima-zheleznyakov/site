<?php

namespace App\Http\Controllers\Admin\SubCategories;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(SubCategory $subCategory)
    {
        $subCategory->delete();
        return redirect()->route('sub.categories.index');
    }
}
