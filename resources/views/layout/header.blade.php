<div class="container">
    <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img src="/images/logo.svg" alt="">
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{ route('home') }}" class="nav-link px-2 link-secondary">Каталог</a></li>
            <li><a href="{{ route('about') }}" class="nav-link px-2 link-dark">О нас</a></li>
            @auth
                <li><a href="#" class="nav-link px-2 link-dark">Заказы</a></li>
            @endauth
            @can('admin')
                <div class="btn-group">
                    <a type="button" class="nav-link px-2 link-secondary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Админ-панель
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admin_products') }}">Товары</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('admin_categories') }}">Категории</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('admin_orders') }}">Заказы</a></li>
                    </ul>
                </div>
            @endcan
        </ul>

        @auth
            <div class="d-flex align-items-center">
                <span class="me-2">{{ auth()->user()->email }}</span>
                <a type="button" href="{{ route('cart') }}" class="btn btn-primary me-2">Корзина</a>

                <form action="/logout" method="POST" class="inline">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-outline-primary">Выйти</button>
                </form>
            </div>
        @endauth
        @guest

            <div class="col-md-3 text-end">
                <a type="button" href="{{ route('login') }}" class="btn btn-outline-primary me-2">Войти</a>
                <a type="button" href="{{ route('register') }}" class="btn btn-primary">Регистрация</a>
            </div>

        @endguest
    </header>
</div>
