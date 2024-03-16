<?php

namespace App\Http\Controllers\Admin\SubCategories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $subCategoriesForeach = SubCategory::all();

        $categories = Category::all();

        foreach($subCategoriesForeach as $subCategory){
            foreach($categories as $category){
                if ($subCategory->category_id === $category->id){
                    $subCategory['category_title'] = $category->title;
                    $subCategories[] = $subCategory;
                }
            }
        }

        return view('admin.sub_categories.index', compact('subCategories'));
    }
}
