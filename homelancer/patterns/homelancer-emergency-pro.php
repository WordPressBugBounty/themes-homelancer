<?php

/**
 * Title: Emergency Service pro
 * Slug: homelancer/homelancer-emergency-pro
 * Categories: homelancer-pro
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/badge-check.png',
    $homelancer_url . 'assets/images/featured_emergency.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"45%"} -->
        <div class="wp-block-column" style="flex-basis:45%"><!-- wp:image {"id":10109,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-10109" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3","fontSize":"14px","textAlign":"left","textTransform":"uppercase","letterSpacing":"10%"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
                <h5 class="wp-block-heading has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:500;letter-spacing:10%;line-height:1.3;text-transform:uppercase"><?php esc_html_e('24/7 emergency line', 'homelancer'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2","fontSize":"48px","textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <h1 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color" style="font-size:48px;font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e('Home Services Emergency? We Are Ready 24/7', 'homelancer'); ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('HomeLancer started as a two-person crew taking on neighborhood repairs. Two decades later we\'re a full home-services team — same standards, same people answering the phone.', 'homelancer'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"48px"},"blockGap":{"top":"var:preset|spacing|30","left":"16px"}}}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:48px"><!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-with-arrow-icon","style":{"typography":{"fontSize":"18px"},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}}},"borderColor":"secondary"} -->
                    <div class="wp-block-button is-style-button-with-arrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background has-border-color has-secondary-border-color has-custom-font-size wp-element-button" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px;font-size:18px"><?php esc_html_e('Request Emergency Service', 'homelancer'); ?></a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"backgroundColor":"light-color","textColor":"heading-color","className":"is-style-button-with-icon-call","style":{"typography":{"fontSize":"18px"},"border":{"width":"0px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"style":"none"},"spacing":{"padding":{"left":"24px","right":"24px","top":"15px","bottom":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}}} -->
                    <div class="wp-block-button is-style-button-with-icon-call"><a class="wp-block-button__link has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:15px;padding-right:24px;padding-bottom:15px;padding-left:24px;font-size:18px"><?php esc_html_e('Call us +1 (000) 012-3456', 'homelancer'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->

                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"32px"},"margin":{"top":"40px","bottom":"0"}}}} -->
                <div class="wp-block-columns" style="margin-top:40px;margin-bottom:0"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":10170,"width":"30px","height":"30px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-10170" style="object-fit:cover;width:30px;height:30px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"24px"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="margin-top:24px"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                                <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Fast Response', 'homelancer'); ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                                <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Dispatch in minutes, 365 days a year', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":10170,"width":"30px","height":"30px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-10170" style="object-fit:cover;width:30px;height:30px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"24px"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="margin-top:24px"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                                <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Experienced Technicians', 'homelancer'); ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                                <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Licensed, insured, drug-tested', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":10170,"width":"30px","height":"30px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-10170" style="object-fit:cover;width:30px;height:30px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"24px"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="margin-top:24px"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                                <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Available Anytime', 'homelancer'); ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                                <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Nights, weekends and holidays', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
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