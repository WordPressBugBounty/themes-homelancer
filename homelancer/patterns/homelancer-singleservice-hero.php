<?php

/**
 * Title: Single Service Hero Pro
 * Slug: homelancer/homelancer-singleservice-hero
 * Categories: ct-homelancer-patterns-pro
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/hero-image-3.jpg',
    $homelancer_url . 'assets/images/about.jpg',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"name":"PRO: Hero Section","description":"Hero Section with Counter for Homelancer pro","categories":["homelancer-hero"]},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"384px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group has-primary-background-color has-background" style="padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:384px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"940px"}} -->
        <div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3","textAlign":"center"}},"textColor":"light-color","fontSize":"giga"} -->
            <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-giga-font-size" style="font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Professional Plumbing Services You Can Trust', 'homelancer'); ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textAlign":"center"}},"textColor":"light-color"} -->
            <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Reliable plumbing repairs, installations, and maintenance from experienced local professionals.', 'homelancer'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"categories":["homelancer-about"],"name":"About Us Section"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:0px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"is-style-homelancer-overlap-style","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-homelancer-overlap-style"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"20px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[0]) ?>","id":10195,"dimRatio":0,"customOverlayColor":"#847874","isUserOverlayColor":false,"minHeight":560,"sizeSlug":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0px;min-height:560px"><img class="wp-block-cover__image-background wp-image-10195 size-full" alt="" src="<?php echo esc_url($homelancer_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#847874"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                            <p class="has-text-align-center has-large-font-size"></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"24px","padding":{"right":"0px","left":"0px"}}}} -->
                <div class="wp-block-column is-vertically-aligned-center" style="padding-right:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[1]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":560,"isDark":false,"sizeSlug":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover is-light" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0px;min-height:560px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                            <p class="has-text-align-center has-large-font-size"></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->