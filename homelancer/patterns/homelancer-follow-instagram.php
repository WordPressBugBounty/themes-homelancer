<?php

/**
 * Title: Follow us on instagram
 * Slug: homelancer/homelancer-follow-instagram
 * Categories: ct-homelancer-patterns-pro
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/g1.jpg',
    $homelancer_url . 'assets/images/g2.jpg',
    $homelancer_url . 'assets/images/g3.jpg',
    $homelancer_url . 'assets/images/g4.jpg',
    $homelancer_url . 'assets/images/g5.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"8rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0px","bottom":"40px"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
    <div class="wp-block-group" style="margin-top:0px;margin-bottom:40px"><!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center","fontSize":"48px"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:48px"><?php esc_html_e('Follow us on Instagram', 'homelancer'); ?> <a href="#"><?php esc_html_e('@HomeLancer', 'homelancer'); ?></a></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
        <p class="has-text-align-center"><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement, and well-being of a household.', 'homelancer'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:gallery {"columns":5,"linkTo":"none","style":{"spacing":{"blockGap":{"top":"28px","left":"28px"}}}} -->
    <figure class="wp-block-gallery has-nested-images columns-5 is-cropped"><!-- wp:image {"id":7065,"sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
        <figure class="wp-block-image size-thumbnail has-custom-border"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-7065" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":7065,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
        <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-7065" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":7065,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
        <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-7065" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":7065,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
        <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url($homelancer_images[3]) ?>" alt="" class="wp-image-7065" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":7065,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
        <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url($homelancer_images[4]) ?>" alt="" class="wp-image-7065" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px" /></figure>
        <!-- /wp:image -->
    </figure>
    <!-- /wp:gallery -->
</div>
<!-- /wp:group -->