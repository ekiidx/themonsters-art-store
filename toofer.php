<?php get_header(); ?>

<section id="main">
    <div class="container">
        <div class="item1">
        <a href="<?php echo site_url() . '/shop/toofer'; ?>">
            <img src="<?php echo site_url() . '/wp-content/uploads/2022/02/too.jpg' ; ?>"></a>

            <!-- Monster Selector -->
            <div class="monster-selector">
                    <div class="monster-selector-item">
                        <div class="arrow-selector">
                            <a href="<?php echo get_site_url() . '/threedy'; ?>">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/left-arrow.svg'; ?>"></a> 
                        </div>

                        <div class="back-to-the-monsters">
                            <a href="<?php echo get_site_url() . '/meet-the-monsters'; ?>"><p class="random-font">Back to</p>
                            <h4>THE MONSTERS</h4></a>
                        </div>

                        <div class="arrow-selector">
                            <a href="<?php echo get_site_url() . '/yrl'; ?>">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/right-arrow.svg'; ?>"></a>
                        </div>
                    </div>
                </div>

        </div>

        <div class="item2">
            <h2>Toofer</h2>
            <p>Officially recorded as Too and Fer, these two have never been seen apart and are believed to be siblings. Several months after Monsters began to accumulate and hang around at our offices, this pair shambled in the front door all on their own. Fer seems to be the leader of the duo, though Too has often been observed to signal influential disapproval with a deafening groan. They travel together, eat together, and will spend hours sighing in unison.</p>

            <p>It is tacitly accepted in our community that grumpiness is an normative characteristic of The Monsters and we believe the frequent sighing of the species can be interpreted as a sign of intimacy, friendship, or general comfort wherein it is totally ok to just let it all out sometimes. In our studying of their social behaviors, The Monsters have regularly demonstrated high emotional sensitivity.</p>
           
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
                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="<?php echo site_url() . '/shop/toofer'; ?>">
                            <img class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" src="<?php echo site_url() . '/wp-content/uploads/2021/11/too.jpg'; ?>">
                            <h2 class="woocommerce-loop-product__title">Toofer</h2>
                            <span class="price">$5.00</span></a>
                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" href="<?php echo site_url() . '/shop/toofer'; ?>">ADD TO CART</a>
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