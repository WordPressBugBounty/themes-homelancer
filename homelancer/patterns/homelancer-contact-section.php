<?php

/**
 * Title: Contact Form Section pro
 * Slug: homelancer/homelancer-contact-section
 * Categories: ct-homelancer-patterns-pro
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/p5.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"PRO: Contact Section with Form","description":"Contact Section","categories":["homelancer-contact"]},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"7rem","bottom":"384px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1040px"}} -->
    <div class="wp-block-group has-primary-background-color has-background" style="padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:384px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3","fontSize":"64px","textAlign":"center"}},"textColor":"light-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:64px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Feel Free to Contact Us Anytime — We’re Always Here to Support You', 'homelancer'); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textAlign":"center"}},"textColor":"light-color"} -->
        <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'homelancer'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"categories":["homelancer-contact"],"name":"Contact with Form"},"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"is-style-homelancer-overlap-style","style":{"spacing":{"margin":{"bottom":"0px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"width":"1px"}},"backgroundColor":"background","borderColor":"border-color","layout":{"type":"constrained","contentSize":"1260px"}} -->
        <div class="wp-block-group is-style-homelancer-overlap-style has-border-color has-border-color-border-color has-background-background-color has-background" style="border-width:1px;margin-bottom:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top"} -->
                <div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":11094,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                    <figure class="wp-block-image size-full" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-11094" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"top","width":""} -->
                <div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"padding":{"top":"39px","bottom":"39px","left":"64px","right":"64px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:39px;padding-right:64px;padding-bottom:39px;padding-left:64px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0px","bottom":"16px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="margin-top:0px;margin-bottom:16px"><!-- wp:heading -->
                            <h2 class="wp-block-heading"><?php esc_html_e('Tell Us What You Need', 'homelancer'); ?></h2>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'homelancer'); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:contact-form-7/contact-form-selector {"id":506,"hash":"b5f65b7","title":"Contact form 1"} -->
                        <div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="b5f65b7" title="Contact form 1"]</div>
                        <!-- /wp:contact-form-7/contact-form-selector -->
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
</div>
<!-- /wp:group -->