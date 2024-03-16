<?php


namespace App\Services\Admin\SubCategories;


use App\Models\SubCategory;

class Service
{

    public function store($data){
        $subCategory = SubCategory::create($data);
    }

    public function update($subCategory, $data){
        $subCategory->update($data);
    }

}
