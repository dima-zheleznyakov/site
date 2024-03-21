<div class="container">
    <div class="menu_wrapper_item">
        <div class="menu_left_item">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <?php $i = 1; ?>
                @foreach($categories as $category)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $i === 1 ? 'active' : '' }}" id="category-{{$category->id}}"
                                data-bs-toggle="tab" data-bs-target="#category-{{$category->id}}-pane" type="button" role="tab"
                                aria-controls="category-{{$category->id}}-pane" aria-selected="true">{{ $category->title }}</button>
                    </li>
                <?php $i++ ?>
                @endforeach
            </ul>
        </div>

        <div class="menu_right_item">
            <div class="tab-content" id="myTabContent">
                <?php $j = 1; ?>
                @foreach($categories as $category)
                    <div class="tab-pane fade  {{ $j === 1 ? 'show active' : '' }}" id="category-{{$category->id}}-pane" role="tabpanel" aria-labelledby="category-{{$category->id}}-pane" tabindex="0">
                        <div class="menu_right_sub">
                            @foreach($subCategories as $subCategory)
                                @if($category->id === $subCategory->category_id)
                                    <div class="menu_right_sub_item">
                                        <h4>{{ $subCategory->title }}</h4>
                                        <ul>
                                            @foreach($products as $product)
                                                @if($product->sub_category_id === $subCategory->id)
                                                    <li><a href="{{ $_SERVER['REQUEST_URI'] === "/" ? "product/edit/$product->id" : $product->id}}">{{ $product->title }}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <?php $j++; ?>
                @endforeach
            </div>
        </div>
    </div>
</div>
