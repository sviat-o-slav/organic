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

    <section class="container-content products-block">
        <h2>Organic</h2>
        <h3>Our products</h3>

        <div class="cards-grid">

            <div class="card-product">
                <h2>Calabrese broccoli</h2>
                <h3>Vegetable</h3>
                <img src="images/broccoli.png" alt="Calabrese broccoli">

                <p class="price">
                    <span class="price-old">$ 25.00 USD</span>
                    <span class="price-new">$ 21.00 USD</span>
                    <span class="rating"><img src="images/stars.svg" alt="Five stars rating"></span>
                </p>
            </div>

            <div class="card-product">
                <h2>Fresh corn</h2>
                <h3>Vegetable</h3>
                <img src="images/corn.png" alt="Fresh corn">

                <p class="price">
                    <span class="price-old">$ 21.23 USD</span>
                    <span class="price-new">$ 18.00 USD</span>
                    <span class="rating"><img src="images/stars.svg" alt="Five stars rating"></span>
                </p>
            </div>

            <div class="card-product">
                <h2>Dried Pistachio</h2>
                <h3>Mill</h3>
                <img src="images/pistachio.png" alt="Dried Pistachio">

                <p class="price">
                    <span class="price-old">$ 61.00 USD</span>
                    <span class="price-new">$ 48.00 USD</span>
                    <span class="rating"><img src="images/stars.svg" alt="Five stars rating"></span>
                </p>
            </div>

            <div class="card-product">
                <h2>Vegan Red Tomato</h2>
                <h3>Vegetable</h3>
                <img src="images/tomato.png" alt="Vegan Red Tomato">

                <p class="price">
                    <span class="price-old">$ 14.00 USD</span>
                    <span class="price-new">$ 9.37 USD</span>
                    <span class="rating"><img src="images/stars.svg" alt="Five stars rating"></span>
                </p>
            </div>

            <div class="card-product">
                <h2>Organic Almonds</h2>
                <h3>Fruits</h3>
                <img src="images/almonds.png" alt="Organic Almonds">

                <p class="price">
                    <span class="price-old">$ 21.00 USD</span>
                    <span class="price-new">$ 18.00 USD</span>
                    <span class="rating"><img src="images/stars.svg" alt="Five stars rating"></span>
                </p>
            </div>

            <div class="card-product">
                <h2>Brown Hazelnut</h2>
                <h3>Mill</h3>
                <img src="images/nuts.png" alt="Brown Hazelnut">

                <p class="price">
                    <span class="price-old">$ 43.00 USD</span>
                    <span class="price-new">$ 34.00 USD</span>
                    <span class="rating"><img src="images/stars.svg" alt="Five stars rating"></span>
                </p>
            </div>

        </div>
    </section>

    <section class="customer-feedback">
        <div class="customer-info">
            <h2>Testimonial</h2>
            <h3>What our customer saying?</h3>
            <img class="customer-avatar" src="images/avatar.jpg" alt="Customer avatar">
            <span class="customer-rating"><img src="images/stars.svg" alt="Five stars rating"></span>
            <p class="customer-text">The quality of organic produce is extremely high, the service is second to none and
                the taste of the
                food<br>takes me back to my childhood when we were growing our own.</p>
            <p class="customer-name">Sara Taylor</p>
            <p class="customer-rank">Consumer</p>

            <div class="customer-splitter"></div>
        </div>

        <div class="customer-awards">
            <div class="customer-award-card">
                <div class="customer-award-wrapper">
                    <h2>Organic</h2>
                    <p>100%</p>
                </div>
            </div>

            <div class="customer-award-card">
                <div class="customer-award-wrapper">
                    <h2>Active product</h2>
                    <p>285</p>
                </div>
            </div>

            <div class="customer-award-card">
                <div class="customer-award-wrapper">
                    <h2>Organic Orchads</h2>
                    <p>385+</p>
                </div>
            </div>

            <div class="customer-award-card">
                <div class="customer-award-wrapper">
                    <h2>Years of farming</h2>
                    <p>25+</p>
                </div>
            </div>
        </div>
    </section>

    <section class="offer-block">
        <div class="container-content offer-block-container">
            <div class="offer-header">
                <div class="offer-header-title">
                    <h2>Offer products</h2>
                    <p>We offer organic for you</p>
                </div>

                <a href="#">View all products<span></span></a>
            </div>

            <div class="cards-grid">
                <div class="card-product">
                    <h2>Vegan Red Tomato</h2>
                    <h3>Vegetable</h3>
                    <img src="images/tomato.png" alt="Vegan Red Tomato">

                    <p class="price">
                        <span class="price-old">$ 14.00 USD</span>
                        <span class="price-new">$ 9.37 USD</span>
                        <span class="rating"><img src="images/stars.svg" alt="Five stars rating"></span>
                    </p>
                </div>

                <div class="card-product">
                    <h2>Organic Almonds</h2>
                    <h3>Fruits</h3>
                    <img src="images/almonds.png" alt="Organic Almonds">

                    <p class="price">
                        <span class="price-old">$ 21.00 USD</span>
                        <span class="price-new">$ 18.00 USD</span>
                        <span class="rating"><img src="images/stars.svg" alt="Five stars rating"></span>
                    </p>
                </div>

                <div class="card-product">
                    <h2>Fresh corn</h2>
                    <h3>Vegetable</h3>
                    <img src="images/corn.png" alt="Fresh corn">

                    <p class="price">
                        <span class="price-old">$ 21.23 USD</span>
                        <span class="price-new">$ 18.00 USD</span>
                        <span class="rating"><img src="images/stars.svg" alt="Five stars rating"></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="eco-friendly-block">
        <div class="eco-friendly-image"></div>

        <div class="eco-friendly-info-block">
            <div class="eco-friendly-info">
                <h2>Eco friendly</h2>
                <h3>From our farm<br>to your home.</h3>

                <h4>Choose Your Products</h4>
                <p>In our listing, we have several collections of organic products. This is the place where you need to
                    choose the product you want.</p>

                <h4>Farmers will produce it</h4>
                <p>The Product that you ordered will be verified that we have or not if have we will start to move on
                    with the next step.</p>

                <h4>We Can Delivery too</h4>
                <p>If you are not comfortable going to the nearby market place we also will deliver your product to your
                    doorstep.</p>
            </div>
        </div>
    </section>
</body>

</html>