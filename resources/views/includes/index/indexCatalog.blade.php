<div class="categories">
    <ul class="nav nav-pills mb-md-3 mb-2" id="pills-tab" role="tablist">
        <?php $i=1; ?>
        @foreach($categories as $category)
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $i == 1 ? 'active' : '' }}" id="category{{ $category->id }}tab"
                data-bs-toggle="pill" data-bs-target="#category{{ $category->id }}" type="button"
                role="tab" aria-controls="category{{ $category->id }}"
                aria-selected="{{ $i == 1 ? 'true' : '' }}">{{ $category->title }}</button>
            </li>
        <?php $i++; ?>
        @endforeach
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <?php $j=1; ?>
        @foreach($categories as $category)
            <div class="tab-pane fade {{ $j == 1 ? 'show active' : '' }}" id="category{{ $category->id }}" role="tabpanel" aria-labelledby="category{{ $category->id }}tab" tabindex="0">
            <div class="carts">
                <div class="row">
                    <?php $k = 1; ?>
                    @foreach($products as $product)
                        @foreach($subCategories as $subCategory)
                            @if($product->sub_category_id === $subCategory->id && $subCategory->category_id === $category->id)
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-6">
                                    <div class="cart">
                                        <div class="top-info">
                                            <div class="discount"><span></span></div>
                                            <div class="favorites">
                                                <form action="#">
                                                    <button><img src="{{ asset('img/favorites.svg') }}" alt=""></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="wrapper-images">
                                            <div style="background-image: url('{{ $product->images }}')" class="img"></div>
                                        </div>
                                        <h2 class="title">
                                            <a href="product/edit/{{$product->id}}">
                                                {{ strlen($product->title)>27 ? substr($product->title, 0, 27) . '..' : $product->title}}
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <div class="current-price">{{ $product->price }}</div>
                                            <div class="old-price">{{ $product->old_price }}</div>
                                        </div>
                                        <form id="basketForm" action="{{ route('order.add', ['id' => $product->id]) }}" method="post" class="basket">
                                            @csrf
                                            <input type="hidden" name="quantity" value="1">
                                            <button type="submit" class="btn">В корзину</button>
                                        </form>
                                        <div class="stock">
                                            В наличии: {{ $product->stock }}шт
                                        </div>
                                    </div>
                                </div>
                                <?php $k++; ?>
                            @endif
                        @endforeach
                        @if($k > 6)
                            @break
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <?php $j++; ?>
        @endforeach
    </div>
</div>

