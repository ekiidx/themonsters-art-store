<?php include 'header.php'; ?>

<section id="main">
    <div class="container">
        <div class="item1">
        <a href="/shop/jraf.php">
            <img src="/assets/img/jraf.jpg"></a>

            <!-- Monster Selector -->
            <div class="monster-selector">
                    <div class="monster-selector-item">
                        <div class="arrow-selector">
                            <a href="/hool.php">
                            <img src="/assets/img/left-arrow.svg"></a> 
                        </div>

                        <div class="back-to-the-monsters">
                            <a href="/meet-the-monsters.php"><p class="random-font">Back to</p>
                            <h4>THE MONSTERS</h4></a>
                        </div>

                        <div class="arrow-selector">
                            <a href="/kev.php">
                            <img src="/assets/img/right-arrow.svg"></a>
                        </div>
                    </div>
                </div>

        </div>

        <div class="item2">
            <h2>Jraf</h2>
            <p>Jraf is a nonverbal Monsters, preferring instead to indicate their desires through licks. This does not jive with everyone. Several of our junior staff and interns outright refuse to interact with Jraf but those who don't mind have made fast friends with this handsome oddity.</p>

            <p>Monster tongues appear to be instrumental in certain communication styles. Our research has not as of yet broached the anatomy of these particular appendages but there is room for belief that they employ the sense of taste as a significant mode of obtaining external information. This habit also keeps our cleaning staff quite occupied.</p>
           
        </div>
    </div>  
</section>

<div class="woocommerce woocommerce-page">
    <div id="primary" class="content-area">
        <div class="site-main">
            <section class="related products related-products">

            <h2>Related products</h2>
                <ul class="products columns-4">

                    <li class="product type-product post-113 status-publish first instock product_cat-stickers has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="/shop/jraf.php">
                            <img class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" src="<?php echo site_url() . '/wp-content/uploads/2022/02/jraf.jpg'; ?>">
                            <h2 class="woocommerce-loop-product__title">Jraf</h2>
                            <span class="price">$4.00</span></a>
                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" href="<?php echo site_url() . '/shop/jraf'; ?>">ADD TO CART</a>
                    </li>
                    
                    <li class="product type-product post-113 status-publish instock product_cat-stickers has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="<?php echo site_url() . '/shop/3-random-stickers'; ?>">
                            <img class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" src="<?php echo site_url() . '/wp-content/uploads/2021/11/random-sticker-pack-3-450x450.jpg' ; ?>">
                            <h2 class="woocommerce-loop-product__title">3 Random Stickers</h2>
                            <span class="price">$10.00</span></a>
                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" href="<?php echo site_url() . '/shop/3-random-stickers'; ?>">ADD TO CART</a>
                    </li>

                    <li class="product type-product post-113 status-publish instock product_cat-stickers has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="<?php echo site_url() . '/shop/6-random-stickers'; ?>">
                            <img class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" src="<?php echo site_url() . '/wp-content/uploads/2021/11/random-sticker-pack-2.jpg' ; ?>">
                            <h2 class="woocommerce-loop-product__title">6 Random Stickers</h2>
                            <span class="price">$20.00</span></a>
                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" href="<?php echo site_url() . '/shop/6-random-stickers'; ?>">ADD TO CART</a>
                    </li>

                </ul>

            </section>
        </div>
    </div>
</div>

<?php get_footer();