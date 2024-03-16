<?php

namespace App\Http\Controllers\Admin\SubCategories;

use App\Http\Requests\Admin\SubCategories\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('sub.categories.index');
    }
}
