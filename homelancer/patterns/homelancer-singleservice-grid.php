<?php

/**
 * Title: Single Service Grid Pro
 * Slug: homelancer/homelancer-singleservice-grid
 * Categories: ct-homelancer-patterns-pro
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
<!-- wp:group {"metadata":{"name":"PRO: Single Service Grid","description":"Service Grid Section with Counter for Homelancer pro","categories":["homelancer-service"]},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"8rem"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"60px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:60px"><!-- wp:heading {"level":5,"style":{"typography":{"textAlign":"center","fontSize":"14px","letterSpacing":"3px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
        <h5 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:600;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('What we Offer', 'homelancer'); ?></h5>
        <!-- /wp:heading -->

        <!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center","lineHeight":"1.3"}},"fontSize":"giga"} -->
        <h1 class="wp-block-heading has-text-align-center has-giga-font-size" style="line-height:1.3"><?php esc_html_e('Everything Your Home Needs,', 'homelancer'); ?><br><?php esc_html_e('Under One Roof', 'homelancer'); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
        <p class="has-text-align-center has-medium-font-size"><?php esc_html_e('From repairs and maintenance to installations and renovations, get dependable professionals for the work that matters most.', 'homelancer'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/featured-content-box {"blockClientId":"1e023f18-b503-441f-ad21-c5e3c65dc052","gridOptions":{"enableMasonry":false,"columnCount":3,"gap":28},"className":"hover-show"} -->
    <div class="cozy-block-featured-content-box display-grid layout-default   " id="cozyBlock_1e023f18_b503_441f_ad21_c5e3c65dc052">
        <div class="cozy-grid-wrapper "><!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container is-style-homelancer-boxshadow","style":{"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"backgroundColor":"background","borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container is-style-homelancer-boxshadow has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[0]) ?>","id":1647,"dimRatio":0,"customOverlayColor":"#d3cfcc","isUserOverlayColor":false,"minHeight":280,"isDark":false,"sizeSlug":"large","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover is-light" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:280px"><img class="wp-block-cover__image-background wp-image-1647 size-large" alt="" src="<?php echo esc_url($homelancer_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d3cfcc"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                            <p class="has-text-align-center has-large-font-size"></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:heading {"level":4,"placeholder":"Featured Title","style":{"typography":{"textAlign":"left"}},"fontSize":"x-large"} -->
                    <h4 class="wp-block-heading has-text-align-left has-x-large-font-size"><?php esc_html_e('Leak &amp; Pipe Repair', 'homelancer'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"textAlign":"left"}}} -->
                    <p class="has-text-align-left"><?php esc_html_e('Leaks, blockages, water heaters and repiping — diagnosed properly and fixed the same visit wherever possible.', 'homelancer'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container is-style-homelancer-boxshadow","style":{"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"backgroundColor":"background","borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container is-style-homelancer-boxshadow has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[1]) ?>","id":1647,"dimRatio":0,"customOverlayColor":"#d3cfcc","isUserOverlayColor":false,"minHeight":280,"isDark":false,"sizeSlug":"large","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover is-light" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:280px"><img class="wp-block-cover__image-background wp-image-1647 size-large" alt="" src="<?php echo esc_url($homelancer_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d3cfcc"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                            <p class="has-text-align-center has-large-font-size"></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:heading {"level":4,"placeholder":"Featured Title","style":{"typography":{"textAlign":"left"}},"fontSize":"x-large"} -->
                    <h4 class="wp-block-heading has-text-align-left has-x-large-font-size"><?php esc_html_e('Drain Cleaning', 'homelancer'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"textAlign":"left"}}} -->
                    <p class="has-text-align-left"><?php esc_html_e('Leaks, blockages, water heaters and repiping — diagnosed properly and fixed the same visit wherever possible.', 'homelancer'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container is-style-homelancer-boxshadow","style":{"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"backgroundColor":"background","borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container is-style-homelancer-boxshadow has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[2]) ?>","id":1647,"dimRatio":0,"customOverlayColor":"#d3cfcc","isUserOverlayColor":false,"minHeight":280,"isDark":false,"sizeSlug":"large","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover is-light" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:280px"><img class="wp-block-cover__image-background wp-image-1647 size-large" alt="" src="<?php echo esc_url($homelancer_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d3cfcc"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                            <p class="has-text-align-center has-large-font-size"></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:heading {"level":4,"placeholder":"Featured Title","style":{"typography":{"textAlign":"left"}},"fontSize":"x-large"} -->
                    <h4 class="wp-block-heading has-text-align-left has-x-large-font-size"><?php esc_html_e('Water Heater Service', 'homelancer'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"textAlign":"left"}}} -->
                    <p class="has-text-align-left"><?php esc_html_e('Leaks, blockages, water heaters and repiping — diagnosed properly and fixed the same visit wherever possible.', 'homelancer'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container is-style-homelancer-boxshadow","style":{"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"backgroundColor":"background","borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container is-style-homelancer-boxshadow has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[3]) ?>","id":1647,"dimRatio":0,"customOverlayColor":"#d3cfcc","isUserOverlayColor":false,"minHeight":280,"isDark":false,"sizeSlug":"large","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover is-light" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:280px"><img class="wp-block-cover__image-background wp-image-1647 size-large" alt="" src="<?php echo esc_url($homelancer_images[3]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d3cfcc"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                            <p class="has-text-align-center has-large-font-size"></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:heading {"level":4,"placeholder":"Featured Title","style":{"typography":{"textAlign":"left"}},"fontSize":"x-large"} -->
                    <h4 class="wp-block-heading has-text-align-left has-x-large-font-size"><?php esc_html_e('Fixture Installation', 'homelancer'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"textAlign":"left"}}} -->
                    <p class="has-text-align-left"><?php esc_html_e('Leaks, blockages, water heaters and repiping — diagnosed properly and fixed the same visit wherever possible.', 'homelancer'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container is-style-homelancer-boxshadow","style":{"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"backgroundColor":"background","borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container is-style-homelancer-boxshadow has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[4]) ?>","id":1647,"dimRatio":0,"customOverlayColor":"#d3cfcc","isUserOverlayColor":false,"minHeight":280,"isDark":false,"sizeSlug":"large","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover is-light" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:280px"><img class="wp-block-cover__image-background wp-image-1647 size-large" alt="" src="<?php echo esc_url($homelancer_images[4]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d3cfcc"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                            <p class="has-text-align-center has-large-font-size"></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:heading {"level":4,"placeholder":"Featured Title","style":{"typography":{"textAlign":"left"}},"fontSize":"x-large"} -->
                    <h4 class="wp-block-heading has-text-align-left has-x-large-font-size"><?php esc_html_e('Sewer &amp; Drain Repair', 'homelancer'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"textAlign":"left"}}} -->
                    <p class="has-text-align-left"><?php esc_html_e('Leaks, blockages, water heaters and repiping — diagnosed properly and fixed the same visit wherever possible.', 'homelancer'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"lock":{"move":false,"remove":false},"className":"cozy-featured-content-box__container is-style-homelancer-boxshadow","style":{"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"backgroundColor":"background","borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group cozy-featured-content-box__container is-style-homelancer-boxshadow has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[5]) ?>","id":1647,"dimRatio":0,"customOverlayColor":"#d3cfcc","isUserOverlayColor":false,"minHeight":280,"isDark":false,"sizeSlug":"large","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover is-light" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:280px"><img class="wp-block-cover__image-background wp-image-1647 size-large" alt="" src="<?php echo esc_url($homelancer_images[5]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d3cfcc"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                            <p class="has-text-align-center has-large-font-size"></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:heading {"level":4,"placeholder":"Featured Title","style":{"typography":{"textAlign":"left"}},"fontSize":"x-large"} -->
                    <h4 class="wp-block-heading has-text-align-left has-x-large-font-size"><?php esc_html_e('Emergency Plumbing', 'homelancer'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"textAlign":"left"}}} -->
                    <p class="has-text-align-left"><?php esc_html_e('Leaks, blockages, water heaters and repiping — diagnosed properly and fixed the same visit wherever possible.', 'homelancer'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->
        </div>
    </div>
    <!-- /wp:cozy-block/featured-content-box -->
</div>
<!-- /wp:group -->