<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        {{--                    <li class="nav-header">~~~</li>--}}
        <li class="nav-item">
            <a href="{{ route('categories.index') }}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Категории
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('sub.categories.index') }}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Подкатегории
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('products.index') }}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Товары
                </p>
            </a>
        </li>
    </ul>
</nav>
