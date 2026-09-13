<?php

/**
 * Title: Contact Info Box pro
 * Slug: homelancer/homelancer-contactinfo-box
 * Categories: ct-homelancer-patterns-pro
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/icon_map_full.png',
    $homelancer_url . 'assets/images/icon_call_full.png',
    $homelancer_url . 'assets/images/icon_mail_full.png',
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"8rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center","fontSize":"64px","lineHeight":"1.2"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:64px;line-height:1.2"><?php esc_html_e('We look forward to hearing from you', 'homelancer'); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
        <p class="has-text-align-center"><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement, and well-being of a household.', 'homelancer'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-homelancer-boxshadow","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homelancer-boxshadow has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":8175,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|secondary-white"},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-8175" style="border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;object-fit:cover;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center","fontSize":"28px"}}} -->
                    <h4 class="wp-block-heading has-text-align-center" style="font-size:28px"><?php esc_html_e('Visit our location', 'homelancer'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do', 'homelancer'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center","fontSize":"20px"}}} -->
                    <h4 class="wp-block-heading has-text-align-center" style="font-size:20px"><?php esc_html_e('2345-City Mall, New York', 'homelancer'); ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-homelancer-boxshadow","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homelancer-boxshadow has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":8173,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|secondary-white"},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-8173" style="border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;object-fit:cover;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center","fontSize":"28px"}}} -->
                    <h4 class="wp-block-heading has-text-align-center" style="font-size:28px"><?php esc_html_e('Give us a Call', 'homelancer'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do', 'homelancer'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center","fontSize":"20px"}}} -->
                    <h4 class="wp-block-heading has-text-align-center" style="font-size:20px">+1 (000) 012-3456</h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-homelancer-boxshadow","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homelancer-boxshadow has-border-color has-border-color-border-color" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":8174,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|secondary-white"},"border":{"radius":{"topLeft":"80px","topRight":"80px","bottomLeft":"80px","bottomRight":"80px"}}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-8174" style="border-top-left-radius:80px;border-top-right-radius:80px;border-bottom-left-radius:80px;border-bottom-right-radius:80px;object-fit:cover;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center","fontSize":"28px"}}} -->
                    <h4 class="wp-block-heading has-text-align-center" style="font-size:28px"><?php esc_html_e('Send us a message', 'homelancer'); ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do', 'homelancer'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center","fontSize":"20px"}}} -->
                    <h4 class="wp-block-heading has-text-align-center" style="font-size:20px"><?php esc_html_e('sample@example.com', 'homelancer'); ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"64px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
    <div class="wp-block-group" style="margin-top:64px"><!-- wp:heading {"level":5} -->
        <h5 class="wp-block-heading"><?php esc_html_e('Find us on Social Media', 'homelancer'); ?></h5>
        <!-- /wp:heading -->

        <!-- wp:social-links {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
        <ul class="wp-block-social-links"><!-- wp:social-link {"url":"#","service":"youtube"} /-->

            <!-- wp:social-link {"url":"#","service":"x"} /-->

            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

            <!-- wp:social-link {"url":"#","service":"facebook"} /-->

            <!-- wp:social-link {"url":"#","service":"yelp"} /-->

            <!-- wp:social-link {"url":"#","service":"instagram"} /-->
        </ul>
        <!-- /wp:social-links -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->