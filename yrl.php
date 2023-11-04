<?php get_header(); ?>

<section id="main">
    <div class="container">
        <div class="item1">
        <a href="<?php echo site_url() . '/shop/yrl'; ?>">
            <img src="<?php echo site_url() . '/wp-content/uploads/2022/02/yrl.jpg'; ?>"></a>

            <!-- Monster Selector -->
            <div class="monster-selector">
                    <div class="monster-selector-item">
                        <div class="arrow-selector">
                            <a href="<?php echo get_site_url() . '/toofer'; ?>">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/left-arrow.svg'; ?>"></a> 
                        </div>

                        <div class="back-to-the-monsters">
                            <a href="<?php echo get_site_url() . '/meet-the-monsters'; ?>"><p class="random-font">Back to</p>
                            <h4>THE MONSTERS</h4></a>
                        </div>

                        <div class="arrow-selector">
                            <a href="<?php echo get_site_url() . '/aku'; ?>">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/right-arrow.svg'; ?>"></a>
                        </div>
                    </div>
                </div>

        </div>

        <div class="item2">
            <h2>Yrl</h2>
            <p>Due to the minimal horn growth, Yrl is believed to be very young. His oftentimes unpredictable and seemingly naive behavior increases this surety. But some personalities are just like that. Yrl lives for ear scratches and will gently but insistently headbutt anyone with free hands when the itch is upon them.</p>

            <p>The discovery of Yrl (pronounced Urr-ul) introduced an entirely new phenotype into our taxonomy. It is speculated that Yrl comes from a geographical region we have yet to canvas and that this tightly curled coat texture is more common there. The concentric fur pattern and unusually long ears are also notably unique. As for how Yrl arrived here, it is one more mystery of these Monsters we are hungry to uncover.</p>
           
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
                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="<?php echo site_url() . '/shop/yrl'; ?>">
                            <img class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" src="<?php echo site_url() . '/wp-content/uploads/2022/02/yrl.jpg'; ?>">
                            <h2 class="woocommerce-loop-product__title">Yrl</h2>
                            <span class="price">$4.00</span></a>
                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" href="<?php echo site_url() . '/shop/yrl'; ?>">ADD TO CART</a>
                    </li>

                    <li class="product type-product post-113 status-publish instock product_cat-stickers has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="<?php echo site_url() . '/shop/crop-tee-yrl'; ?>">
                            <img class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" src="<?php echo site_url() . '/wp-content/uploads/2022/02/all-over-print-crop-tee-white-front-620ee9d450254.jpg' ; ?>">
                            <h2 class="woocommerce-loop-product__title">Crop Tee - Yrl</h2>
                            <span class="price">$36.00 - $38.00</span></a>
                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" href="<?php echo site_url() . '/shop/crop-tee-yrl'; ?>">SELECT OPTIONS</a>
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