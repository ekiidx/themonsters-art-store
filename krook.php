<?php get_header(); ?>

<section id="main">
    <div class="container">
        <div class="item1">
        <a href="<?php echo site_url() . '/shop/krook'; ?>">
            <img src="<?php echo site_url() . '/wp-content/uploads/2022/02/krook.jpg' ; ?>"></a>

            <!-- Monster Selector -->
            <div class="monster-selector">
                    <div class="monster-selector-item">
                        <div class="arrow-selector">
                            <a href="<?php echo get_site_url() . '/kev'; ?>">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/left-arrow.svg'; ?>"></a> 
                        </div>

                        <div class="back-to-the-monsters">
                            <a href="<?php echo get_site_url() . '/meet-the-monsters'; ?>"><p class="random-font">Back to</p>
                            <h4>THE MONSTERS</h4></a>
                        </div>

                        <div class="arrow-selector">
                            <a href="<?php echo get_site_url() . '/mongrel'; ?>">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/right-arrow.svg'; ?>"></a>
                        </div>
                    </div>
                </div>
            
        </div>

        <div class="item2">
            <h2>Krook</h2>
            <p>We are unsure if Krook's unusual posture is the result of some sort of Monster scoliosis or a development of age. It seems Monsters suffer, as we do, from physical ailments. Krook displays tendencies linked to chronic pain, becoming irate or withdrawn at times. By quirk, Krook is particularly keen on whistling and we have learned to distinguish good moods from bad by the key of their persistent trill. Our tonedeaf employees more or less steer clear.</p>

            <p>Music in its many forms is paramount to The Monsters and Monster culture. Regardless of genre they wiggle unconsciously as soon as a song or instrument can be heard. Krook and other Monsters periodically come together for what we refer to as a Monster Jam, contributing their various sounds to create a cacophonous if not rhythmic melody. Generally, however, Monsters are only known to regularly sing when being washed.</p>
           
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
                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="<?php echo site_url() . '/shop/krook'; ?>">
                            <img class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" src="<?php echo site_url() . '/wp-content/uploads/2022/02/krook.jpg'; ?>">
                            <h2 class="woocommerce-loop-product__title">Krook</h2>
                            <span class="price">$4.00</span></a>
                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" href="<?php echo site_url() . '/shop/krook'; ?>">ADD TO CART</a>
                    </li>

                    <li class="product type-product post-113 status-publish instock product_cat-stickers has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="<?php echo site_url() . '/shop/crop-tee-krook'; ?>">
                            <img class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" src="<?php echo site_url() . '/wp-content/uploads/2022/02/all-over-print-crop-tee-white-front-620ee5e2550c9.jpg' ; ?>">
                            <h2 class="woocommerce-loop-product__title">Crop Tee - Krook</h2>
                            <span class="price">$35.00 - $37.00</span></a>
                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" href="<?php echo site_url() . '/shop/crop-tee-krook'; ?>">SELECT OPTIONS</a>
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