<?php

/**
 * Title: Footer with CTA
 * Slug: homelancer/footer-with-cta
 * Categories: homelancer-footer
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/cta_bg.jpg',
    $homelancer_url . 'assets/images/homelancer.png',
);
?>
<!-- wp:group {"metadata":{"patternName":"homelancer/footer-default","name":"Footer Default","categories":["homelancer-footer"]},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"homelancer-footer","style":{"spacing":{"padding":{"top":"0px","right":"0","left":"0","bottom":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group homelancer-footer has-primary-background-color has-background" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[0]) ?>","id":9905,"isUserOverlayColor":true,"gradient":"dark-gradient","sizeSlug":"large","style":{"color":{"duotone":"var:preset|duotone|mixed-tone"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
        <div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><img class="wp-block-cover__image-background wp-image-9905 size-large" alt="" src="<?php echo esc_url($homelancer_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-gradient-gradient-background"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"640px"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"64px","letterSpacing":"-1px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"700"}}} -->
                        <h1 class="wp-block-heading" style="font-size:64px;font-style:normal;font-weight:700;letter-spacing:-1px;line-height:1.3"><?php esc_html_e('Ready to Get Your Home Project Started?', 'homelancer'); ?></h1>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Tell us what you need and let our experienced team take care of the rest.', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:buttons {"align":"full","className":"is-style-button-transofom-on-hover","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"40px"}}},"layout":{"type":"flex","justifyContent":"stretch","orientation":"vertical"}} -->
                        <div class="wp-block-buttons alignfull is-style-button-transofom-on-hover" style="margin-top:40px"><!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-with-arrow-icon","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"15px","bottom":"15px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"typography":{"fontSize":"18px"}}} -->
                            <div class="wp-block-button is-style-button-with-arrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background has-custom-font-size wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:15px;padding-right:28px;padding-bottom:15px;padding-left:28px;font-size:18px"><?php esc_html_e('Get A Free Quote', 'homelancer'); ?></a></div>
                            <!-- /wp:button -->

                            <!-- wp:button {"backgroundColor":"light-color","textColor":"heading-color","className":"is-style-button-with-icon-call","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"15px","bottom":"15px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"typography":{"fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}}} -->
                            <div class="wp-block-button is-style-button-with-icon-call"><a class="wp-block-button__link has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:15px;padding-right:28px;padding-bottom:15px;padding-left:28px;font-size:18px"><?php esc_html_e('Call Us +1 (000) 012-3456', 'homelancer'); ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->

        <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"64px","bottom":"64px"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|primary-light-shade","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
        <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--primary-light-shade);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:64px;padding-right:var(--wp--preset--spacing--40);padding-bottom:64px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"left":"48px"}}}} -->
            <div class="wp-block-columns" style="margin-top:0px"><!-- wp:column {"width":"35%"} -->
                <div class="wp-block-column" style="flex-basis:35%"><!-- wp:group {"layout":{"type":"constrained","contentSize":"340px","justifyContent":"left"}} -->
                    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:image {"id":9591,"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-9591" style="object-fit:contain;width:40px;height:40px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:site-title {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-large"} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('HomeLancer helps home service businesses build a professional online presence with a modern WordPress theme designed to win trust and grow locally.', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","iconBackgroundColor":"primary-light-shade","iconBackgroundColorValue":"#1D4941","className":"is-style-default","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"bottom":"0"}}}} -->
                        <ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default" style="margin-bottom:0"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                            <!-- wp:social-link {"url":"#","service":"vk"} /-->

                            <!-- wp:social-link {"url":"#","service":"x"} /-->

                            <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"homelancer-footer-list","style":{"spacing":{"padding":{"right":"0px","left":"0px"}},"border":{"left":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"}}}} -->
                <div class="wp-block-column homelancer-footer-list" style="border-right-style:none;border-right-width:0px;border-left-style:none;border-left-width:0px;padding-right:0px;padding-left:0px"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('About', 'homelancer'); ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"24px","bottom":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none","fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}}} -->
                    <ul style="margin-top:24px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px;line-height:1.5;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color"><!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('About Us', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Policy', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Terms and Conditions', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Career', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Blog', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Contact Us', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"homelancer-footer-list","style":{"spacing":{"padding":{"right":"0px","left":"0px"}},"border":{"left":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"}}}} -->
                <div class="wp-block-column homelancer-footer-list" style="border-right-style:none;border-right-width:0px;border-left-style:none;border-left-width:0px;padding-right:0px;padding-left:0px"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('Services', 'homelancer'); ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"24px","bottom":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none","fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}}} -->
                    <ul style="margin-top:24px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px;line-height:1.5;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color"><!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Gardening Services', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('HVAC Services', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Plumbing Services', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Electrician Services', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Home Repair', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Cleaning Services', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Painting Services', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Drywall and Wall Repair', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"homelancer-footer-list","style":{"spacing":{"blockGap":"0"}}} -->
                <div class="wp-block-column homelancer-footer-list"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('Contact Us', 'homelancer'); ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"24px","bottom":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none","fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}}} -->
                    <ul style="margin-top:24px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px;line-height:1.5;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color"><!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('14th Street, Caltech, New Jersey, Alabama', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#">+1 (000) 012-3456</a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('email@example.com', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->

                    <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"28px"}}},"textColor":"light-color","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-large-font-size" style="margin-top:28px"><?php esc_html_e('Business Hours', 'homelancer'); ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"20px","bottom":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none","fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}}} -->
                    <ul style="margin-top:20px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px;line-height:1.5;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color"><!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Monday-Friday : 10:00AM - 6:00PM', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Sunday-Monday : Closed', 'homelancer'); ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0px","bottom":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
        <div class="wp-block-group" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:0px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"0px","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|primary-light-shade","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--primary-light-shade);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:0;padding-bottom:28px;padding-left:0px"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"normal"} -->
                <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-normal-font-size" style="line-height:1.5"><?php esc_html_e('Proudly powered by WordPress | Theme HomeLancer by CozyThemes', 'homelancer'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"normal"} -->
                    <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-normal-font-size" style="line-height:1.5"><?php esc_html_e('Terms and conditions', 'homelancer'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"normal"} -->
                    <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-normal-font-size" style="line-height:1.5"><?php esc_html_e('Privacy Policy', 'homelancer'); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"secondary","textColor":"foregound-alt","className":"homelancer-scrollto-top is-style-button-hover-primary-bgcolor","style":{"border":{"radius":"50%"}}} -->
        <div class="wp-block-button homelancer-scrollto-top is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-secondary-background-color has-text-color has-background wp-element-button" style="border-radius:50%"><?php esc_html_e('Scroll to Top', 'homelancer'); ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->