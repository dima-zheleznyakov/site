<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
