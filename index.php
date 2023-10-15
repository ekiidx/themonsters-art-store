<?php include 'header.php'; ?>

<main id="home">
    <div class="container">

        <!-- Random image on refresh -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Image will load if javascript is turned off in the browser -->
        <noscript><img src="https://themonsters.art/wp-content/themes/themonstersstore/assets/img/monster-0.png"></noscript>

        <!-- Hero Section -->
        <section id="hero-main">
            <div id="banner-images"></div>
            <a href="#scroll-down">
            
            <!-- Scroll down arrow -->
            <img class="scroll-down animate__animated animate__bounceInDown" src="/assets/img/scroll-down-arrow.svg"></a>
        </section>

        <script> 
        var images = ['aku', 'muzz', 'coil', 'gloon', 'hul'];

        var selectImage = images[Math.floor(Math.random() * images.length)];

        $('<a href="/' + selectImage + '"><img class="random-image animate__animated animate__fadeIn" src="assets/img/' + selectImage + '.jpg"></a>').appendTo('#banner-images');
        </script>

        <!-- Scroll down section -->
        <div id="scroll-down"></div>

        <!-- Shop Title -->	
        <div class="welcome">	
            <p class="random-font">WELCOME TO THE</p>	
            <h1>MONSTER SHOP</h1>
        </div>

        <!-- Categories Section -->
        <section id="categories">
                <div class="row">
                
                    <div class="item cat-switch">
                        <a class="fur-box" href="/product-category/stickers/">Stickers (24)</a>
                    </div>

                    <div class="item cat-switch">
                        <a class="fur-box cat-apparel" href="/product-category/apparel/">Apparel (14)</a>
                    </div>

                </div>
        </section>

        <section class="main-loop">
            <div class="container">
                <div class="row">

                    <div class="col-4">
                        <img src="assets/img/aku.jpg">
                        <h2 class="d-block product-name">Name</h2>
                        <span class="d-block product-price">$14.99</span>
                        <div class="buy-btn text-uppercase">Add to Cart</div>
                    </div>

                    <div class="col-4">
                        <img src="">
                        <h2 class="d-block product-name">Name</h2>
                        <span class="d-block product-price">$14.99</span>
                        <div class="buy-btn text-uppercase">Add to Cart</div>
                    </div>

                    <div class="col-4">
                        <img src="">
                        <h2 class="d-block product-name">Name</h2>
                        <span class="d-block product-price">$14.99</span>
                        <div class="buy-btn text-uppercase">Add to Cart</div>
                    </div>

                    <div class="col-4">
                        <img src="">
                        <h2 class="d-block product-name">Name</h2>
                        <span class="d-block product-price">$14.99</span>
                        <div class="buy-btn text-uppercase">Add to Cart</div>
                    </div>

                    <div class="col-4">
                        <img src="">
                        <h2 class="d-block product-name">Name</h2>
                        <span class="d-block product-price">$14.99</span>
                        <div class="buy-btn text-uppercase">Add to Cart</div>
                    </div>

                    <div class="col-4">
                        <img src="">
                        <h2 class="d-block product-name">Name</h2>
                        <span class="d-block product-price">$14.99</span>
                        <div class="buy-btn text-uppercase">Add to Cart</div>
                    </div>
                </div>
            </div>
        </section>
    <div>
</main>

<?php include 'footer.php';