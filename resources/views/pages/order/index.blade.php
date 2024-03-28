@extends('layouts.main')
@section('content')
    <section class="order">
        <div class="container">
            @if (count($products))
            <?php
            $orderCost = 0;
            ?>
                <h2 class="title">Корзина</h2>
                <div class="row">
                    <div class="col-md-9">
                        <div class="order-item-wrapper bg-wrapper">
                            <form  id="deleteForm" action="{{ route('order.delete') }}" method="post" >
                                @csrf
                                <div class="order-delete-wrapper">
                                    <div class="form-check">
                                        <input class="form-check-input" id="selectAllCheckbox" type="checkbox" data-action="toggle">
                                        <label for="selectAllCheckbox">Выбрать все</label>
                                    </div>
                                    <button id="deleteButton" type="submit">
                                        Удалить (0)
                                    </button>
                                </div>
                            </form>
                            @foreach($products as $product)
                                <?php
                                $productPrice = $product->price;
                                $itemQuantity =  $product->pivot->quantity;
                                $totalPriceForItem = $productPrice * $itemQuantity; // Рассчитываем общую стоимость товара
                                ?>
                                    <div id="{{ $product->id }}" class="order-item">
                                        <div class="form-check">
                                            <input name="delete[]" class="form-check-input individual-checkbox" type="checkbox" value="{{ $product->id }}">
                                        </div>
                                        <div class="order-img" style='background-image: url("{{ $product->images }}")'></div>
                                        <div class="order-info-cart">
                                            @if(isset($product->discount))
                                                <div class="discount">
                                                    <span>-{{ $product->discount }}%</span>
                                                </div>
                                            @endif
                                            <div class="title-order"><a href="#">{{ $product->title }}</a></div>
                                            <div class="price">
                                                <div class="current-price" data-single-price="{{ $product->price }}">!!!тут сумма одного товара ₸</div>
                                                <div class="old-price"></div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <form class="quantity-form" action="{{ route('order.update') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input class="number quantity-input" type="number" name="quantity" min="1" value="{{ $itemQuantity }}">
                                            </form>
                                        </div>
                                    </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="order-item-wrapper bg-wrapper">
                            <div class="order-design">
                                <div class="amount-paid">
                                    {{--                                    <div class="old-price">20000₸</div>--}}
                                    <div class="price" id="total-price">
                                        <span>Сумма к оплате: </span><span class="total-price" data-price=""></span>
                                    </div>
                                </div>
                                <button class="btn">Оформить заказ</button>
                            </div>
                        </div>
                    </div>
                </div>
        @else
            <p>Ваша корзина пуста</p>
        @endif
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            function updateTotalPrice() {
                let totalPrice = 0;
                document.querySelectorAll('.order-item').forEach(function (item) {
                    const quantityInput = item.querySelector('.quantity-input');
                    const productPrice = parseFloat(item.querySelector('.current-price').getAttribute('data-single-price'));
                    const quantity = parseFloat(quantityInput.value);
                    const totalPriceForItem = quantity * productPrice;
                    totalPrice += totalPriceForItem;
                    item.querySelector('.current-price').textContent = totalPriceForItem.toFixed(2) + '₸';
                });
                document.querySelector('.total-price').textContent = totalPrice.toFixed(2) + '₸';
            }

            // Обработчик события изменения количества товара
            document.querySelectorAll('.quantity-input').forEach(function (input) {
                input.addEventListener('input', function () {
                    updateTotalPrice();
                });
            });

            // Инициализация общей стоимости заказа
            updateTotalPrice();
        });
    </script>
@endsection
