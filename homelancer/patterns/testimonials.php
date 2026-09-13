<?php

/**
 * Title: Testimonials
 * Slug: homelancer/testimonials
 * Categories: homelancer-testimonial
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/rating_star.png',
    $homelancer_url . 'assets/images/testimonial_1.jpg',
    $homelancer_url . 'assets/images/team_2.jpg',
    $homelancer_url . 'assets/images/team_3.jpg',

);
?>
<!-- wp:group {"metadata":{"name":"Testimonials","categories":["homelancer-testimonial"]},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"8rem"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"700px","justifyContent":"left"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3","fontSize":"14px","textAlign":"left","textTransform":"uppercase","letterSpacing":"10%"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
        <h5 class="wp-block-heading has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:500;letter-spacing:10%;line-height:1.3;text-transform:uppercase"><?php esc_html_e('Testimonials', 'homelancer') ?></h5>
        <!-- /wp:heading -->

        <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2","fontSize":"48px","textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
        <h1 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color" style="font-size:48px;font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e('15+ Years of Reliable Service, Right in Your Neighborhood', 'homelancer') ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"24px"},"margin":{"top":"60px"}}}} -->
    <div class="wp-block-columns" style="margin-top:60px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-homelancer-boxshadow-medium","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"28px","right":"28px","top":"28px","bottom":"28px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"580px"}} -->
            <div class="wp-block-group is-style-homelancer-boxshadow-medium has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"width":"120px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" style="width:120px;height:auto" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"20px","textAlign":"left"}},"textColor":"foreground"} -->
                <p class="has-text-align-left has-foreground-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:400"><?php esc_html_e('I’m so impressed with the variety and quality of clothing! Everything I’ve ordered looks just like the pictures and fits perfectly. Plus, customer service is super helpful. Highly recommend!', 'homelancer') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"padding":{"top":"24px"},"margin":{"top":"24px","bottom":"0"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
                <div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:24px;margin-bottom:0;padding-top:24px"><!-- wp:column {"width":"60px"} -->
                    <div class="wp-block-column" style="flex-basis:60px"><!-- wp:image {"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" style="border-radius:50px;object-fit:cover;width:60px;height:60px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":""} -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"medium"} -->
                            <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Robert Mathew', 'homelancer') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground","fontSize":"small"} -->
                            <p class="has-foreground-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Kitchen Renovation · Austin, TX', 'homelancer') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-homelancer-boxshadow-medium","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"28px","right":"28px","top":"28px","bottom":"28px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"580px"}} -->
            <div class="wp-block-group is-style-homelancer-boxshadow-medium has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"width":"120px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" style="width:120px;height:auto" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"20px","textAlign":"left"}},"textColor":"foreground"} -->
                <p class="has-text-align-left has-foreground-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:400"><?php esc_html_e('I’m so impressed with the variety and quality of clothing! Everything I’ve ordered looks just like the pictures and fits perfectly. Plus, customer service is super helpful. Highly recommend!', 'homelancer') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"padding":{"top":"24px"},"margin":{"top":"24px","bottom":"0"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
                <div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:24px;margin-bottom:0;padding-top:24px"><!-- wp:column {"width":"60px"} -->
                    <div class="wp-block-column" style="flex-basis:60px"><!-- wp:image {"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" style="border-radius:50px;object-fit:cover;width:60px;height:60px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":""} -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"medium"} -->
                            <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Emma Hudson', 'homelancer') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground","fontSize":"small"} -->
                            <p class="has-foreground-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Kitchen Renovation · Austin, TX', 'homelancer') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-homelancer-boxshadow-medium","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"28px","right":"28px","top":"28px","bottom":"28px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"580px"}} -->
            <div class="wp-block-group is-style-homelancer-boxshadow-medium has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"width":"120px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" style="width:120px;height:auto" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"20px","textAlign":"left"}},"textColor":"foreground"} -->
                <p class="has-text-align-left has-foreground-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:400"><?php esc_html_e('I’m so impressed with the variety and quality of clothing! Everything I’ve ordered looks just like the pictures and fits perfectly. Plus, customer service is super helpful. Highly recommend!', 'homelancer') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"padding":{"top":"24px"},"margin":{"top":"24px","bottom":"0"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
                <div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:24px;margin-bottom:0;padding-top:24px"><!-- wp:column {"width":"60px"} -->
                    <div class="wp-block-column" style="flex-basis:60px"><!-- wp:image {"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[3]) ?>" alt="" style="border-radius:50px;object-fit:cover;width:60px;height:60px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":""} -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"medium"} -->
                            <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Daniel Parker', 'homelancer') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground","fontSize":"small"} -->
                            <p class="has-foreground-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Kitchen Renovation · Austin, TX', 'homelancer') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->