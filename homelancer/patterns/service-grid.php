<?php

/**
 * Title: Services Grid
 * Slug: homelancer/service-grid
 * Categories: homelancer-service
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/icon_103.png',
    $homelancer_url . 'assets/images/icon_104.png',
    $homelancer_url . 'assets/images/icon_105.png',
    $homelancer_url . 'assets/images/icon_101.png',
    $homelancer_url . 'assets/images/icon_106.png',
    $homelancer_url . 'assets/images/icon_107.png',
);
?>
<!-- wp:group {"metadata":{"name":"Services Grid","categories":["homelancer-service"],"patternName":"homelancer/service-grid"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"8rem"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"left":"84px"},"margin":{"top":"0","bottom":"64px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:0;margin-bottom:64px"><!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
        <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3","fontSize":"14px","textAlign":"left","textTransform":"uppercase","letterSpacing":"10%"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
                <h5 class="wp-block-heading has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:500;letter-spacing:10%;line-height:1.3;text-transform:uppercase"><?php esc_html_e('What We Do', 'homelancer'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2","fontSize":"48px","textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="font-size:48px;font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e('Everything Your Home Needs, Under One Roof', 'homelancer'); ?></h1>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"bottom"} -->
        <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textAlign":"left"}},"textColor":"foreground"} -->
            <p class="has-text-align-left has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'homelancer'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"24px"}}}} -->
    <div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}}} -->
        <div class="wp-block-column" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"is-style-homelancer-boxshadow","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"backgroundColor":"light-color","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homelancer-boxshadow has-border-color has-border-color-border-color has-light-color-background-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":10008,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"50%"},"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-10008" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"28px","bottom":"0"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size" style="margin-top:28px;margin-bottom:0"><?php esc_html_e('Plumbing', 'homelancer'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Expert plumbing repairs for leaks, clogged drains, fixtures and more, with fast service and lasting solutions.', 'homelancer'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"20px"}}}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:20px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","className":"is-style-button-with-arrow-text","style":{"typography":{"textTransform":"none","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}}} -->
                    <div class="wp-block-button is-style-button-with-arrow-text"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;text-transform:none"><?php esc_html_e('Explore More', 'homelancer'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}}} -->
        <div class="wp-block-column" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"is-style-homelancer-boxshadow","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"backgroundColor":"light-color","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homelancer-boxshadow has-border-color has-border-color-border-color has-light-color-background-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":10009,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"50%"},"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-10009" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"28px","bottom":"0"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size" style="margin-top:28px;margin-bottom:0"><?php esc_html_e('HVAC', 'homelancer'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Reliable HVAC service for heating and cooling, keeping your home comfortable and energy-efficient in every season.', 'homelancer'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"20px"}}}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:20px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","className":"is-style-button-with-arrow-text","style":{"typography":{"textTransform":"none","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}}} -->
                    <div class="wp-block-button is-style-button-with-arrow-text"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;text-transform:none"><?php esc_html_e('Explore More', 'homelancer'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}}} -->
        <div class="wp-block-column" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"is-style-homelancer-boxshadow","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"backgroundColor":"light-color","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homelancer-boxshadow has-border-color has-border-color-border-color has-light-color-background-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":10010,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"50%"},"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-10010" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"28px","bottom":"0"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size" style="margin-top:28px;margin-bottom:0"><?php esc_html_e('Electrical', 'homelancer'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Safe, reliable electrical services for repairs, outlets, lighting and wiring, handled by skilled professionals.', 'homelancer'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"20px"}}}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:20px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","className":"is-style-button-with-arrow-text","style":{"typography":{"textTransform":"none","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}}} -->
                    <div class="wp-block-button is-style-button-with-arrow-text"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;text-transform:none"><?php esc_html_e('Explore More', 'homelancer'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"24px","bottom":"0"},"blockGap":{"left":"24px"}}}} -->
    <div class="wp-block-columns" style="margin-top:24px;margin-bottom:0"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}}} -->
        <div class="wp-block-column" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"is-style-homelancer-boxshadow","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"backgroundColor":"light-color","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homelancer-boxshadow has-border-color has-border-color-border-color has-light-color-background-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":10011,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"50%"},"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[3]) ?>" alt="" class="wp-image-10011" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"28px","bottom":"0"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size" style="margin-top:28px;margin-bottom:0"><?php esc_html_e('Handyman', 'homelancer'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('From repairs and installations to everyday fixes, our handyman service keeps your home running smoothly and safely.', 'homelancer'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"20px"}}}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:20px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","className":"is-style-button-with-arrow-text","style":{"typography":{"textTransform":"none","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}}} -->
                    <div class="wp-block-button is-style-button-with-arrow-text"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;text-transform:none"><?php esc_html_e('Explore More', 'homelancer'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}}} -->
        <div class="wp-block-column" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"is-style-homelancer-boxshadow","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"backgroundColor":"light-color","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homelancer-boxshadow has-border-color has-border-color-border-color has-light-color-background-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":10012,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"50%"},"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[4]) ?>" alt="" class="wp-image-10012" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"28px","bottom":"0"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size" style="margin-top:28px;margin-bottom:0"><?php esc_html_e('Cleaning', 'homelancer'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Thorough home cleaning for kitchens, bathrooms and living spaces, leaving every room fresh, tidy and spotless.', 'homelancer'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"20px"}}}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:20px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","className":"is-style-button-with-arrow-text","style":{"typography":{"textTransform":"none","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}}} -->
                    <div class="wp-block-button is-style-button-with-arrow-text"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;text-transform:none"><?php esc_html_e('Explore More', 'homelancer'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}}} -->
        <div class="wp-block-column" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"is-style-homelancer-boxshadow","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"backgroundColor":"light-color","borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homelancer-boxshadow has-border-color has-border-color-border-color has-light-color-background-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":10013,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"50%"},"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[5]) ?>" alt="" class="wp-image-10013" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"28px","bottom":"0"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size" style="margin-top:28px;margin-bottom:0"><?php esc_html_e('Roofing', 'homelancer'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Dependable roofing services for repairs, maintenance and installation, helping protect your home from the elements.', 'homelancer'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"20px"}}}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:20px"><!-- wp:button {"backgroundColor":"transparent","textColor":"primary","className":"is-style-button-with-arrow-text","style":{"typography":{"textTransform":"none","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}}}} -->
                    <div class="wp-block-button is-style-button-with-arrow-text"><a class="wp-block-button__link has-primary-color has-transparent-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;text-transform:none"><?php esc_html_e('Explore More', 'homelancer'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"40px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:40px"><!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-with-arrow-icon","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"15px","bottom":"15px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"typography":{"fontSize":"18px"}}} -->
        <div class="wp-block-button is-style-button-with-arrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background has-custom-font-size wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:15px;padding-right:28px;padding-bottom:15px;padding-left:28px;font-size:18px"><?php esc_html_e('Explore All Services', 'homelancer'); ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->