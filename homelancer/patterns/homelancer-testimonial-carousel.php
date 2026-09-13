<?php

/**
 * Title: Testimonial Carousel Pro
 * Slug: homelancer/homelancer-testimonial-carousel
 * Categories: ct-homelancer-patterns-pro
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/rating_star.png',
    $homelancer_url . 'assets/images/testimonial_1.jpg',
    $homelancer_url . 'assets/images/team_2.jpg',
    $homelancer_url . 'assets/images/testimonial_4.jpg',
    $homelancer_url . 'assets/images/team_1.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"PRO: Testimonial Carousel","description":"Testimonical carousel for Homelancer pro","categories":["homelancer-testimonial"]},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"10rem"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"24px"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group" style="border-radius:24px;margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:10rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"64px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"840px","justifyContent":"center"}} -->
        <div class="wp-block-group" style="margin-bottom:64px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"600","textAlign":"center","fontSize":"16px","textTransform":"uppercase","letterSpacing":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
            <h5 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:600;letter-spacing:2px;line-height:1.3;text-transform:uppercase"><?php esc_html_e('Testimoniasl', 'homelancer'); ?></h5>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"54px","lineHeight":"1.4","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
            <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:54px;font-style:normal;font-weight:600;line-height:1.4"><?php esc_html_e('We Could Tell You How Great We Are—But Our Clients Do It Better', 'homelancer'); ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:cozy-block/testimonial {"blockClientId":"338654db-16df-4637-9e69-743ed8841aa2","carouselOptions":{"pagination":{"enabled":true,"width":"7","height":"7","borderRadius":10,"activeWidth":28,"activeHeight":"6","activeBorder":{"width":"","style":"","color":""},"activeOffset":0,"gap":4,"activeBorderRadius":10,"activeColor":"#F3752B","color":"#123932","activeColorHover":"#FFFFFE","colorHover":"#F3752B","activeBorderHover":"","align":"center","positionVertical":-48,"left":"0px","right":"0px"},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":50,"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","backgroundColor":"#113C3D","color":"#FFFFFE","backgroundColorHover":"#F3752B","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5}},"sliderOptions":{"loop":false,"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":3,"spaceBetween":24,"speed":700}},"className":"hover-show"} -->
        <div class="cozy-block-testimonial display-carousel   swiper-container" id="cozyBlock_338654db_16df_4637_9e69_743ed8841aa2">
            <div class="cozy-block-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"className":"is-style-homelancer-boxshadow","style":{"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"left":"28px","right":"28px","top":"28px","bottom":"28px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","borderColor":"border-color","layout":{"type":"constrained","contentSize":"580px"}} -->
                    <div class="wp-block-group is-style-homelancer-boxshadow has-border-color has-border-color-border-color has-light-color-background-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"width":"120px","height":"28px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" style="object-fit:contain;width:120px;height:28px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"20px","textAlign":"left"}},"textColor":"foreground"} -->
                        <p class="has-text-align-left has-foreground-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:400"><?php esc_html_e('I’m so impressed with the variety and quality of clothing! Everything I’ve ordered looks just like the pictures and fits perfectly. Plus, customer service is super helpful. Highly recommend!', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                        <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"medium"} -->
                                <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'homelancer'); ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground","fontSize":"normal"} -->
                                <p class="has-foreground-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Business Owner', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"className":"is-style-homelancer-boxshadow","style":{"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"left":"28px","right":"28px","top":"28px","bottom":"28px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","borderColor":"border-color","layout":{"type":"constrained","contentSize":"580px"}} -->
                    <div class="wp-block-group is-style-homelancer-boxshadow has-border-color has-border-color-border-color has-light-color-background-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"width":"120px","height":"28px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" style="object-fit:contain;width:120px;height:28px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"20px","textAlign":"left"}},"textColor":"foreground"} -->
                        <p class="has-text-align-left has-foreground-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:400"><?php esc_html_e('I’m so impressed with the variety and quality of clothing! Everything I’ve ordered looks just like the pictures and fits perfectly. Plus, customer service is super helpful. Highly recommend!', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                        <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"medium"} -->
                                <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'homelancer'); ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground","fontSize":"normal"} -->
                                <p class="has-foreground-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Business Owner', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"className":"is-style-homelancer-boxshadow","style":{"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"left":"28px","right":"28px","top":"28px","bottom":"28px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","borderColor":"border-color","layout":{"type":"constrained","contentSize":"580px"}} -->
                    <div class="wp-block-group is-style-homelancer-boxshadow has-border-color has-border-color-border-color has-light-color-background-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"width":"120px","height":"28px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" style="object-fit:contain;width:120px;height:28px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"20px","textAlign":"left"}},"textColor":"foreground"} -->
                        <p class="has-text-align-left has-foreground-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:400"><?php esc_html_e('I’m so impressed with the variety and quality of clothing! Everything I’ve ordered looks just like the pictures and fits perfectly. Plus, customer service is super helpful. Highly recommend!', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                        <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($homelancer_images[3]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"medium"} -->
                                <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'homelancer'); ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground","fontSize":"normal"} -->
                                <p class="has-foreground-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Business Owner', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/carousel -->

                <!-- wp:cozy-block/carousel -->
                <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"className":"is-style-homelancer-boxshadow","style":{"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"left":"28px","right":"28px","top":"28px","bottom":"28px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","borderColor":"border-color","layout":{"type":"constrained","contentSize":"580px"}} -->
                    <div class="wp-block-group is-style-homelancer-boxshadow has-border-color has-border-color-border-color has-light-color-background-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"width":"120px","height":"28px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" style="object-fit:contain;width:120px;height:28px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"20px","textAlign":"left"}},"textColor":"foreground"} -->
                        <p class="has-text-align-left has-foreground-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:400"><?php esc_html_e('I’m so impressed with the variety and quality of clothing! Everything I’ve ordered looks just like the pictures and fits perfectly. Plus, customer service is super helpful. Highly recommend!', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                        <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($homelancer_images[4]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"medium"} -->
                                <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('John Doe', 'homelancer'); ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground","fontSize":"normal"} -->
                                <p class="has-foreground-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Business Owner', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/carousel -->
            </div>
        </div>
        <div class="swiper-button-prev cozy-block-button-prev"></div>
        <div class="swiper-button-next cozy-block-button-next"></div>
        <div class="swiper-pagination cozy-pagination"></div>
        <!-- /wp:cozy-block/testimonial -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->