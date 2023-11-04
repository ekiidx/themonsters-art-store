<?php get_header(); ?>

<section id="main">
    <div class="container">
        <div class="item1">
        <a href="<?php echo site_url() . '/shop/mongrel'; ?>">
            <img src="<?php echo site_url() . '/wp-content/uploads/2022/02/mongrel.jpg' ; ?>"></a>

            <!-- Monster Selector -->
            <div class="monster-selector">
                    <div class="monster-selector-item">
                        <div class="arrow-selector">
                            <a href="<?php echo get_site_url() . '/krook'; ?>">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/left-arrow.svg'; ?>"></a> 
                        </div>

                        <div class="back-to-the-monsters">
                            <a href="<?php echo get_site_url() . '/meet-the-monsters'; ?>"><p class="random-font">Back to</p>
                            <h4>THE MONSTERS</h4></a>
                        </div>

                        <div class="arrow-selector">
                            <a href="<?php echo get_site_url() . '/penk'; ?>">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/right-arrow.svg'; ?>"></a>
                        </div>
                    </div>
                </div>

        </div>

        <div class="item2">
            <h2>Mongrel</h2>
            <p>Thanks to earlier discoveries, we were quickly able to identify Mongrel as belonging to the Demon family. Every face of this triage specimen is prone to cutting sarcasm and ridiculing stares. Besides the black body fur, these discordant tendencies are instant identifiers of a Demon. In complement to this jerkish behavior, Mongrel possesses an undeniably terrific sense of humor and comedic timing, with a penchant for practical jokes and, though mostly restricted to the upper two, pulling funny faces. Indeed, at least those parts we can't love we can laugh about.</p>

            <p>The introduction of Mongrel into our taxonomy came with new, exciting questions: are they one Monster or three? Or two? Is this split configuration unique to the Demon classification? Though the three faces often act independently, the upper two frequently respond simultaneously and identically to stimuli, while the lower face seems to dominate the motor mechanisms of their form. This can lead to disagreements settled by what can only be described as tongue battles between the upper and lower faces.</p>
           
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
                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="<?php echo site_url() . '/shop/mongrel'; ?>">
                            <img class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" src="<?php echo site_url() . '/wp-content/uploads/2022/02/mongrel.jpg'; ?>">
                            <h2 class="woocommerce-loop-product__title">Mongrel</h2>
                            <span class="price">$4.00</span></a>
                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" href="<?php echo site_url() . '/shop/mongrel'; ?>">ADD TO CART</a>
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