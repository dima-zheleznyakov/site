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
                        <div class="order-item-wrapper">
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
                                @foreach($products as $product)
                                    <?php
                                    $itemPrice = $product->price;
                                    $itemQuantity =  $product->pivot->quantity;
                                    $itemCost = $itemPrice * $itemQuantity;
                                    $orderCost = $orderCost + $itemCost;
                                    ?>
                                    <div id="{{ $product->id }}" class="order-item">
                                        <div class="form-check">
                                            <input name="delete[]" class="form-check-input individual-checkbox" type="checkbox" value="{{ $product->id }}">
                                        </div>
                                        <div class="order-img" style='background-image: url("{{ $product->images }}")' ></div>
                                        <div class="order-info-cart">
                                            @if(isset($product->discount))
                                                <div class="discount">
                                                    <span>-{{ $product->discount }}%</span>
                                                </div>
                                            @endif
                                            <div class="title-order"><a href="#">{{ $product->title }}</a></div>
                                            <div class="price">
                                                <div class="current-price">{{ number_format($itemCost, 2, '.', '') }}₸</div>
                                                <div class="old-price"></div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <input class="number" type="number" id="quantity" name="quantity" min="1" value="{{ $itemQuantity }}">
                                        </div>
                                    </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="order-item-wrapper">
                            <div class="order-design">
                                <div class="amount-paid">
{{--                                    <div class="old-price">20000₸</div>--}}
                                    <div class="price"><span>Сумма к оплате: </span><span class="total-price">{{ number_format($orderCost, 2, '.', '') }}₸</span></div>
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
        $(document).ready(function() {
            $('#deleteForm').on('submit', function(e) {
                e.preventDefault(); // Предотвращаем стандартную отправку формы
                var formData = $(this).serialize(); // Сериализуем данные из формы

                $.ajax({
                    type: 'POST',
                    url: "{{ route('order.delete') }}", // Укажите правильный URL
                    data: formData,
                    success: function(response) {
                        // Удаляем блоки order-item из DOM
                        response.deletedIds.forEach(function(id) {
                            $('#' + id).remove();
                        });

                        // После удаления элементов можно обновить интерфейс,
                        // например, показать сообщение об успешном удалении
                        // или обновить счетчик элементов, если он есть
                    },
                    error: function(error) {
                        console.log(error); // Обработка ошибки
                        // Здесь можно показать сообщение об ошибке
                    }
                });
            });
        });
    </script>

@endsection
