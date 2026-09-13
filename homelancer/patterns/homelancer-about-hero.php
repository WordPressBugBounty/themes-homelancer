<?php

/**
 * Title: About Hero PRO
 * Slug: homelancer/homelancer-about-hero
 * Categories: ct-homelancer-patterns-pro
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/hero.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"PRO: Hero Section for About","description":"Hero Section for Homelancer pro","categories":["homelancer-hero"]},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"310px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:310px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"margin":{"bottom":"60px"},"blockGap":{"left":"120px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-bottom" style="margin-bottom:60px"><!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
        <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color","fontSize":"giga"} -->
            <h1 class="wp-block-heading has-light-color-color has-text-color has-link-color has-giga-font-size" style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Premium Home Solutions, Reliable Care', 'homelancer'); ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"bottom"} -->
        <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
            <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas that emphasize cleanliness,', 'homelancer'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px"}}}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px"><!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-with-arrow-icon","style":{"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"left":"24px","right":"24px","top":"16px","bottom":"16px"}}},"borderColor":"secondary"} -->
                <div class="wp-block-button is-style-button-with-arrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background has-border-color has-secondary-border-color wp-element-button" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><?php esc_html_e('Schedule an Appointment', 'homelancer'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"is-style-homelancer-overlap-style","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group is-style-homelancer-overlap-style"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[0]) ?>","id":1649,"dimRatio":0,"customOverlayColor":"#737373","isUserOverlayColor":false,"minHeight":580,"sizeSlug":"large","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-cover" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:580px"><img class="wp-block-cover__image-background wp-image-1649 size-large" alt="" src="<?php echo esc_url($homelancer_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#737373"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                <p class="has-text-align-center has-large-font-size"></p>
                <!-- /wp:paragraph -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->