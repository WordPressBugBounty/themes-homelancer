<?php

/**
 * Title: Template Portfolio Page (PRO)
 * Slug: homelancer/template-portfolios
 * Categories: ct-homelancer-pro
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/p101.jpg',
    $homelancer_url . 'assets/images/p102.jpg',
    $homelancer_url . 'assets/images/p103.jpg',
    $homelancer_url . 'assets/images/p104.jpg',
    $homelancer_url . 'assets/images/p105.jpg',
    $homelancer_url . 'assets/images/p106.jpg',
);
?>
<!-- wp:group {"tagName":"main","metadata":{"categories":["ct-homelancer-pro"],"name":"PRO: Portfolio Page"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"640px"}} -->
        <div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textAlign":"center"}},"textColor":"light-color","fontSize":"giga"} -->
            <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-giga-font-size"><?php esc_html_e('Portfolios / Works', 'homelancer'); ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textAlign":"center"}},"textColor":"light-color"} -->
            <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas that emphasize cleanliness,', 'homelancer'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:cozy-block/featured-content-box {"blockClientId":"a05fd3ac-8503-464c-99c9-215d7ddfef8f","gridOptions":{"enableMasonry":false,"columnCount":2,"gap":40},"className":"hover-show"} -->
        <div class="cozy-block-featured-content-box display-grid layout-default   " id="cozyBlock_a05fd3ac_8503_464c_99c9_215d7ddfef8f">
            <div class="cozy-grid-wrapper "><!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[0]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":420,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:420px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"24px"}},"typography":{"textAlign":"left","fontSize":"32px"}}} -->
                        <h4 class="wp-block-heading has-text-align-left" style="margin-top:24px;font-size:32px"><?php esc_html_e('Home Cleaning', 'homelancer'); ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"textAlign":"left"}}} -->
                        <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"secondary","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"left":"28px","right":"28px","top":"12px","bottom":"12px"}}}} -->
                            <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:12px;padding-right:28px;padding-bottom:12px;padding-left:28px"><?php esc_html_e('Explore More', 'homelancer'); ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->

                <!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[1]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":420,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:420px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"24px"}},"typography":{"textAlign":"left","fontSize":"32px"}}} -->
                        <h4 class="wp-block-heading has-text-align-left" style="margin-top:24px;font-size:32px"><?php esc_html_e('Home Cleaning', 'homelancer'); ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"textAlign":"left"}}} -->
                        <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"secondary","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"left":"28px","right":"28px","top":"12px","bottom":"12px"}}}} -->
                            <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:12px;padding-right:28px;padding-bottom:12px;padding-left:28px"><?php esc_html_e('Explore More', 'homelancer'); ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->

                <!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[2]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":420,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:420px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"24px"}},"typography":{"textAlign":"left","fontSize":"32px"}}} -->
                        <h4 class="wp-block-heading has-text-align-left" style="margin-top:24px;font-size:32px"><?php esc_html_e('Home Cleaning', 'homelancer'); ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"textAlign":"left"}}} -->
                        <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"secondary","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"left":"28px","right":"28px","top":"12px","bottom":"12px"}}}} -->
                            <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:12px;padding-right:28px;padding-bottom:12px;padding-left:28px"><?php esc_html_e('Explore More', 'homelancer'); ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->

                <!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[3]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":420,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:420px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[3]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"24px"}},"typography":{"textAlign":"left","fontSize":"32px"}}} -->
                        <h4 class="wp-block-heading has-text-align-left" style="margin-top:24px;font-size:32px"><?php esc_html_e('Home Cleaning', 'homelancer'); ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"textAlign":"left"}}} -->
                        <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"secondary","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"left":"28px","right":"28px","top":"12px","bottom":"12px"}}}} -->
                            <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:12px;padding-right:28px;padding-bottom:12px;padding-left:28px"><?php esc_html_e('Explore More', 'homelancer'); ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->

                <!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[4]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":420,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:420px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[4]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"24px"}},"typography":{"textAlign":"left","fontSize":"32px"}}} -->
                        <h4 class="wp-block-heading has-text-align-left" style="margin-top:24px;font-size:32px"><?php esc_html_e('Home Cleaning', 'homelancer'); ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"textAlign":"left"}}} -->
                        <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"secondary","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"left":"28px","right":"28px","top":"12px","bottom":"12px"}}}} -->
                            <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:12px;padding-right:28px;padding-bottom:12px;padding-left:28px"><?php esc_html_e('Explore More', 'homelancer'); ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->

                <!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group cozy-featured-content-box__container"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[5]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":420,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover is-light" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:420px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[5]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                                <p class="has-text-align-center has-large-font-size"></p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->

                        <!-- wp:heading {"level":4,"placeholder":"Featured Title","style":{"spacing":{"margin":{"top":"24px"}},"typography":{"textAlign":"left","fontSize":"32px"}}} -->
                        <h4 class="wp-block-heading has-text-align-left" style="margin-top:24px;font-size:32px"><?php esc_html_e('Home Cleaning', 'homelancer'); ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"textAlign":"left"}}} -->
                        <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:16px"><!-- wp:button {"placeholder":"Read More","backgroundColor":"secondary","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"left":"28px","right":"28px","top":"12px","bottom":"12px"}}}} -->
                            <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:12px;padding-right:28px;padding-bottom:12px;padding-left:28px"><?php esc_html_e('Explore More', 'homelancer'); ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->
            </div>
        </div>
        <!-- /wp:cozy-block/featured-content-box -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->