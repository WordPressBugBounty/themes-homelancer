<?php

/**
 * Title: Portfolio 2 Pro
 * Slug: homelancer/homelancer-portfolio-2
 * Categories: ct-homelancer-patterns-pro
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/project_1.jpg',
    $homelancer_url . 'assets/images/project_2.jpg',
    $homelancer_url . 'assets/images/hero-image-3.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"PRO: Portfolio 2","description":"Service Grid Section with Counter for Homelancer pro","categories":["homelancer-service"]},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"8rem"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"60px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:60px"><!-- wp:heading {"level":5,"style":{"typography":{"textAlign":"center","fontSize":"14px","letterSpacing":"3px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
        <h5 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:600;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('Portfolio', 'homelancer'); ?></h5>
        <!-- /wp:heading -->

        <!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center","lineHeight":"1.3"}},"fontSize":"giga"} -->
        <h1 class="wp-block-heading has-text-align-center has-giga-font-size" style="line-height:1.3"><?php esc_html_e('See Our Work in Action', 'homelancer'); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
        <p class="has-text-align-center has-medium-font-size"><br><?php esc_html_e('From repairs and maintenance to installations and renovations, get dependable professionals for the work that matters most.', 'homelancer'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"24px"}}}} -->
        <div class="wp-block-columns"><!-- wp:column {"width":"67%"} -->
            <div class="wp-block-column" style="flex-basis:67%"><!-- wp:image {"id":9785,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-9785" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"10%","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
                    <h6 class="wp-block-heading has-secondary-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:10%;text-transform:uppercase"><?php esc_html_e('Renovation', 'homelancer'); ?></h6>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}}} -->
                    <h2 class="wp-block-heading" style="font-size:24px;font-style:normal;font-weight:600"><?php esc_html_e('Meeting Room — Highland Park', 'homelancer'); ?></h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"33%"} -->
            <div class="wp-block-column" style="flex-basis:33%"><!-- wp:image {"id":9786,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-9786" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"10%","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
                    <h6 class="wp-block-heading has-secondary-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:10%;text-transform:uppercase"><?php esc_html_e('Remodeling', 'homelancer'); ?></h6>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}}} -->
                    <h2 class="wp-block-heading" style="font-size:24px;font-style:normal;font-weight:600"><?php esc_html_e('Bathroom Remodeling', 'homelancer'); ?></h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"24px"},"margin":{"top":"24px"}}}} -->
        <div class="wp-block-columns" style="margin-top:24px"><!-- wp:column {"width":"100%"} -->
            <div class="wp-block-column" style="flex-basis:100%"><!-- wp:image {"id":10195,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-10195" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"10%","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
                    <h6 class="wp-block-heading has-secondary-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:10%;text-transform:uppercase"><?php esc_html_e('Electrical', 'homelancer'); ?></h6>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}}} -->
                    <h2 class="wp-block-heading" style="font-size:24px;font-style:normal;font-weight:600"><?php esc_html_e('Electrical Upgrade', 'homelancer'); ?></h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->