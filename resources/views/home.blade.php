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
                <li class="nav-main-item cart-item"><a href=""><span class="cart-icon"></span>Cart<span
                            class="cart-badge">2</span></a></li>
            </ul>
        </nav>
    </header>

    <section class="greetings">
        <div class="container-content">
            <h2>Made with nature</h2>
            <p>Welcome to the<br>world of nature<br>and organic.</p>
            <a href="#">Explore now<span></span></a>
        </div>
    </section>

    <section class="container-content">
        <div class="card-list">
            <div class="card-item card-fruits">
                <h2>Natural!!</h2>
                <p>Get garden<br>fresh fruits</p>
            </div>

            <div class="card-item card-vegetables">
                <h2>Offer!!</h2>
                <p>Get 10% off<br>on Vegetables</p>
            </div>
        </div>
    </section>

    
</body>

</html>