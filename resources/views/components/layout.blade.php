<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
</style>
</head>


<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse nav-underline" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="#">Home</a>
                    <a class="nav-link {{ request()->is('shop') ? 'active' : '' }}" href="#">Shop</a>
                    <a class="nav-link {{ request()->is('lookbook') ? 'active' : '' }}" href="#">Lookbook</a>
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="#">About</a>
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="#">Contact</a>
                </div>
            </div>
        </div>

        <div class="d-flex gap-2 mx-5">
            <a href="#" class="link-dark text-decoration-none">Login</a>
            <a href="#">
                <i class="bx bxl-instagram bx-sm" style="color: #000000;"></i>
            </a>
            <a href="#">
                <i class="bx bx-cart bx-sm" style="color: #000000;"></i>
            </a>
        </div>


    </nav>
</header>

<body>
    {{ $slot }}
</body>

</html>
