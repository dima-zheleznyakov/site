@extends('layouts.main')
@section('content')
    <section class="favorites">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="favorite-wrapper bg-wrapper">
                        <h2 class="title">Избранное</h2>
                        <div class="row">
                        @foreach($favoriteProducts as $product)
                            <div class="col-md-3">
                                <div class="cart">
                                    <div class="top-info">
                                        <div class="discount"><span></span></div>
                                        <div class="favorites">
                                            <form id="" action="{{ route('favorite.add', ['id' => $product->id]) }}" method="post" class="">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <button type="submit"><img src="{{ asset('img/favorites.svg') }}" alt=""></button>
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
                        @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="favorite-menu bg-wrapper">d</div>
                </div>
            </div>
        </div>
    </section>
@endsection
