<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESWEB.kz</title>

    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}" crossorigin>
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap') }}" rel="stylesheet">

    <link rel="icon" href="{{ asset('img/favicon.svg') }}" type="image/x-icon">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/media.css?v=1') }}">
</head>
<body>

<header class="header d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-2">
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 d-md-block d-none">
                <button id="button-catalog" class="button-catalog">
                    <img src="{{ asset('img/burger.png') }}" alt="Icon">
                    <span>Каталог</span>
                </button>
            </div>
            <div class="col-lg-5 col-md-4">
                <div class="search">
                    <form action="">
                        <span class="search-image">
                            <img src="{{ asset('img/search.png') }}" alt="Search Icon">
                        </span>
                        <input type="text" class="search-input" placeholder="Я ищу...">
                        <button class="search-button">Поиск</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 d-md-block d-none">
                <div class="action-buttons d-flex justify-content-between">
                    <a href="#" class="action-button">
                        <img  style="margin-bottom: 6px;"  src="{{ asset('img/like.png') }}" alt="Icon 1">
                        <span>Избранное</span>
                    </a>
                    <a href="#" class="action-button">
                        <img src="{{ asset('img/shop.png') }}" alt="Icon 2">
                        <span>Корзина</span>
                    </a>
                    <a href="#" class="action-button">
                        <img src="{{ asset('img/user.png') }}" alt="Icon 3">
                        <span>Аккаунт</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="menu_wrapper">
    <div class="container">
        <div class="menu_wrapper_item">
            <div class="menu_left_item">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab"
                                data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab"
                                aria-controls="home-tab-pane" aria-selected="true">Картриджи</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button"
                                role="tab" aria-controls="profile-tab-pane" aria-selected="false">Канцелярские товары</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button"
                                role="tab" aria-controls="contact-tab-pane" aria-selected="false">Еще одна Категория</button>
                    </li>
                </ul>
            </div>

            <div class="menu_right_item">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="menu_right_sub">
                            <div class="menu_right_sub_item">
                                <h4>Лазерные картртиджи</h4>
                                <ul>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                </ul>
                            </div>
                            <div class="menu_right_sub_item">
                                <h4>Струйные картртиджи</h4>
                                <ul>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                </ul>
                            </div>
                            <div class="menu_right_sub_item">
                                <h4>Струйные картртиджи</h4>
                                <ul>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                </ul>
                            </div>
                            <div class="menu_right_sub_item">
                                <h4>Струйные картртиджи</h4>
                                <ul>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                </ul>
                            </div>
                            <div class="menu_right_sub_item">
                                <h4>Струйные картртиджи</h4>
                                <ul>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                </ul>
                            </div>
                            <div class="menu_right_sub_item">
                                <h4>Струйные картртиджи</h4>
                                <ul>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                </ul>
                            </div>
                            <div class="menu_right_sub_item">
                                <h4>Струйные картртиджи</h4>
                                <ul>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                </ul>
                            </div>
                            <div class="menu_right_sub_item">
                                <h4>Струйные картртиджи</h4>
                                <ul>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                    <li><a href="#">Картридж HP W1106A</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        Link2
                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        Link3
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="content">

    @yield('content')

</div>




<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="news">
                    <h2 class="title">Будьте в курсе новостей</h2>
                    <div class="descr">Подпишитесь на последние обновления и узнавайте о новинках
                        и специальных предложениях первыми</div>
                    <form action="#" class="news-email">
                        <input type="email" placeholder="Email">
                        <button type="submit">Подписаться</button>
                    </form>
                </div>
                <div class="socials">
                    <h2 class="title">Мы в социальных сетях</h2>
                    <div class="social_wrapper">
                        <a href="#" class="social"><span style="background-image: url('img/inst.png')" ></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="footer_item">
                    <h2 class="title">Заголовок</h2>
                    <nav class="footer_menu">
                        <ul>
                            <li><a href="#">Текст</a></li>
                            <li><a href="#">Текст</a></li>
                            <li><a href="#">Текст</a></li>
                            <li><a href="#">Текст</a></li>
                            <li><a href="#">Текст</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="footer_item">
                    <h2 class="title">Заголовок</h2>
                    <nav class="footer_menu">
                        <ul>
                            <li><a href="#">Текст</a></li>
                            <li><a href="#">Текст</a></li>
                            <li><a href="#">Текст</a></li>
                            <li><a href="#">Текст</a></li>
                            <li><a href="#">Текст</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="footer_bottom">
            <div class="row">
                <div class="col-6">
                    <div class="copyline">© desweb - 2024</div>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <div class="politic">
                        Политика конфиденциальности
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="menu_mobile">
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
        <div class="menu_mobile_item">
            <a href="#">
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
</div>



<script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js') }}" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.js') }}" ></script>

<script src="{{ asset('https://code.jquery.com/jquery-3.7.1.slim.min.js') }}" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
