<?php

/**
 * Title: Testimonials Carousel 2 PRO
 * Slug: homelancer/homelancer-testimonials-carousel-2
 * Categories: ct-homelancer-patterns-pro
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/team_3.jpg',
    $homelancer_url . 'assets/images/team_2.jpg',
    $homelancer_url . 'assets/images/team_21.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["homelancer-testimonial"],"name":"Testimonials Carousel"},"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"840px"}} -->
<div class="wp-block-group alignfull has-background-alt-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"740px","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:heading {"level":5,"style":{"typography":{"textAlign":"center","fontSize":"14px","letterSpacing":"3px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
        <h5 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:600;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('Testimonials', 'homelancer'); ?></h5>
        <!-- /wp:heading -->

        <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3","textAlign":"center","fontSize":"64px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:64px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Hear From Our Happy Clients: Their Stories', 'homelancer'); ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/testimonial {"blockClientId":"a654ba4f-53f6-4d82-bbee-db565cbf7f3f","display":"testimonials-block-5","carouselOptions":{"fadeBg":false,"pagination":{"enabled":true,"width":"7","height":"7","borderRadius":10,"activeWidth":"24","activeHeight":"6","activeBorder":{"width":"","style":"","color":""},"activeOffset":0,"gap":4,"activeBorderRadius":10,"activeColor":"#F3752B","color":"#123932","activeColorHover":"#164861","colorHover":"#F3752B","activeBorderHover":"","align":"center","positionVertical":-40,"left":"0px","right":"0px"},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":50,"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","backgroundColor":"#fff","color":"#123932","backgroundColorHover":"#F3752B","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5}},"sliderOptions":{"loop":false,"autoplay":{"enabled":true,"pauseOnMouseEnter":true,"delay":2500},"reverseDirection":false,"centeredSlides":false,"slidesPerView":1,"spaceBetween":20,"speed":800,"smoothTransition":false}}} -->
    <div class="cozy-block-testimonial display-carousel   swiper-container" id="cozyBlock_a654ba4f_53f6_4d82_bbee_db565cbf7f3f">
        <div class="cozy-block-carousel-wrapper swiper-wrapper"><!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"},"cozyHoverEffect":{"hasOverflow":false,"overflow":"hidden","hasZIndex":false,"zIndex":0,"boxShadow":{"enabled":false,"color":"#0f0f0f0f","horizontal":0,"vertical":4,"blur":34,"spread":-5,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":false,"transform":{"translateX":0,"translateY":0,"rotate":0,"scale":1},"transformDefaultEnabled":false,"transformDefault":{"translateX":0,"translateY":0,"rotate":0,"scale":1}},"cozyAnimation":{"type":"none","easingFunction":"ease","anchorPlacement":"top-center","duration":600}} -->
                <div class="wp-block-group" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":9363,"width":"96px","height":"96px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-9363" style="border-radius:100px;object-fit:cover;width:96px;height:96px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"500","textAlign":"center"},"spacing":{"margin":{"top":"8px","bottom":"2px"}}}} -->
                        <h3 class="wp-block-heading has-text-align-center" style="margin-top:8px;margin-bottom:2px;font-size:18px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Michael Carter', 'homelancer'); ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"2px","bottom":"0"}},"color":{"text":"#5c5c5e"},"elements":{"link":{"color":{"text":"#5c5c5e"}}},"typography":{"fontSize":"13px","textAlign":"center"}}} -->
                        <p class="has-text-align-center has-text-color has-link-color" style="color:#5c5c5e;margin-top:2px;margin-bottom:0;font-size:13px"><?php esc_html_e('Homeowner | Carter Property Services', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"16px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600","textAlign":"center"},"spacing":{"margin":{"top":"16px","bottom":"16px"}}}} -->
                    <h4 class="wp-block-heading has-text-align-center" style="margin-top:16px;margin-bottom:16px;font-size:16px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Professional, reliable, and easy to work with.”', 'homelancer'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
                    <p class="has-text-align-center"><?php esc_html_e('The team made it incredibly easy to get the repairs we needed. They arrived on time, explained everything clearly, and did an excellent job from start to finish.', 'homelancer'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:image {"width":"auto","height":"16px","sizeSlug":"large","linkDestination":"none","align":"center","style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"12px","bottom":"18px","left":"0","right":"0"}},"color":{"duotone":["rgb(255, 150, 58)","rgb(255, 150, 58)"]}}} -->
                    <figure class="wp-block-image aligncenter size-large is-resized has-custom-border" style="margin-top:12px;margin-right:0;margin-bottom:18px;margin-left:0"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/stars.png" alt="" style="border-radius:0px;width:auto;height:16px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:image {"width":"auto","height":"34px","sizeSlug":"large"} -->
                        <figure class="wp-block-image size-large is-resized"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/google_logo.png" alt="" style="width:auto;height:34px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0"}},"color":{"text":"#5c5c5e"},"elements":{"link":{"color":{"text":"#5c5c5e"}}},"typography":{"fontSize":"13px"}}} -->
                        <p class="has-text-color has-link-color" style="color:#5c5c5e;margin-top:0px;margin-bottom:0;font-size:13px"><?php esc_html_e('Verified Google Review', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"},"cozyHoverEffect":{"hasOverflow":false,"overflow":"hidden","hasZIndex":false,"zIndex":0,"boxShadow":{"enabled":false,"color":"#0f0f0f0f","horizontal":0,"vertical":4,"blur":34,"spread":-5,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":false,"transform":{"translateX":0,"translateY":0,"rotate":0,"scale":1},"transformDefaultEnabled":false,"transformDefault":{"translateX":0,"translateY":0,"rotate":0,"scale":1}},"cozyAnimation":{"type":"none","easingFunction":"ease","anchorPlacement":"top-center","duration":600}} -->
                <div class="wp-block-group" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":11090,"width":"96px","height":"96px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-11090" style="border-radius:100px;object-fit:cover;width:96px;height:96px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"500","textAlign":"center"},"spacing":{"margin":{"top":"8px","bottom":"2px"}}}} -->
                        <h3 class="wp-block-heading has-text-align-center" style="margin-top:8px;margin-bottom:2px;font-size:18px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Jesisica Nguyen', 'homelancer'); ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"2px","bottom":"0"}},"color":{"text":"#5c5c5e"},"elements":{"link":{"color":{"text":"#5c5c5e"}}},"typography":{"fontSize":"13px","textAlign":"center"}}} -->
                        <p class="has-text-align-center has-text-color has-link-color" style="color:#5c5c5e;margin-top:2px;margin-bottom:0;font-size:13px"><?php esc_html_e('Graphics Designer', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"16px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600","textAlign":"center"},"spacing":{"margin":{"top":"16px","bottom":"16px"}}}} -->
                    <h4 class="wp-block-heading has-text-align-center" style="margin-top:16px;margin-bottom:16px;font-size:16px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('The Best WordPress Templates', 'homelancer'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
                    <p class="has-text-align-center"><?php esc_html_e('I’ve used other kits, but this one is the best. The attention to detail and usability are truly amazing.', 'homelancer'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:image {"width":"auto","height":"16px","sizeSlug":"large","linkDestination":"none","align":"center","style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"12px","bottom":"18px","left":"0","right":"0"}},"color":{"duotone":["rgb(255, 150, 58)","rgb(255, 150, 58)"]}}} -->
                    <figure class="wp-block-image aligncenter size-large is-resized has-custom-border" style="margin-top:12px;margin-right:0;margin-bottom:18px;margin-left:0"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/stars.png" alt="" style="border-radius:0px;width:auto;height:16px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:image {"width":"auto","height":"34px","sizeSlug":"large"} -->
                        <figure class="wp-block-image size-large is-resized"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/google_logo.png" alt="" style="width:auto;height:34px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0"}},"color":{"text":"#5c5c5e"},"elements":{"link":{"color":{"text":"#5c5c5e"}}},"typography":{"fontSize":"13px"}}} -->
                        <p class="has-text-color has-link-color" style="color:#5c5c5e;margin-top:0px;margin-bottom:0;font-size:13px"><?php esc_html_e('Verified Google Review', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/carousel -->

            <!-- wp:cozy-block/carousel -->
            <div class="cozy-block-carousel swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"transparent","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"},"cozyHoverEffect":{"hasOverflow":false,"overflow":"hidden","hasZIndex":false,"zIndex":0,"boxShadow":{"enabled":false,"color":"#0f0f0f0f","horizontal":0,"vertical":4,"blur":34,"spread":-5,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":false,"transform":{"translateX":0,"translateY":0,"rotate":0,"scale":1},"transformDefaultEnabled":false,"transformDefault":{"translateX":0,"translateY":0,"rotate":0,"scale":1}},"cozyAnimation":{"type":"none","easingFunction":"ease","anchorPlacement":"top-center","duration":600}} -->
                <div class="wp-block-group has-transparent-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":9361,"width":"96px","height":"96px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                        <figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-9361" style="border-radius:100px;object-fit:cover;width:96px;height:96px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"500","textAlign":"center"},"spacing":{"margin":{"top":"8px","bottom":"2px"}}}} -->
                        <h3 class="wp-block-heading has-text-align-center" style="margin-top:8px;margin-bottom:2px;font-size:18px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Daniel Brooks', 'homelancer'); ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"2px","bottom":"0"}},"color":{"text":"#5c5c5e"},"elements":{"link":{"color":{"text":"#5c5c5e"}}},"typography":{"fontSize":"13px","textAlign":"center"}}} -->
                        <p class="has-text-align-center has-text-color has-link-color" style="color:#5c5c5e;margin-top:2px;margin-bottom:0;font-size:13px"><?php esc_html_e('Business Owner | Brooks Commercial Services', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"16px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600","textAlign":"center"},"spacing":{"margin":{"top":"16px","bottom":"16px"}}}} -->
                    <h4 class="wp-block-heading has-text-align-center" style="margin-top:16px;margin-bottom:16px;font-size:16px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('A team I can confidently recommend.', 'homelancer'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
                    <p class="has-text-align-center"><?php esc_html_e('We’ve used their services for several projects, and they’ve been consistently responsive, knowledgeable, and dependable. It’s great knowing we have a team we can count on.', 'homelancer'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:image {"width":"auto","height":"16px","sizeSlug":"large","linkDestination":"none","align":"center","style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"12px","bottom":"18px","left":"0","right":"0"}},"color":{"duotone":["rgb(255, 150, 58)","rgb(255, 150, 58)"]}}} -->
                    <figure class="wp-block-image aligncenter size-large is-resized has-custom-border" style="margin-top:12px;margin-right:0;margin-bottom:18px;margin-left:0"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/stars.png" alt="" style="border-radius:0px;width:auto;height:16px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:image {"width":"auto","height":"34px","sizeSlug":"large"} -->
                        <figure class="wp-block-image size-large is-resized"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/google_logo.png" alt="" style="width:auto;height:34px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0"}},"color":{"text":"#5c5c5e"},"elements":{"link":{"color":{"text":"#5c5c5e"}}},"typography":{"fontSize":"13px"}}} -->
                        <p class="has-text-color has-link-color" style="color:#5c5c5e;margin-top:0px;margin-bottom:0;font-size:13px"><?php esc_html_e('Verified Google Review', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->
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