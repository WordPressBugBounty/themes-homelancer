<?php

/**
 * Title: Team Pageheader
 * Slug: homelancer/homelancer-team-pageheader
 * Categories: ct-homelancer-patterns-pro
 */
?>
<!-- wp:group {"metadata":{"name":"PRO: Page Header","description":"Hero Section with Counter for Homelancer pro","categories":["homelancer-hero"]},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"7rem","bottom":"7rem"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"680px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3","textAlign":"center"}},"textColor":"light-color","fontSize":"giga"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-giga-font-size" style="font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Meet the Team Behind the Work', 'homelancer'); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textAlign":"center"}},"textColor":"light-color"} -->
        <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Experienced professionals dedicated to delivering reliable service, quality workmanship, and a better customer experience.', 'homelancer'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->