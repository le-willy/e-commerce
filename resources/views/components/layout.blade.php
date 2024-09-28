<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <style>
        .navbar-collapse.collapsing,
        .navbar-collapse.show {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .navbar-collapse.show .navbar-nav {
            justify-content: center;
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
    </nav>
</header>

<body>
    {{ $slot }}
</body>

</html>
