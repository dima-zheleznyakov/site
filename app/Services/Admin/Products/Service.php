<?php


namespace App\Services\Admin\Products;


use App\Models\Product;
use App\Models\SubCategory;

class Service
{
    public function store($data, $request){

        if ($request->hasFile('images')) {
            $file = $request->file('images');
            // Генерация уникального имени для файла
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            // Перемещение файла в директорию public/pic/
            $file->move(public_path('pic/products'), $filename);
            // Возвращение пути к загруженному файлу или другого ответа
            $data['images'] = public_path('pic/products/' . $filename);
        }

        $product = Product::create($data);
    }

    public function update($data, $request, $product){

        if ($request->hasFile('images')) {
            $file = $request->file('images');
            // Генерация уникального имени для файла
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            // Перемещение файла в директорию public/pic/
            $file->move(public_path('pic/products'), $filename);
            // Возвращение пути к загруженному файлу или другого ответа
            $data['images'] = public_path('pic/products/' . $filename);
        }

        $product->update($data);
    }
}
