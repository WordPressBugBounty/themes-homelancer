<?php

/**
 * Title: Team Grid 2 pro
 * Slug: homelancer/homelancer-team-grid-2
 * Categories: ct-homelancer-patterns-pro
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/team_21.jpg',
    $homelancer_url . 'assets/images/team_22.jpg',
    $homelancer_url . 'assets/images/team_23.jpg',
    $homelancer_url . 'assets/images/badge-check.png'
);
?>
<!-- wp:group {"metadata":{"categories":["ct-homelancer-patterns-pro"],"name":"Team Grid 2"},"align":"full","style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:cozy-block/teams {"blockClientId":"559d519b-0888-48be-b6cf-875300318e81"} -->
    <div class="cozy-block-teams display-grid   hover-show" id="cozyBlock_559d519b_0888_48be_b6cf_875300318e81">
        <div class="cozy-block-grid-wrapper "><!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"className":"homelancer-hover-box is-style-homelancer-boxshadow-medium","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group homelancer-hover-box is-style-homelancer-boxshadow-medium has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                    <figure class="wp-block-image alignwide size-full has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px","textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                                <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('James Wilson', 'homelancer'); ?></h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"typography":{"textAlign":"left"}}} -->
                                <p class="has-text-align-left"><?php esc_html_e('Lead Plumber', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:social-links {"iconColor":"primary","iconColorValue":"#123932","iconBackgroundColor":"foreground-alt","iconBackgroundColorValue":"#EBEBEB","className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                            <ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default" style="margin-top:0;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"},"padding":{"top":"16px","bottom":"0"},"margin":{"top":"20px"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
                        <div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:20px;padding-top:16px;padding-bottom:0"><!-- wp:column {"width":"30px"} -->
                            <div class="wp-block-column" style="flex-basis:30px"><!-- wp:image {"id":10170,"width":"24px","height":"24px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"},"spacing":{"margin":{"top":"3px","bottom":"0"}}}} -->
                                <figure class="wp-block-image size-full is-resized" style="margin-top:3px;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[3]) ?>" alt="" class="wp-image-10170" style="object-fit:cover;width:24px;height:24px" /></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"width":""} -->
                            <div class="wp-block-column"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"textAlign":"left"}}} -->
                                <p class="has-text-align-left" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e('15+ years of experience in residential and commercial plumbing', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"className":"homelancer-hover-box is-style-homelancer-boxshadow-medium","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group homelancer-hover-box is-style-homelancer-boxshadow-medium has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                    <figure class="wp-block-image alignwide size-full has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px","textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                                <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('James Wilson', 'homelancer'); ?></h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"typography":{"textAlign":"left"}}} -->
                                <p class="has-text-align-left"><?php esc_html_e('Lead Plumber', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:social-links {"iconColor":"primary","iconColorValue":"#123932","iconBackgroundColor":"foreground-alt","iconBackgroundColorValue":"#EBEBEB","className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                            <ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default" style="margin-top:0;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"},"padding":{"top":"16px","bottom":"0"},"margin":{"top":"20px"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
                        <div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:20px;padding-top:16px;padding-bottom:0"><!-- wp:column {"width":"30px"} -->
                            <div class="wp-block-column" style="flex-basis:30px"><!-- wp:image {"id":10170,"width":"24px","height":"24px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"},"spacing":{"margin":{"top":"3px","bottom":"0"}}}} -->
                                <figure class="wp-block-image size-full is-resized" style="margin-top:3px;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[3]) ?>" alt="" class="wp-image-10170" style="object-fit:cover;width:24px;height:24px" /></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"width":""} -->
                            <div class="wp-block-column"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"textAlign":"left"}}} -->
                                <p class="has-text-align-left" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e('15+ years of experience in residential and commercial plumbing', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"className":"homelancer-hover-box is-style-homelancer-boxshadow-medium","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group homelancer-hover-box is-style-homelancer-boxshadow-medium has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                    <figure class="wp-block-image alignwide size-full has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px","textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                                <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('James Wilson', 'homelancer'); ?></h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"typography":{"textAlign":"left"}}} -->
                                <p class="has-text-align-left"><?php esc_html_e('Lead Plumber', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:social-links {"iconColor":"primary","iconColorValue":"#123932","iconBackgroundColor":"foreground-alt","iconBackgroundColorValue":"#EBEBEB","className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                            <ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default" style="margin-top:0;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"},"padding":{"top":"16px","bottom":"0"},"margin":{"top":"20px"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
                        <div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:20px;padding-top:16px;padding-bottom:0"><!-- wp:column {"width":"30px"} -->
                            <div class="wp-block-column" style="flex-basis:30px"><!-- wp:image {"id":10170,"width":"24px","height":"24px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"},"spacing":{"margin":{"top":"3px","bottom":"0"}}}} -->
                                <figure class="wp-block-image size-full is-resized" style="margin-top:3px;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[3]) ?>" alt="" class="wp-image-10170" style="object-fit:cover;width:24px;height:24px" /></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"width":""} -->
                            <div class="wp-block-column"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"textAlign":"left"}}} -->
                                <p class="has-text-align-left" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e('15+ years of experience in residential and commercial plumbing', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"className":"homelancer-hover-box is-style-homelancer-boxshadow-medium","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group homelancer-hover-box is-style-homelancer-boxshadow-medium has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                    <figure class="wp-block-image alignwide size-full has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px","textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                                <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('James Wilson', 'homelancer'); ?></h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"typography":{"textAlign":"left"}}} -->
                                <p class="has-text-align-left"><?php esc_html_e('Lead Plumber', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:social-links {"iconColor":"primary","iconColorValue":"#123932","iconBackgroundColor":"foreground-alt","iconBackgroundColorValue":"#EBEBEB","className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                            <ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default" style="margin-top:0;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"x"} /--></ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"},"padding":{"top":"16px","bottom":"0"},"margin":{"top":"20px"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
                        <div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:20px;padding-top:16px;padding-bottom:0"><!-- wp:column {"width":"30px"} -->
                            <div class="wp-block-column" style="flex-basis:30px"><!-- wp:image {"id":10170,"width":"24px","height":"24px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"},"spacing":{"margin":{"top":"3px","bottom":"0"}}}} -->
                                <figure class="wp-block-image size-full is-resized" style="margin-top:3px;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[3]) ?>" alt="" class="wp-image-10170" style="object-fit:cover;width:24px;height:24px" /></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"width":""} -->
                            <div class="wp-block-column"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"textAlign":"left"}}} -->
                                <p class="has-text-align-left" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e('15+ years of experience in residential and commercial plumbing', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"className":"homelancer-hover-box is-style-homelancer-boxshadow-medium","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group homelancer-hover-box is-style-homelancer-boxshadow-medium has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                    <figure class="wp-block-image alignwide size-full has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px","textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                                <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('James Wilson', 'homelancer'); ?></h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"typography":{"textAlign":"left"}}} -->
                                <p class="has-text-align-left"><?php esc_html_e('Lead Plumber', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:social-links {"iconColor":"primary","iconColorValue":"#123932","iconBackgroundColor":"foreground-alt","iconBackgroundColorValue":"#EBEBEB","className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                            <ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default" style="margin-top:0;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"},"padding":{"top":"16px","bottom":"0"},"margin":{"top":"20px"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
                        <div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:20px;padding-top:16px;padding-bottom:0"><!-- wp:column {"width":"30px"} -->
                            <div class="wp-block-column" style="flex-basis:30px"><!-- wp:image {"id":10170,"width":"24px","height":"24px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"},"spacing":{"margin":{"top":"3px","bottom":"0"}}}} -->
                                <figure class="wp-block-image size-full is-resized" style="margin-top:3px;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[3]) ?>" alt="" class="wp-image-10170" style="object-fit:cover;width:24px;height:24px" /></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"width":""} -->
                            <div class="wp-block-column"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"textAlign":"left"}}} -->
                                <p class="has-text-align-left" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e('15+ years of experience in residential and commercial plumbing', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->

            <!-- wp:cozy-block/grid -->
            <div class="cozy-block-grid"><!-- wp:group {"className":"homelancer-hover-box is-style-homelancer-boxshadow-medium","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group homelancer-hover-box is-style-homelancer-boxshadow-medium has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                    <figure class="wp-block-image alignwide size-full has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px","textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                                <h3 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('James Wilson', 'homelancer'); ?></h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"style":{"typography":{"textAlign":"left"}}} -->
                                <p class="has-text-align-left"><?php esc_html_e('Lead Plumber', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:social-links {"iconColor":"primary","iconColorValue":"#123932","iconBackgroundColor":"foreground-alt","iconBackgroundColorValue":"#EBEBEB","className":"is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                            <ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default" style="margin-top:0;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"yelp"} /--></ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"},"padding":{"top":"16px","bottom":"0"},"margin":{"top":"20px"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
                        <div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:20px;padding-top:16px;padding-bottom:0"><!-- wp:column {"width":"30px"} -->
                            <div class="wp-block-column" style="flex-basis:30px"><!-- wp:image {"id":10170,"width":"24px","height":"24px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"},"spacing":{"margin":{"top":"3px","bottom":"0"}}}} -->
                                <figure class="wp-block-image size-full is-resized" style="margin-top:3px;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[3]) ?>" alt="" class="wp-image-10170" style="object-fit:cover;width:24px;height:24px" /></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"width":""} -->
                            <div class="wp-block-column"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"textAlign":"left"}}} -->
                                <p class="has-text-align-left" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e('15+ years of experience in residential and commercial plumbing', 'homelancer'); ?></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:cozy-block/grid -->
        </div>
    </div>
    <!-- /wp:cozy-block/teams -->
</div>
<!-- /wp:group -->