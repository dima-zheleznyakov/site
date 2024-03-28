@extends('layouts.main')
@section('content')
    <section class="favorites">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="favorite-wrapper bg-wrapper">
                        <h2 class="title">Избранное</h2>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="cart">
                                    <div class="top-info">
                                        <div class="discount"><span></span></div>
                                        <div class="favorites">
                                            <form action="#">
                                                <button><img src="#" alt=""></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="wrapper-images">
                                        <div style="background-image: url('pic/products/65fbf1c4e704e_Frame 9.jpg')" class="img"></div>
                                    </div>
                                    <h2 class="title">
                                        <a href="product/edit/#}">
                                            #####
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <div class="current-price">131313</div>
                                        <div class="old-price"></div>
                                    </div>
                                    <form id="basketForm" action="#" method="post" class="basket">
                                        @csrf
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" class="btn">В корзину</button>
                                    </form>
                                    <div class="stock">
                                        В наличии: #шт
                                    </div>
                                </div>
                            </div>
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
