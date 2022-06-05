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

    <section class="about-us-block">
        <div class="container-content">
            <div class="container-about-us">
                <div>
                    <img src="images/citrus.png" alt="Fresh citrus fruits">
                </div>


                <div class="about-us-info">
                    <h2>About us</h2>
                    <h3>We believe in organic<br>foods for strong health</h3>
                    <p>Welcome to the world of natural and organic. Here you can discover the bounty of nature. We have
                        grown on the principles of health, and care. We aim to give our customers a healthy
                        chemical-free
                        meal for perfect nutrition.</p>

                    <dl>
                        <dt><span class="organic-ico"></span>Organic foods only</dt>
                        <dd>The Product that you ordered will be verified that we have or not if have we will start to
                            move
                            on with the next step.</dd>

                        <dt><span class="quality-ico"></span>Quality standards</dt>
                        <dd>Once your product is packed it will be delivered to your nearby locality you can directly
                            visit
                            the to buy the product.</dd>
                    </dl>

                    <a href="#">Shop now<span></span></a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>