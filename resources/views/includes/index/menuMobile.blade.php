<div class="menu_mobile_wrapper">
    <div class="menu_mobile_item">
        <a href="#">
            <img src="{{ asset('img/menu1.png') }}" alt="">
            <span>Главная</span>
        </a>
    </div>
    <div class="menu_mobile_item">
        <a href="#">
            <img src="{{ asset('img/menu2.png') }}" alt="">
            <span>Каталог</span>
        </a>
    </div>
    <div class="menu_mobile_item">
        <a href="#">
            <img src="{{ asset('img/menu3.png') }}" alt="">
            <span>Избранное</span>
        </a>
    </div>
    <div class="menu_mobile_item ">
        <a class="action-button" href="/order">
            <div class="cart-info">
                <span  class="general-order number-quantity-menu" style="@isset($generalOrder){{ $generalOrder > 0 ? '' : 'display: none;' }}@else display: none; @endisset">
                    @isset($generalOrder)
                        @if($generalOrder > 0)
                            {{ $generalOrder }}
                        @endif
                    @endisset
                </span>
            </div>
            <img src="{{ asset('img/menu4.png') }}" alt="">
            <span>Корзина</span>
        </a>
    </div>
    <div class="menu_mobile_item">
        <a href="#">
            <img src="{{ asset('img/menu5.png') }}" alt="">
            <span>Аккаунт</span>
        </a>
    </div>
</div>
