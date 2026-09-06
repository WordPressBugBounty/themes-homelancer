<?php

/**
 * Title: Header Layout 2
 * Slug: homelancer/header-layout-2
 * Description: Default header layout for the homelancer
 * Categories: homelancer-header
 * Keywords: header, nav, links, button
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/icon_call_light.png',
    $homelancer_url . 'assets/images/icon_email_light.png',
    $homelancer_url . 'assets/images/icon_mark.png',
);
?>
<!-- wp:group {"metadata":{"patternName":"homelancer/header-layout-2","name":"Header Layout 2","description":"Default header layout for the homelancer","categories":["homelancer-header"]},"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"6px","bottom":"6px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:6px;padding-right:var(--wp--preset--spacing--40);padding-bottom:6px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":1203,"width":"20px","height":"auto","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-1203" style="object-fit:contain;width:20px;height:auto" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"16px"}},"textColor":"light-color"} -->
                    <p class="has-light-color-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e('+1 (000) 012-3456', 'homelancer') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":1076,"width":"20px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-1076" style="object-fit:contain;width:20px;height:20px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"16px"}},"textColor":"light-color"} -->
                    <p class="has-light-color-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e('sample@example.com', 'homelancer') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":1077,"width":"20px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-1077" style="object-fit:contain;width:20px;height:20px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"16px"}},"textColor":"light-color"} -->
                    <p class="has-light-color-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e('New York, NY 0089,Newyork', 'homelancer') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"16px"}},"textColor":"light-color"} -->
                <p class="has-light-color-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e('Find Us On', 'homelancer') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","iconBackgroundColor":"primary-light-shade","iconBackgroundColorValue":"#1D4941","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                    <!-- wp:social-link {"url":"#","service":"yelp"} /-->

                    <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->

                    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"20px","bottom":"20px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:var(--wp--preset--spacing--40);padding-bottom:20px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:site-logo {"width":44,"shouldSyncIcon":false} /-->

                    <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"0px"}},"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"600","fontSize":"24px"}}} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:navigation {"ref":8408,"textColor":"heading-color","overlayBackgroundColor":"secondary-bg","overlayTextColor":"heading-color","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"homelancer-navigation","style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"400","lineHeight":"2","fontSize":"18px"},"spacing":{"blockGap":"24px"}},"layout":{"type":"flex","justifyContent":"center"}} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} -->
            <div class="wp-block-buttons has-custom-font-size is-style-button-transofom-on-hover has-normal-font-size" style="font-style:normal;font-weight:500"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","className":"is-style-button-with-icon-call","style":{"border":{"width":"0px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"style":"none"},"spacing":{"padding":{"left":"14px","right":"14px","top":"14px","bottom":"14px"}},"typography":{"fontSize":"18px","textTransform":"none","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} -->
                <div class="wp-block-button is-style-button-with-icon-call"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:14px;padding-right:14px;padding-bottom:14px;padding-left:14px;font-size:18px;font-style:normal;font-weight:500;text-transform:none"><?php esc_html_e('+1 (000) 012-3456', 'homelancer') ?></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-with-arrow-icon","style":{"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"left":"30px","right":"30px","top":"15px","bottom":"15px"}},"typography":{"fontSize":"18px","textTransform":"none","fontStyle":"normal","fontWeight":"500"}}} -->
                <div class="wp-block-button is-style-button-with-arrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background has-custom-font-size wp-element-button" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px;font-size:18px;font-style:normal;font-weight:500;text-transform:none"><?php esc_html_e('Request A Quote', 'homelancer') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->