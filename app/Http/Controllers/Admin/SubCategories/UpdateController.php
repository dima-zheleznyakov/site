<?php

namespace App\Http\Controllers\Admin\SubCategories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubCategories\UpdateRequest;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, SubCategory $subCategory)
    {
        $data = $request->validated();

        $this->service->update($subCategory, $data);

        return redirect()->route('sub.categories.index');
    }
}
