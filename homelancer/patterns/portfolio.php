<?php

/**
 * Title: Portfolio Showcase
 * Slug: homelancer/portfolio
 * Categories: homelancer-portfolio
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/project_1.jpg',
    $homelancer_url . 'assets/images/project_2.jpg',
    $homelancer_url . 'assets/images/project_3.jpg',
    $homelancer_url . 'assets/images/project_4.jpg',
    $homelancer_url . 'assets/images/project_5.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Our Projects","categories":["homelancer-service"]},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"8rem"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"left":"84px"},"margin":{"top":"0","bottom":"64px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:0;margin-bottom:64px"><!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
        <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"460px","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3","fontSize":"14px","textAlign":"left","textTransform":"uppercase","letterSpacing":"10%"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
                <h5 class="wp-block-heading has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:500;letter-spacing:10%;line-height:1.3;text-transform:uppercase"><?php esc_html_e('Our Works', 'homelancer'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2","fontSize":"48px","textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="font-size:48px;font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e('Projects We’re Proud to Deliver.', 'homelancer'); ?></h1>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"bottom"} -->
        <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textAlign":"left"}},"textColor":"foreground"} -->
            <p class="has-text-align-left has-foreground-color has-text-color has-link-color"><?php esc_html_e('Explore some of our recent projects and see the quality, care, and expertise we bring to every job.', 'homelancer'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"40px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:40px"><!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-with-arrow-icon","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"15px","bottom":"15px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"typography":{"fontSize":"18px"}}} -->
                <div class="wp-block-button is-style-button-with-arrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background has-custom-font-size wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:15px;padding-right:28px;padding-bottom:15px;padding-left:28px;font-size:18px"><?php esc_html_e('Explore All Projects', 'homelancer'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

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
        <div class="wp-block-columns" style="margin-top:24px"><!-- wp:column {"width":"33%"} -->
            <div class="wp-block-column" style="flex-basis:33%"><!-- wp:image {"id":9792,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-9792" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"10%","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
                    <h6 class="wp-block-heading has-secondary-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:10%;text-transform:uppercase"><?php esc_html_e('Roofing', 'homelancer'); ?></h6>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}}} -->
                    <h2 class="wp-block-heading" style="font-size:24px;font-style:normal;font-weight:600"><?php esc_html_e('Roof Replacement', 'homelancer'); ?></h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"33%"} -->
            <div class="wp-block-column" style="flex-basis:33%"><!-- wp:image {"id":9793,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[3]) ?>" alt="" class="wp-image-9793" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"10%","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
                    <h6 class="wp-block-heading has-secondary-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:10%;text-transform:uppercase"><?php esc_html_e('HVAC', 'homelancer'); ?></h6>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}}} -->
                    <h2 class="wp-block-heading" style="font-size:24px;font-style:normal;font-weight:600"><?php esc_html_e('AC Installation', 'homelancer'); ?></h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"33%"} -->
            <div class="wp-block-column" style="flex-basis:33%"><!-- wp:image {"id":9794,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[4]) ?>" alt="" class="wp-image-9794" /></figure>
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