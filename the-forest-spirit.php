<?php get_header(); ?>

<section id="main">
    <div class="container">
        <div class="item1">
        <a href="<?php echo site_url() . '/shop/the-forest-spirit'; ?>">
            <img src="<?php echo site_url() . '/wp-content/uploads/2022/02/spirit.jpg' ; ?>"></a>

             <!-- Monster Selector -->
             <div class="monster-selector">
                    <div class="monster-selector-item">
                        <div class="arrow-selector">
                            <a href="<?php echo get_site_url() . '/stitch'; ?>">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/left-arrow.svg'; ?>"></a> 
                        </div>

                        <div class="back-to-the-monsters">
                            <a href="<?php echo get_site_url() . '/meet-the-monsters'; ?>">
                            <p class="random-font">Back to</p>
                            <h4>THE MONSTERS</h4></a>
                        </div>

                        <div class="arrow-selector">
                            <a href="<?php echo get_site_url() . '/threedy'; ?>">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/right-arrow.svg'; ?>"></a>
                        </div>
                    </div>
                </div>

        </div>

        <div class="item2">
            <h2>The Forest Spirit</h2>
            <p>Perhaps the most enigmatic Monster to date, The Forest Spirit was long believed to be a folk legend, rambling in the mists of deep mountain foliage. It was only within the last ten years that this specimen was discovered and 6 years since it was last sighted. No others have ever been seen.</p>

            <p>It is said that where The Forest Spirit treads the trees stand twice as tall, and the colossal groves where its tracks and sheddings have been observed are verily a testament to the tale. Inhabitants of the region treat these territories with a dreamy awe and it is a time-honored tradition on misty days to wander until the world is completely obscured and there, if you listen quietly enough, you will hear The Forest Spirit whisper all the things the world wants from you.</p>

            <p>The elusive and mystical nature of this Monster inspires rich veins of possibility in the understanding of what these beings are. Could there be a supernatural or even magical quality to their power? How many more are hidden away in parts unknown, legends shrouded in the wilds.</p>
           
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
                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="<?php echo site_url() . '/shop/the-forest-spirit'; ?>">
                            <img class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" src="<?php echo site_url() . '/wp-content/uploads/2022/02/spirit.jpg'; ?>">
                            <h2 class="woocommerce-loop-product__title">The Forst Spirit</h2>
                            <span class="price">$4.00</span></a>
                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" href="<?php echo site_url() . '/shop/the-forest-spirit'; ?>">ADD TO CART</a>
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