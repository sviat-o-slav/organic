<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
        <title>Organic Shop</title>
    </head>
    <body>
        <header class="container-content">
            <nav class="nav-main">
                <a class="nav-logo-item" href="#"><img src="images/logo.svg" alt="Logo image"></a>

                <ul class="nav-main-list">
                    <li class="nav-main-item nav-main-item-active"><a href="#">Home</a></li>
                    <li class="nav-main-item"><a href="#">About us</a></li>
                    <li class="nav-main-item"><a href="#">Shop</a></li>
                    <li class="nav-main-item"><a href="#">Pages</a></li>
                    <li class="nav-main-item"><a href="#">Contact us</a></li>
                    <li class="nav-main-item cart-item"><a href=""><span class="cart-icon"></span>Cart<span class="cart-badge">2</span></a></li>
                </ul>
            </nav>
        </header>
    </body>
</html>
