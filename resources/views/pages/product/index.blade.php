@extends('layouts.main')
@section('content')
<section class="product">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="product-item product-wrapper-description">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-item-title">
                                    <div class="discount">
                                        @if(isset($product->discount))
                                            <span>-{{ $product->discount }}%</span>
                                        @endif
                                    </div>
                                    <h1 class="title-page">{{ $product->title }}</h1>
                                    <img src="/{{ $product->images }}" alt="photo product">
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="product-description">
                                    <span class="description-title">Описание:</span>
                                    <div class="description">
                                        <?php echo $product->description; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-item product-wrapper-order">
                        <div class="price">
                            <div class="current-price">
                                {{ $product->price }}₸
                            </div>
                            <div class="old-price">
                                {{ $product->old_price }}
                            </div>
                        </div>
                        <form action="#">
                            <button class="btn" type="submit">Добавить в корзину</button>
                        </form>
                        <div class="order-info">
                            <div class="pickup order-item">Самовывоз: <span> 20 марта</span></div>
                            <div class="delivery order-item">Доставка: <span> 21 марта</span></div>
                        </div>
                        <hr>
                        <div class="product-item-bottom">
                            <form class="favorites" action="#">
                                <button>
                                    <span class="favorites-icon"></span>
                                    <span>В избранное</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
