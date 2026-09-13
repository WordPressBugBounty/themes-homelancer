<?php

/**
 * Title: Alternate Content Pro
 * Slug: homelancer/homelancer-alternate-content
 * Categories: ct-homelancer-patterns-pro
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/about.jpg',
    $homelancer_url . 'assets/images/p5.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"PRO: Alternate Content Section","description":"Contact Section","categories":["homelancer-about"]},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"0rem","top":"5rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-top:5rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:0rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"84px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
    <div class="wp-block-group" style="margin-bottom:84px"><!-- wp:heading {"level":5,"style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"600","textAlign":"center","fontSize":"16px","textTransform":"uppercase","letterSpacing":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
        <h5 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-link-color" style="font-size:16px;font-style:normal;font-weight:600;letter-spacing:2px;line-height:1.3;text-transform:uppercase"><?php esc_html_e('Our Company', 'homelancer'); ?></h5>
        <!-- /wp:heading -->

        <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"600","textAlign":"center"}},"fontSize":"giga"} -->
        <h1 class="wp-block-heading has-text-align-center has-giga-font-size" style="font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Making Your Home Service Needs a Reality', 'homelancer'); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
        <p class="has-text-align-center"><?php esc_html_e('From homes and apartments to commercial spaces and industrial facilities, we deliver dependable solutions tailored to every property’s needs.', 'homelancer'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[0]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":580,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:580px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"fontSize":"jumbo"} -->
            <h2 class="wp-block-heading has-jumbo-font-size" style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Our Mission', 'homelancer'); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement, and well-being of a household. These services can be essential for homeowners to ensure the smooth functioning and comfort of their homes.', 'homelancer'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:list {"className":"is-style-list-style-check-circle-fade-primary","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
            <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-check-circle-fade-primary"><!-- wp:list-item -->
                <li><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement,', 'homelancer'); ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement,', 'homelancer'); ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement,', 'homelancer'); ?></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"40px"}}}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:40px"><!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-with-arrow-icon","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"16px","bottom":"16px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
                <div class="wp-block-button is-style-button-with-arrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px"><?php esc_html_e('Explore More', 'homelancer'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"100px"},"margin":{"top":"84px"}}}} -->
    <div class="wp-block-columns" style="margin-top:84px"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"fontSize":"jumbo"} -->
            <h2 class="wp-block-heading has-jumbo-font-size" style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Our Vision', 'homelancer'); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement, and well-being of a household. These services can be essential for homeowners to ensure the smooth functioning and comfort of their homes.', 'homelancer'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:list {"className":"is-style-list-style-check-circle-fade-primary","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
            <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" class="wp-block-list is-style-list-style-check-circle-fade-primary"><!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement', 'homelancer'); ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement', 'homelancer'); ?></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement', 'homelancer'); ?></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"40px"}}}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:40px"><!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-with-arrow-icon","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"16px","bottom":"16px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
                <div class="wp-block-button is-style-button-with-arrow-icon"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px"><?php esc_html_e('Explore More', 'homelancer'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[1]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":580,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;min-height:580px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0px"},"margin":{"top":"64px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
    <div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:64px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"style":{"border":{"top":{"width":"0px","style":"none"},"right":{"color":"var:preset|color|border-color","width":"1px"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
        <div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--border-color);border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","top":"64px","bottom":"64px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:64px;padding-right:0;padding-bottom:64px"><!-- wp:cozy-block/counter {"blockClientId":"7c40b540-49ec-477c-91fd-a38e4a13741f","suffix":{"enabled":true,"value":"+"},"endNumber":"25","blockStyle":{"layout":"row","gap":"5px"},"styles":{"font":{"family":"","weight":"600"},"desktop":{"font":{"size":"54px"}},"letterCase":"","textDecoration":"","lineHeight":"","letterSpacing":"","color":"#123932"},"labelStyles":{"font":{"family":"","weight":"600"},"desktop":{"font":{"size":"50px"}},"letterCase":"","textDecoration":"","lineHeight":"","letterSpacing":"","color":""}} -->
                <div class="cozy-block-counter" id="cozyBlock_7c40b540_49ec_477c_91fd_a38e4a13741f"><span>0</span></div>
                <!-- /wp:cozy-block/counter -->

                <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center","fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                <h4 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e('Years in Industry', 'homelancer'); ?></h4>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"border":{"top":{"width":"0px","style":"none"},"right":{"color":"var:preset|color|border-color","width":"1px"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
        <div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--border-color);border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","top":"64px","bottom":"64px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:64px;padding-right:0;padding-bottom:64px"><!-- wp:cozy-block/counter {"blockClientId":"6aac7235-73ab-4ea0-95e0-9178fd52bfcb","suffix":{"enabled":true,"value":"+"},"endNumber":"200","blockStyle":{"layout":"row","gap":"5px"},"styles":{"font":{"family":"","weight":"600"},"desktop":{"font":{"size":"54px"}},"letterCase":"","textDecoration":"","lineHeight":"","letterSpacing":"","color":"#123932"},"labelStyles":{"font":{"family":"","weight":"600"},"desktop":{"font":{"size":"50px"}},"letterCase":"","textDecoration":"","lineHeight":"","letterSpacing":"","color":""}} -->
                <div class="cozy-block-counter" id="cozyBlock_6aac7235_73ab_4ea0_95e0_9178fd52bfcb"><span>0</span></div>
                <!-- /wp:cozy-block/counter -->

                <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center","fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                <h4 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e('Experts Team', 'homelancer'); ?></h4>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"border":{"top":{"width":"0px","style":"none"},"right":{"color":"var:preset|color|border-color","width":"1px"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}}} -->
        <div class="wp-block-column" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--border-color);border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","top":"64px","bottom":"64px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:64px;padding-right:0;padding-bottom:64px"><!-- wp:cozy-block/counter {"blockClientId":"6c19048a-eb59-409e-9b12-0a99b2dcbb2f","suffix":{"enabled":true,"value":"+"},"endNumber":"2000","blockStyle":{"layout":"row","gap":"5px"},"styles":{"font":{"family":"","weight":"600"},"desktop":{"font":{"size":"54px"}},"letterCase":"","textDecoration":"","lineHeight":"","letterSpacing":"","color":"#123932"},"labelStyles":{"font":{"family":"","weight":"600"},"desktop":{"font":{"size":"50px"}},"letterCase":"","textDecoration":"","lineHeight":"","letterSpacing":"","color":""}} -->
                <div class="cozy-block-counter" id="cozyBlock_6c19048a_eb59_409e_9b12_0a99b2dcbb2f"><span>0</span></div>
                <!-- /wp:cozy-block/counter -->

                <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center","fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                <h4 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e('Happy Customers', 'homelancer'); ?></h4>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"border":{"width":"0px","style":"none"}}} -->
        <div class="wp-block-column" style="border-style:none;border-width:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","top":"64px","bottom":"64px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:64px;padding-right:0;padding-bottom:64px"><!-- wp:cozy-block/counter {"blockClientId":"da983ad0-852e-45c5-a6bf-c57c4b7825cf","suffix":{"enabled":true,"value":"k+"},"endNumber":"20","blockStyle":{"layout":"row","gap":"5px"},"styles":{"font":{"family":"","weight":"600"},"desktop":{"font":{"size":"54px"}},"letterCase":"","textDecoration":"","lineHeight":"","letterSpacing":"","color":"#123932"},"labelStyles":{"font":{"family":"","weight":"600"},"desktop":{"font":{"size":"50px"}},"letterCase":"","textDecoration":"","lineHeight":"","letterSpacing":"","color":""}} -->
                <div class="cozy-block-counter" id="cozyBlock_da983ad0_852e_45c5_a6bf_c57c4b7825cf"><span>0</span></div>
                <!-- /wp:cozy-block/counter -->

                <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center","fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                <h4 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e('Project Completed', 'homelancer'); ?></h4>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->