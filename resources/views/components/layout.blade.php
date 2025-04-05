<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<style>
    .navbar-collapse.collapsing,
    .navbar-collapse.show {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .cart-number {
        margin-left: 1px;
        font-size: 14px;
    }
</style>

</head>

<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex justify-content-between">
            <div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse nav-underline" id="navbarNavAltMarkup">
                    <div class="navbar-nav">

                        <x-nav-link class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                            href="/">Shop</x-nav-link>
                        <x-nav-link class="nav-link {{ request()->is('lookbook') ? 'active' : '' }}"
                            href="#">Lookbook</x-nav-link>
                        <x-nav-link class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                            href="/about">About</x-nav-link>
                        <x-nav-link class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                            href="#">Contact</x-nav-link>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center gap-3 mx-3">
                <a href="#" class="link-dark text-decoration-none ms-3 d-flex align-items-center">
                    <i class="bx bx-cart bx-sm" style="color: #000000;"></i>
                    <p class="cart-number mb-0">1</p>
                </a>
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        <button class="btn btn-link link-dark text-decoration-none">Logout</button>
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="link-dark text-decoration-none">Login</a>
                @endauth
            </div>
        </div>
    </nav>
</header>

<body>
    {{ $slot }}
</body>

</html>
