<?php

/**
 * Title: Hero
 * Slug: homelancer/hero-2
 * Categories: homelancer-hero
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/hero-image.jpg',
    $homelancer_url . 'assets/images/rating_star.png',
);
?>
<!-- wp:group {"metadata":{"name":"Hero","categories":["homelancer-hero"]},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[0]) ?>","id":9624,"dimRatio":80,"isUserOverlayColor":true,"minHeight":780,"gradient":"dark-gradient","contentPosition":"bottom center","sizeSlug":"large","className":"is-style-homelancer-cover-unset-overflow","style":{"color":{"duotone":"var:preset|duotone|mixed-tone"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-homelancer-cover-unset-overflow" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40);min-height:780px"><img class="wp-block-cover__image-background wp-image-9624 size-large" alt="" src="<?php echo esc_url($homelancer_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-gradient-gradient-background"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"60%","style":{"spacing":{"padding":{"bottom":"120px"}}}} -->
                <div class="wp-block-column is-vertically-aligned-bottom" style="padding-bottom:120px;flex-basis:60%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:group {"style":{"border":{"color":"#ffffff24","width":"1px","radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"1px","bottom":"4px","left":"12px","right":"12px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group has-border-color" style="border-color:#ffffff24;border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:1px;padding-right:12px;padding-bottom:4px;padding-left:12px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:image {"id":9707,"width":"100px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"4px","left":"0","right":"0"}},"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                                <figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-right:0;margin-bottom:4px;margin-left:0"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-9707" style="width:100px;height:auto" /></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"4px","bottom":"0","left":"0","right":"0"}}}} -->
                            <p style="margin-top:4px;margin-right:0;margin-bottom:0;margin-left:0;line-height:1"><?php esc_html_e('5-Star Service · Trusted by Homeowners', 'homelancer'); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2","fontSize":"84px"},"spacing":{"margin":{"top":"10px","bottom":"0"}}}} -->
                    <h1 class="wp-block-heading" style="margin-top:10px;margin-bottom:0;font-size:84px;font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Professional Home Services. Done Right, Every Time.', 'homelancer'); ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                    <p class="has-light-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('From plumbing and HVAC to electrical, cleaning and repairs, build a professional website that helps local customers find your services and get in touch.', 'homelancer'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|60"}}}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-with-arrow-icon","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"15px","bottom":"15px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"typography":{"fontSize":"18px"}}} -->
                        <div class="wp-block-button is-style-button-with-arrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background has-custom-font-size wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:15px;padding-right:40px;padding-bottom:15px;padding-left:40px;font-size:18px"><?php esc_html_e('Get A Free Quote', 'homelancer'); ?></a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-hover-secondary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"left":"32px","right":"32px","top":"14px","bottom":"14px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"1px"},"typography":{"fontSize":"18px"}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px;font-size:18px"><?php esc_html_e('Explore Our Services', 'homelancer'); ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"44px"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                    <div class="wp-block-group" style="margin-top:44px"><!-- wp:list {"className":"is-style-list-style-check-simple","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                        <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-check-simple"><!-- wp:list-item {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                            <li class="has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Licensed & Insured', 'homelancer'); ?></li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->

                        <!-- wp:list {"className":"is-style-list-style-check-simple","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
                        <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-check-simple"><!-- wp:list-item {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                            <li class="has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Experienced Professionals', 'homelancer'); ?></li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->

                        <!-- wp:list {"className":"is-style-list-style-check-simple","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
                        <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-check-simple"><!-- wp:list-item {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                            <li class="has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Quality Guaranteed', 'homelancer'); ?></li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"bottom"} -->
                <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"className":"homelancer-hero-form","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"blockGap":"0","padding":{"top":"20px","bottom":"4px","left":"32px","right":"32px"}}},"backgroundColor":"background","textColor":"heading-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group homelancer-hero-form has-heading-color-color has-background-background-color has-text-color has-background has-link-color" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:20px;padding-right:32px;padding-bottom:4px;padding-left:32px"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                        <h3 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e('Get your free quote', 'homelancer'); ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Tell us what you need and we\'ll get back to you shortly.', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"16px","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="margin-top:16px;margin-bottom:0"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                            <h5 class="wp-block-heading" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:16px;font-style:normal;font-weight:600"><?php esc_html_e('What service do you need?', 'homelancer'); ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:contact-form-7/contact-form-selector {"id":9635,"hash":"595bd50","title":"Quote Form","className":"homelancer-form-2"} -->
                            <div class="wp-block-contact-form-7-contact-form-selector homelancer-form-2">[contact-form-7 id="595bd50" title="Quote Form"]</div>
                            <!-- /wp:contact-form-7/contact-form-selector -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->