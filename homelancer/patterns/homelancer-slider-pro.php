<?php

/**
 * Title: Slider Pro
 * Slug: homelancer/homelancer-slider-pro
 * Categories: ct-homelancer-patterns-pro
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/rating_star.png',
    $homelancer_url . 'assets/images/hero-image-2.jpg',
    $homelancer_url . 'assets/images/hero-image.jpg',
    $homelancer_url . 'assets/images/hero-image-3.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Hero Slider Pro","categories":["ct-homelancer-patterns-pro"]},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/slider {"blockClientId":"92f829f1-5cf1-4e00-87cd-267cfc42d2bf","pagination":{"width":"7px","height":"7px","borderRadius":"100px","activeWidth":"24px","activeHeight":"6px","activeBorder":{"width":"","style":"","color":""},"activeOffset":"4px","activeBorderRadius":"100px","bottom":24,"left":0,"right":0,"align":"center","gap":"4px","activeColor":"#F3752B","color":"#FFFFFE","activeColorHover":"#F3752B","colorHover":"#F3752B","activeBorderHover":"","dynamicBullets":false},"navigation":{"iconSize":15,"iconRotate":0,"iconBoxWidth":45,"iconBoxHeight":45,"borderRadius":50,"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","backgroundColor":"#FFFFFE","color":"#F3752B","backgroundColorHover":"#F3752B","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5,"responsive":"desktop"},"arrowIconNext":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='0' class='svg-inline\u002d\u002dfa fa-0 ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e","arrowIconPrev":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='angle-left' class='svg-inline\u002d\u002dfa fa-angle-left ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"slidesPerView":1,"centeredSlides":false,"spaceBetween":24,"speed":1500,"effect":"none"},"thumbMedia":["","",""]} -->
    <div class="wp-block-cozy-block-slider">
        <div class="cozy-block-slider swiper-container hover-show " id="cozyBlock_92f829f1_5cf1_4e00_87cd_267cfc42d2bf">
            <div class="swiper-wrapper"><!-- wp:cozy-block/slide {"blockClientId":"476497b3-c454-4fca-a323-272e58afdcbc"} -->
                <!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[1]) ?>","id":10190,"dimRatio":80,"isUserOverlayColor":true,"minHeight":780,"gradient":"dark-gradient","contentPosition":"bottom center","sizeSlug":"large","className":"is-style-homelancer-cover-unset-overflow","style":{"color":{"duotone":"var:preset|duotone|mixed-tone"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-homelancer-cover-unset-overflow" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40);min-height:780px"><img class="wp-block-cover__image-background wp-image-10190 size-large" alt="" src="<?php echo esc_url($homelancer_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-gradient-gradient-background"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
                        <div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"60%","style":{"spacing":{"padding":{"bottom":"120px"}}}} -->
                            <div class="wp-block-column is-vertically-aligned-bottom" style="padding-bottom:120px;flex-basis:60%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"#ffffff24","width":"1px","radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"1px","bottom":"4px","left":"12px","right":"12px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group has-border-color" style="border-color:#ffffff24;border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:1px;padding-right:12px;padding-bottom:4px;padding-left:12px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:image {"id":9707,"width":"100px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"4px","left":"0","right":"0"}},"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                                            <figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-right:0;margin-bottom:4px;margin-left:0"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-9707" style="width:100px;height:auto" /></figure>
                                            <!-- /wp:image -->
                                        </div>
                                        <!-- /wp:group -->

                                        <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"4px","bottom":"0","left":"0","right":"0"}}}} -->
                                        <p style="margin-top:4px;margin-right:0;margin-bottom:0;margin-left:0;line-height:1"><?php esc_html_e('5-Star Service · Trusted by Homeowners', 'homelancer'); ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2","fontSize":"84px"},"spacing":{"margin":{"top":"10px","bottom":"0"}}}} -->
                                <h1 class="wp-block-heading" style="margin-top:10px;margin-bottom:0;font-size:84px;font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Reliable Home Maintenance, Without the Hassle.', 'homelancer'); ?></h1>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                                <p class="has-light-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Make it easy for homeowners to find trusted maintenance services, schedule repairs, and keep every part of their home working as it should.', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|60"}}}} -->
                                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-with-arrow-icon","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"15px","bottom":"15px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"typography":{"fontSize":"18px"}}} -->
                                    <div class="wp-block-button is-style-button-with-arrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background has-custom-font-size wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:15px;padding-right:40px;padding-bottom:15px;padding-left:40px;font-size:18px"><?php esc_html_e('Get A Free Quote', 'homelancer'); ?></a></div>
                                    <!-- /wp:button -->

                                    <!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-hover-secondary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"left":"32px","right":"32px","top":"14px","bottom":"14px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"1px"},"typography":{"fontSize":"18px"}}} -->
                                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px;font-size:18px"><?php esc_html_e('Explore Our Services', 'homelancer'); ?></a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->

                                <!-- wp:group {"style":{"spacing":{"margin":{"top":"44px"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                                <div class="wp-block-group" style="margin-top:44px"><!-- wp:list {"className":"is-style-list-style-check-simple","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-check-simple"><!-- wp:list-item {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                                        <li class="has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Licensed & Insured', 'homelancer'); ?></li>
                                        <!-- /wp:list-item -->
                                    </ul>
                                    <!-- /wp:list -->

                                    <!-- wp:list {"className":"is-style-list-style-check-simple","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
                                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-check-simple"><!-- wp:list-item {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                                        <li class="has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Experienced Professionals', 'homelancer'); ?></li>
                                        <!-- /wp:list-item -->
                                    </ul>
                                    <!-- /wp:list -->

                                    <!-- wp:list {"className":"is-style-list-style-check-simple","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
                                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-check-simple"><!-- wp:list-item {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                                        <li class="has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Quality Guaranteed', 'homelancer'); ?></li>
                                        <!-- /wp:list-item -->
                                    </ul>
                                    <!-- /wp:list -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"verticalAlignment":"bottom"} -->
                            <div class="wp-block-column is-vertically-aligned-bottom"></div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                </div>
                <!-- /wp:cover -->
                <!-- /wp:cozy-block/slide -->

                <!-- wp:cozy-block/slide {"blockClientId":"78e6acd3-0c03-4016-b2da-f083d1baa41b"} -->
                <!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[2]) ?>","id":9624,"dimRatio":80,"isUserOverlayColor":true,"minHeight":780,"gradient":"dark-gradient","contentPosition":"bottom center","sizeSlug":"large","className":"is-style-homelancer-cover-unset-overflow","style":{"color":{"duotone":"var:preset|duotone|mixed-tone"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-homelancer-cover-unset-overflow" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40);min-height:780px"><img class="wp-block-cover__image-background wp-image-9624 size-large" alt="" src="<?php echo esc_url($homelancer_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-gradient-gradient-background"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
                        <div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"60%","style":{"spacing":{"padding":{"bottom":"120px"}}}} -->
                            <div class="wp-block-column is-vertically-aligned-bottom" style="padding-bottom:120px;flex-basis:60%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"#ffffff24","width":"1px","radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"1px","bottom":"4px","left":"12px","right":"12px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group has-border-color" style="border-color:#ffffff24;border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:1px;padding-right:12px;padding-bottom:4px;padding-left:12px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:image {"id":9707,"width":"100px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"4px","left":"0","right":"0"}},"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                                            <figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-right:0;margin-bottom:4px;margin-left:0"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-9707" style="width:100px;height:auto" /></figure>
                                            <!-- /wp:image -->
                                        </div>
                                        <!-- /wp:group -->

                                        <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"4px","bottom":"0","left":"0","right":"0"}}}} -->
                                        <p style="margin-top:4px;margin-right:0;margin-bottom:0;margin-left:0;line-height:1"><?php esc_html_e('5-Star Service · Trusted by Homeowners', 'homelancer'); ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2","fontSize":"84px"},"spacing":{"margin":{"top":"10px","bottom":"0"}}}} -->
                                <h1 class="wp-block-heading" style="margin-top:10px;margin-bottom:0;font-size:84px;font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Professional Home Services. Done Right, Every Time.', 'homelancer'); ?></h1>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                                <p class="has-light-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('From plumbing and HVAC to electrical, cleaning and repairs, build a professional website that helps local customers find your services and get in touch.', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|60"}}}} -->
                                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-with-arrow-icon","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"15px","bottom":"15px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"typography":{"fontSize":"18px"}}} -->
                                    <div class="wp-block-button is-style-button-with-arrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background has-custom-font-size wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:15px;padding-right:40px;padding-bottom:15px;padding-left:40px;font-size:18px"><?php esc_html_e('Get A Free Quote', 'homelancer'); ?></a></div>
                                    <!-- /wp:button -->

                                    <!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-hover-secondary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"left":"32px","right":"32px","top":"14px","bottom":"14px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"1px"},"typography":{"fontSize":"18px"}}} -->
                                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px;font-size:18px"><?php esc_html_e('Explore Our Services', 'homelancer'); ?></a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->

                                <!-- wp:group {"style":{"spacing":{"margin":{"top":"44px"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                                <div class="wp-block-group" style="margin-top:44px"><!-- wp:list {"className":"is-style-list-style-check-simple","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-check-simple"><!-- wp:list-item {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                                        <li class="has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Licensed & Insured', 'homelancer'); ?></li>
                                        <!-- /wp:list-item -->
                                    </ul>
                                    <!-- /wp:list -->

                                    <!-- wp:list {"className":"is-style-list-style-check-simple","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
                                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-check-simple"><!-- wp:list-item {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                                        <li class="has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Experienced Professionals', 'homelancer'); ?></li>
                                        <!-- /wp:list-item -->
                                    </ul>
                                    <!-- /wp:list -->

                                    <!-- wp:list {"className":"is-style-list-style-check-simple","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
                                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-check-simple"><!-- wp:list-item {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                                        <li class="has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Quality Guaranteed', 'homelancer'); ?></li>
                                        <!-- /wp:list-item -->
                                    </ul>
                                    <!-- /wp:list -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"verticalAlignment":"bottom"} -->
                            <div class="wp-block-column is-vertically-aligned-bottom"></div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                </div>
                <!-- /wp:cover -->
                <!-- /wp:cozy-block/slide -->

                <!-- wp:cozy-block/slide {"blockClientId":"2d2ad244-a12b-4c76-b35b-b5e2f2609bb0"} -->
                <!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[3]) ?>","id":10195,"dimRatio":80,"isUserOverlayColor":true,"minHeight":780,"gradient":"dark-gradient","contentPosition":"bottom center","sizeSlug":"large","className":"is-style-homelancer-cover-unset-overflow","style":{"color":{"duotone":"var:preset|duotone|mixed-tone"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-homelancer-cover-unset-overflow" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40);min-height:780px"><img class="wp-block-cover__image-background wp-image-10195 size-large" alt="" src="<?php echo esc_url($homelancer_images[3]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-gradient-gradient-background"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
                        <div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"60%","style":{"spacing":{"padding":{"bottom":"120px"}}}} -->
                            <div class="wp-block-column is-vertically-aligned-bottom" style="padding-bottom:120px;flex-basis:60%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"#ffffff24","width":"1px","radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"1px","bottom":"4px","left":"12px","right":"12px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group has-border-color" style="border-color:#ffffff24;border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:1px;padding-right:12px;padding-bottom:4px;padding-left:12px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:image {"id":9707,"width":"100px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"4px","left":"0","right":"0"}},"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                                            <figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-right:0;margin-bottom:4px;margin-left:0"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-9707" style="width:100px;height:auto" /></figure>
                                            <!-- /wp:image -->
                                        </div>
                                        <!-- /wp:group -->

                                        <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"4px","bottom":"0","left":"0","right":"0"}}}} -->
                                        <p style="margin-top:4px;margin-right:0;margin-bottom:0;margin-left:0;line-height:1"><?php esc_html_e('5-Star Service · Trusted by Homeowners', 'homelancer'); ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2","fontSize":"84px"},"spacing":{"margin":{"top":"10px","bottom":"0"}}}} -->
                                <h1 class="wp-block-heading" style="margin-top:10px;margin-bottom:0;font-size:84px;font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Reliable Plumbing Services. Fixed Right the First Time.', 'homelancer'); ?></h1>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                                <p class="has-light-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('From leaks and clogged drains to water heaters and repiping, showcase your plumbing services and help local homeowners quickly find the right help.', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|60"}}}} -->
                                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-with-arrow-icon","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"15px","bottom":"15px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"typography":{"fontSize":"18px"}}} -->
                                    <div class="wp-block-button is-style-button-with-arrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background has-custom-font-size wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:15px;padding-right:40px;padding-bottom:15px;padding-left:40px;font-size:18px"><?php esc_html_e('Get A Free Quote', 'homelancer'); ?></a></div>
                                    <!-- /wp:button -->

                                    <!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-hover-secondary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"left":"32px","right":"32px","top":"14px","bottom":"14px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"1px"},"typography":{"fontSize":"18px"}}} -->
                                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px;font-size:18px"><?php esc_html_e('Explore Our Services', 'homelancer'); ?></a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->

                                <!-- wp:group {"style":{"spacing":{"margin":{"top":"44px"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                                <div class="wp-block-group" style="margin-top:44px"><!-- wp:list {"className":"is-style-list-style-check-simple","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-check-simple"><!-- wp:list-item {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                                        <li class="has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Licensed & Insured', 'homelancer'); ?></li>
                                        <!-- /wp:list-item -->
                                    </ul>
                                    <!-- /wp:list -->

                                    <!-- wp:list {"className":"is-style-list-style-check-simple","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
                                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-check-simple"><!-- wp:list-item {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                                        <li class="has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Experienced Professionals', 'homelancer'); ?></li>
                                        <!-- /wp:list-item -->
                                    </ul>
                                    <!-- /wp:list -->

                                    <!-- wp:list {"className":"is-style-list-style-check-simple","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
                                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-check-simple"><!-- wp:list-item {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                                        <li class="has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Quality Guaranteed', 'homelancer'); ?></li>
                                        <!-- /wp:list-item -->
                                    </ul>
                                    <!-- /wp:list -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"verticalAlignment":"bottom"} -->
                            <div class="wp-block-column is-vertically-aligned-bottom"></div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                </div>
                <!-- /wp:cover -->
                <!-- /wp:cozy-block/slide -->
            </div>
            <div class="swiper-button-prev cozy-block-button-prev"></div>
            <div class="swiper-button-next cozy-block-button-next"></div>
            <div class="swiper-pagination cozy-pagination"></div>
        </div>
    </div>
    <!-- /wp:cozy-block/slider -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"homelancer-hero-form pro-version","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"blockGap":"0","padding":{"top":"28px","bottom":"28px","left":"40px","right":"40px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","textColor":"heading-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group homelancer-hero-form pro-version has-heading-color-color has-background-background-color has-text-color has-background has-link-color" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:40px;padding-bottom:28px;padding-left:40px"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                <h3 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e('Get your free quote', 'homelancer'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Tell us what you need and we\'ll get back to you shortly.', 'homelancer'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"16px","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:16px;margin-bottom:0"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                    <h5 class="wp-block-heading" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:16px;font-style:normal;font-weight:600"><?php esc_html_e('What service do you need?', 'homelancer'); ?></h5>
                    <!-- /wp:heading -->

                    <!-- wp:contact-form-7/contact-form-selector {"id":9635,"hash":"595bd50","title":"Quote Form","className":"homelancer-form-2"} -->
                    <div class="wp-block-contact-form-7-contact-form-selector homelancer-form-2">[contact-form-7 id="595bd50" title="Quote Form"]</div>
                    <!-- /wp:contact-form-7/contact-form-selector -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->