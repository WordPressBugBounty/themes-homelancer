<?php

/**
 * Title: Why Choose Us
 * Slug: homelancer/why-choose-us
 * Categories: homelancer-about
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/why-choose-us.jpg',
    $homelancer_url . 'assets/images/badge-check.png',
);
?>
<!-- wp:group {"metadata":{"name":"Why Choose Us","categories":["homelancer-about"]},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"8rem"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"64px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[0]) ?>","id":9719,"dimRatio":0,"customOverlayColor":"#9a918b","isUserOverlayColor":false,"focalPoint":{"x":0.5,"y":0},"minHeight":640,"contentPosition":"bottom right","isDark":false,"sizeSlug":"full","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-right" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:640px"><img class="wp-block-cover__image-background wp-image-9719 size-full" alt="" src="<?php echo esc_url($homelancer_images[0]) ?>" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9a918b"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"200px"}} -->
                    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"24px","bottom":"28px","left":"28px","right":"28px"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-secondary-background-color has-background" style="padding-top:24px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"light-color","fontSize":"xxx-large"} -->
                            <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-style:normal;font-weight:700">68%</h2>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Repeat &amp; Referred Customers', 'homelancer'); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3","fontSize":"14px","textAlign":"left","textTransform":"uppercase","letterSpacing":"10%"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
                <h5 class="wp-block-heading has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:500;letter-spacing:10%;line-height:1.3;text-transform:uppercase"><?php esc_html_e('Why Choose Us', 'homelancer'); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2","fontSize":"48px","textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="font-size:48px;font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e('Reliable Service. Quality Workmanship. No Surprises.', 'homelancer'); ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
                <p style="font-size:18px"><?php esc_html_e('From repairs and maintenance to installations and renovations, get dependable professionals for the work that matters most.', 'homelancer'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"28px","bottom":"0"},"blockGap":"0"},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:28px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":{"top":"0","left":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
                <div class="wp-block-columns" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"style":{"border":{"top":{"width":"0px","style":"none"},"right":{"color":"var:preset|color|border-color","width":"1px"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
                    <div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--border-color);border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"right":"24px","left":"24px","top":"24px","bottom":"24px"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":10170,"width":"30px","height":"30px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-10170" style="object-fit:cover;width:30px;height:30px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"24px"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="margin-top:24px"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}}} -->
                                <h5 class="wp-block-heading" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Experienced Professionals', 'homelancer'); ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p><?php esc_html_e('Skilled specialists who know how to get the job done right.', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"border":{"style":"none","width":"0px"}}} -->
                    <div class="wp-block-column" style="border-style:none;border-width:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"right":"24px","left":"24px","top":"24px","bottom":"24px"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":10170,"width":"30px","height":"30px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-10170" style="object-fit:cover;width:30px;height:30px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"24px"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="margin-top:24px"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}}} -->
                                <h5 class="wp-block-heading" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Fast &amp; Reliable', 'homelancer'); ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p><?php esc_html_e('We respect your time and respond when you need us.', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":{"top":"0","left":"0"}},"border":{"style":"none","width":"0px"}}} -->
                <div class="wp-block-columns" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"style":{"border":{"top":{"width":"0px","style":"none"},"right":{"color":"var:preset|color|border-color","width":"1px"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
                    <div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--border-color);border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"right":"24px","left":"24px","top":"24px","bottom":"24px"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":10170,"width":"30px","height":"30px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-10170" style="object-fit:cover;width:30px;height:30px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"24px"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="margin-top:24px"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}}} -->
                                <h5 class="wp-block-heading" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Transparent Pricing', 'homelancer'); ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p><?php esc_html_e('Clear communication before work begins.', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"style":{"border":{"style":"none","width":"0px"}}} -->
                    <div class="wp-block-column" style="border-style:none;border-width:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"right":"24px","left":"24px","top":"24px","bottom":"24px"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":10170,"width":"30px","height":"30px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-10170" style="object-fit:cover;width:30px;height:30px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"24px"}}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="margin-top:24px"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}}} -->
                                <h5 class="wp-block-heading" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Satisfaction Guaranteed', 'homelancer'); ?></h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p><?php esc_html_e('We stand behind our work with quality you can trust, always.', 'homelancer'); ?></p>
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

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"28px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px"><!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-with-arrow-icon","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"15px","bottom":"15px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"typography":{"fontSize":"18px"}}} -->
                <div class="wp-block-button is-style-button-with-arrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background has-custom-font-size wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:15px;padding-right:28px;padding-bottom:15px;padding-left:28px;font-size:18px"><?php esc_html_e('Explore More', 'homelancer'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->