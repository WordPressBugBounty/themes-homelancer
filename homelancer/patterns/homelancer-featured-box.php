<?php

/**
 * Title: Featured Box Pro
 * Slug: homelancer/homelancer-featured-box
 * Categories: ct-homelancer-patterns-pro
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/icon_21.png',
    $homelancer_url . 'assets/images/icon_22.png',
    $homelancer_url . 'assets/images/icon_23.png',
);
?>
<!-- wp:group {"metadata":{"categories":["homelancer"],"name":"Featured box","description":"Contact Section"},"className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group is-style-default has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"28px"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-orakus-boxshadow-hover is-style-default","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-orakus-boxshadow-hover is-style-default has-background-alt-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":2065,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"duotone":"var:preset|duotone|secondary-white"},"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-2065" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textAlign":"center"},"spacing":{"margin":{"top":"28px"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:28px;font-style:normal;font-weight:600"><?php esc_html_e('Affordable Price', 'homelancer'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
                <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'homelancer'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-orakus-boxshadow-hover is-style-default","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-orakus-boxshadow-hover is-style-default has-background-alt-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":2066,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"duotone":"var:preset|duotone|secondary-white"},"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-2066" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textAlign":"center"},"spacing":{"margin":{"top":"28px"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:28px;font-style:normal;font-weight:600"><?php esc_html_e('Certified Team', 'homelancer'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
                <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'homelancer'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-orakus-boxshadow-hover is-style-default","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-orakus-boxshadow-hover is-style-default has-background-alt-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":2067,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"duotone":"var:preset|duotone|secondary-white"},"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-2067" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textAlign":"center"},"spacing":{"margin":{"top":"28px"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:28px;font-style:normal;font-weight:600"><?php esc_html_e('Quality Work', 'homelancer'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
                <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'homelancer'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->