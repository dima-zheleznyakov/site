@extends('layouts.main')

@section('content')

    <section class="store">
        <div class="container">
            <div class="store_wrapper">
                <div class="store_item">
                    <img src="{{ asset('img/store1.png') }}" alt="">
                    <span>Акции</span>
                </div>
                <div class="store_item">
                    <img src="{{ asset('img/store2.png') }}" alt="">
                    <span>График работы</span>
                </div>
                <div class="store_item">
                    <img src="{{ asset('img/store3.png') }}" alt="">
                    <span>Промокоды</span>
                </div>
            </div>
        </div>
    </section>
    <section class="bottom-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider-banner">
                        <div class="owl-carousel owl-carousel-header owl-theme">
                            <div class="item">
                                <div style="background-image: url('pic/slide1.jpg')" class="slider-img"></div>
                            </div>
                            <div class="item">
                                <div style="background-image: url('pic/slide2.jpg')" class="slider-img"></div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-md-3">--}}
{{--                    <div class="header-cards-laptop">--}}
{{--                        <div class="order">--}}
{{--                            <div class="title_product_day">--}}
{{--                                <span>Товар дня</span>--}}
{{--                            </div>--}}

{{--                            <div class="owl-carousel owl-carousel-header-cards owl-theme">--}}
{{--                                <div class="item">--}}
{{--                                    <div class="top-info">--}}
{{--                                        <div class="discount"><span>-15%</span></div>--}}
{{--                                        <div class="favorites">--}}
{{--                                            <form action="#">--}}
{{--                                                <button><img src="{{ asset('img/favorites.svg') }}" alt=""></button>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="wrapper-images">--}}
{{--                                        <div style="background-image: url('pic/cart1.jpg')" class="img"></div>--}}
{{--                                    </div>--}}
{{--                                    <h2 class="title">--}}
{{--                                        <a href="#">Картридж для HP 1</a>--}}
{{--                                    </h2>--}}
{{--                                    <div class="price">--}}
{{--                                        <div class="current-price">3 000 ₸</div>--}}
{{--                                        <div class="old-price">5 000 ₸</div>--}}
{{--                                    </div>--}}
{{--                                    <form action="#" class="basket">--}}
{{--                                        <button class="btn">В корзину</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}

{{--                                <div class="item">--}}
{{--                                    <div class="top-info">--}}
{{--                                        <div class="discount"><span>-15%</span></div>--}}
{{--                                        <div class="favorites">--}}
{{--                                            <form action="#">--}}
{{--                                                <button><img src="{{ asset('img/favorites.svg') }}" alt=""></button>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="wrapper-images">--}}
{{--                                        <div style="background-image: url('pic/cart1.jpg')" class="img"></div>--}}
{{--                                    </div>--}}
{{--                                    <h2 class="title">--}}
{{--                                        <a href="#">Картридж для HP 2</a>--}}
{{--                                    </h2>--}}
{{--                                    <div class="price">--}}
{{--                                        <div class="current-price">3 000 ₸</div>--}}
{{--                                        <div class="old-price">5 000 ₸</div>--}}
{{--                                    </div>--}}
{{--                                    <form action="#" class="basket">--}}
{{--                                        <button class="btn">В корзину</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
{{--            <div class="header-cards-mobile">--}}
{{--                <div class="row d-md-none d-flex">--}}
{{--                    <div class="title_product_day">--}}
{{--                        <span>Товар дня</span>--}}
{{--                    </div>--}}
{{--                    <div class="col-6">--}}
{{--                        <div class="order">--}}
{{--                            <div class="top-info">--}}
{{--                                <div class="discount"><span>-15%</span></div>--}}
{{--                                <div class="favorites">--}}
{{--                                    <form action="#">--}}
{{--                                        <button><img src="{{ asset('img/favorites.svg') }}" alt=""></button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="wrapper-images">--}}
{{--                                <div style="background-image: url('pic/cart1.jpg')" class="img"></div>--}}
{{--                            </div>--}}
{{--                            <h2 class="title">--}}
{{--                                <a href="#">Картридж для HP</a>--}}
{{--                            </h2>--}}
{{--                            <div class="price">--}}
{{--                                <div class="current-price">3 000 ₸</div>--}}
{{--                                <div class="old-price">5 000 ₸</div>--}}
{{--                            </div>--}}
{{--                            <form action="#" class="basket">--}}
{{--                                <button class="btn">В корзину</button>--}}
{{--                            </form>--}}
{{--                            <div class="stock">--}}
{{--                                В наличии: 100+шт--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-6">--}}
{{--                        <div class="order">--}}
{{--                            <div class="top-info">--}}
{{--                                <div class="discount"><span>-15%</span></div>--}}
{{--                                <div class="favorites">--}}
{{--                                    <form action="#">--}}
{{--                                        <button><img src="{{ asset('img/favorites.svg') }}" alt=""></button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="wrapper-images">--}}
{{--                                <div style="background-image: url('pic/cart1.jpg')" class="img"></div>--}}
{{--                            </div>--}}
{{--                            <h2 class="title">--}}
{{--                                <a href="#">Картридж для HP</a>--}}
{{--                            </h2>--}}
{{--                            <div class="price">--}}
{{--                                <div class="current-price">3 000 ₸</div>--}}
{{--                                <div class="old-price">5 000 ₸</div>--}}
{{--                            </div>--}}
{{--                            <form action="#" class="basket">--}}
{{--                                <button class="btn">В корзину</button>--}}
{{--                            </form>--}}
{{--                            <div class="stock">--}}
{{--                                В наличии: 100+шт--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>

    <section class="index-categories">
        <div class="container">
            @include('includes.index.indexCatalog')
        </div>
    </section>

    <section class="banner-commercial">
        <div class="container">
            <div class="owl-carousel owl-carousel-banner owl-theme">
                <div class="item">
                    <div class="commercial"><a style="background-image: url('pic/slide1.jpg')" href="#"></a></div>
                </div>
                <div class="item">
                    <div class="commercial"><a style="background-image: url('pic/slide2.jpg')" href="#"></a></div>
                </div>
                <div class="item">
                    <div class="commercial"><a style="background-image: url('pic/slide1.jpg')" href="#"></a></div>
                </div>

            </div>
        </div>
    </section>

{{--    <section class="watched">--}}
{{--        <div class="container">--}}
{{--            <h2 class="title">👀 Вы недавно смотрели</h2>--}}
{{--            <div class="row">--}}
{{--                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-6">--}}
{{--                    <div class="order">--}}
{{--                        <div class="top-info">--}}
{{--                            <div class="discount"><span>-15%</span></div>--}}
{{--                            <div class="favorites">--}}
{{--                                <form action="#">--}}
{{--                                    <button><img src="{{ asset('img/favorites.svg') }}" alt=""></button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="wrapper-images">--}}
{{--                            <div style="background-image: url('pic/cart1.jpg')" class="img"></div>--}}
{{--                        </div>--}}
{{--                        <h2 class="title">--}}
{{--                            <a href="#">Картридж для HP</a>--}}
{{--                        </h2>--}}
{{--                        <div class="price">--}}
{{--                            <div class="current-price">3 000 ₸</div>--}}
{{--                            <div class="old-price">5 000 ₸</div>--}}
{{--                        </div>--}}
{{--                        <form action="#" class="basket">--}}
{{--                            <button class="btn">В корзину</button>--}}
{{--                        </form>--}}
{{--                        <div class="stock">--}}
{{--                            В наличии: 100+шт--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-6">--}}
{{--                    <div class="order">--}}
{{--                        <div class="top-info">--}}
{{--                            <div class="discount"><span>-15%</span></div>--}}
{{--                            <div class="favorites">--}}
{{--                                <form action="#">--}}
{{--                                    <button><img src="{{ asset('img/favorites.svg') }}" alt=""></button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="wrapper-images">--}}
{{--                            <div style="background-image: url('pic/cart1.jpg')" class="img"></div>--}}
{{--                        </div>--}}
{{--                        <h2 class="title">--}}
{{--                            <a href="#">Картридж для HP</a>--}}
{{--                        </h2>--}}
{{--                        <div class="price">--}}
{{--                            <div class="current-price">3 000 ₸</div>--}}
{{--                            <div class="old-price">5 000 ₸</div>--}}
{{--                        </div>--}}
{{--                        <form action="#" class="basket">--}}
{{--                            <button class="btn">В корзину</button>--}}
{{--                        </form>--}}
{{--                        <div class="stock">--}}
{{--                            В наличии: 100+шт--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-6">--}}
{{--                    <div class="order">--}}
{{--                        <div class="top-info">--}}
{{--                            <div class="discount"><span>-15%</span></div>--}}
{{--                            <div class="favorites">--}}
{{--                                <form action="#">--}}
{{--                                    <button><img src="{{ asset('img/favorites.svg') }}" alt=""></button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="wrapper-images">--}}
{{--                            <div style="background-image: url('pic/cart1.jpg')" class="img"></div>--}}
{{--                        </div>--}}
{{--                        <h2 class="title">--}}
{{--                            <a href="#">Картридж для HP</a>--}}
{{--                        </h2>--}}
{{--                        <div class="price">--}}
{{--                            <div class="current-price">3 000 ₸</div>--}}
{{--                            <div class="old-price">5 000 ₸</div>--}}
{{--                        </div>--}}
{{--                        <form action="#" class="basket">--}}
{{--                            <button class="btn">В корзину</button>--}}
{{--                        </form>--}}
{{--                        <div class="stock">--}}
{{--                            В наличии: 100+шт--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="popular-category">
        <div class="container">
            <h2 class="title">📌 Популярные категории</h2>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-lg-4 col-md-6">
                        <a href="#" class="popular_item d-flex align-items-center flex-column">
                            <span style="background-image: url('pic/popular.jpg')" class="popular_img"></span>
                            <h2 class="popular_title">{{ $category->title }}</h2>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="best-deals">
        <div class="container">
            <h2 class="title">🔥 Лучшие предложения</h2>
            <div class="row">
                <?php $k = 1; ?>
                @foreach($products as $product)
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
                        <form action="{{ route('order.add', ['id' => $product->id]) }}" method="post" class="basket">
                            @csrf
                            <input type="hidden" name="quantity" value="1">
                            <button class="btn">В корзину</button>
                        </form>
                        <div class="stock">
                            В наличии: {{ $product->stock }}шт
                        </div>
                    </div>
                </div>
                <?php $k++; ?>
                @if($k > 6)
                    @break
                @endif
                @endforeach
            </div>
        </div>
    </section>


@endsection
