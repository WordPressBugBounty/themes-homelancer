<?php

/**
 * Title: Testimonials Page Grid Pro
 * Slug: homelancer/homelancer-testimonials-pagegrid
 * Categories: ct-homelancer-patterns-pro
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/rating_star.png',
    $homelancer_url . 'assets/images/testmonial-hero.jpg',
);
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Testimonial Hero Pro","categories":["ct-homelancer-pro"]},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"8rem","bottom":"0rem"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:0rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","className":"is-style-homelancer-boxshadow","style":{"spacing":{"margin":{"top":"0px"}},"border":{"width":"1px"}},"borderColor":"border-color"} -->
        <div class="wp-block-columns are-vertically-aligned-center is-style-homelancer-boxshadow has-border-color has-border-color-border-color" style="border-width:1px;margin-top:0px"><!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[1]) ?>","id":11094,"dimRatio":0,"customOverlayColor":"#bdb7b0","isUserOverlayColor":false,"minHeight":610,"isDark":false,"sizeSlug":"full","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="min-height:610px"><img class="wp-block-cover__image-background wp-image-11094 size-full" alt="" src="<?php echo esc_url($homelancer_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#bdb7b0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":5945,"width":"130px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-5945" style="width:130px;height:auto" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"28px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                    <p class="has-heading-color-color has-text-color has-link-color" style="font-size:28px"><?php esc_html_e('“From the first call to the final cleanup, everything was handled professionally. The team arrived on time and did exactly what they promised.”“From the first call to the final cleanup, everything was handled professionally. The team arrived on time and did exactly what they promised.”', 'homelancer'); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"24px"},"spacing":{"margin":{"top":"44px"}}}} -->
                        <h4 class="wp-block-heading" style="margin-top:44px;font-size:24px"><?php esc_html_e('Sarah Michiel', 'homelancer'); ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Kitchen Renovation · Austin, TX', 'homelancer'); ?></p>
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

    <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"8rem"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group is-style-default" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:cozy-block/testimonial {"blockClientId":"654091b9-6d4f-4e68-9c75-8fc32fee56ed","display":"testimonials-block-2","layout":"grid","gridOptions":{"displayColumn":3,"masonryEnabled":false,"columnGap":20}} -->
        <div class="cozy-block-testimonial display-grid   " id="cozyBlock_654091b9_6d4f_4e68_9c75_8fc32fee56ed">
            <div class="cozy-block-grid-wrapper "><!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"style":{"spacing":{"padding":{"top":"36px","bottom":"36px","left":"26px","right":"26px"},"blockGap":"0"},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"color":{"background":"#fffffe"}},"borderColor":"border-color","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"},"cozyHoverEffect":{"hasOverflow":false,"overflow":"hidden","hasZIndex":false,"zIndex":0,"boxShadow":{"enabled":true,"color":"#0f0f0f0f","horizontal":0,"vertical":4,"blur":34,"spread":-5,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":false,"transform":{"translateX":0,"translateY":0,"rotate":0,"scale":1},"transformDefaultEnabled":false,"transformDefault":{"translateX":0,"translateY":0,"rotate":0,"scale":1}},"cozyAnimation":{"type":"none","easingFunction":"ease","anchorPlacement":"top-center","duration":600}} -->
                    <div class="wp-block-group has-border-color has-border-color-border-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#fffffe;padding-top:36px;padding-right:26px;padding-bottom:36px;padding-left:26px"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                        <h3 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Professional, reliable, and easy to work with.', 'homelancer'); ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:image {"width":"auto","height":"16px","sizeSlug":"large","linkDestination":"none","align":"left","style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"12px","bottom":"18px","left":"0","right":"0"}},"color":{"duotone":["rgb(255, 150, 58)","rgb(255, 150, 58)"]}}} -->
                        <figure class="wp-block-image alignleft size-large is-resized has-custom-border" style="margin-top:12px;margin-right:0;margin-bottom:18px;margin-left:0"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/stars.png" alt="" style="border-radius:0px;width:auto;height:16px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('The team made it incredibly easy to get the repairs we needed. They arrived on time, explained everything clearly, and did an excellent job from start to finish.', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"0px"},"margin":{"top":"26px","bottom":"0px"},"blockGap":{"top":"10px","left":"10px"}}}} -->
                        <div class="wp-block-columns" style="margin-top:26px;margin-bottom:0px;padding-bottom:0px"><!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}}} -->
                            <div class="wp-block-column"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"12px","left":"12px"}}}} -->
                                <div class="wp-block-columns"><!-- wp:column {"width":"56px","style":{"spacing":{"blockGap":"0"}}} -->
                                    <div class="wp-block-column" style="flex-basis:56px"><!-- wp:image {"width":"auto","height":"56px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
                                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/testimonial-1.png" alt="" style="border-radius:100px;width:auto;height:56px" /></figure>
                                        <!-- /wp:image -->
                                    </div>
                                    <!-- /wp:column -->

                                    <!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}}} -->
                                    <div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"18px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                                        <h4 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px;font-size:18px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Jesisica Nguyen', 'homelancer'); ?></h4>
                                        <!-- /wp:heading -->

                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"2px","bottom":"0"}},"color":{"text":"#5c5c5e"},"elements":{"link":{"color":{"text":"#5c5c5e"}}},"typography":{"fontSize":"13px"}}} -->
                                        <p class="has-text-color has-link-color" style="color:#5c5c5e;margin-top:2px;margin-bottom:0;font-size:13px"><?php esc_html_e('Graphics Designer', 'homelancer'); ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:column -->
                                </div>
                                <!-- /wp:columns -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"width":"34px","style":{"spacing":{"blockGap":"0","padding":{"top":"10px"}}}} -->
                            <div class="wp-block-column" style="padding-top:10px;flex-basis:34px"><!-- wp:image {"width":"auto","height":"34px","sizeSlug":"large"} -->
                                <figure class="wp-block-image size-large is-resized"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/google_logo.png" alt="" style="width:auto;height:34px" /></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->

                <!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"style":{"spacing":{"padding":{"top":"36px","bottom":"36px","left":"26px","right":"26px"},"blockGap":"0"},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"color":{"background":"#fffffe"}},"borderColor":"border-color","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"},"cozyHoverEffect":{"hasOverflow":false,"overflow":"hidden","hasZIndex":false,"zIndex":0,"boxShadow":{"enabled":true,"color":"#0f0f0f0f","horizontal":0,"vertical":4,"blur":34,"spread":-5,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":false,"transform":{"translateX":0,"translateY":0,"rotate":0,"scale":1},"transformDefaultEnabled":false,"transformDefault":{"translateX":0,"translateY":0,"rotate":0,"scale":1}},"cozyAnimation":{"type":"none","easingFunction":"ease","anchorPlacement":"top-center","duration":600}} -->
                    <div class="wp-block-group has-border-color has-border-color-border-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#fffffe;padding-top:36px;padding-right:26px;padding-bottom:36px;padding-left:26px"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                        <h3 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('They delivered exactly what they promised.', 'homelancer'); ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:image {"width":"auto","height":"16px","sizeSlug":"large","linkDestination":"none","align":"left","style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"12px","bottom":"18px","left":"0","right":"0"}},"color":{"duotone":["rgb(255, 150, 58)","rgb(255, 150, 58)"]}}} -->
                        <figure class="wp-block-image alignleft size-large is-resized has-custom-border" style="margin-top:12px;margin-right:0;margin-bottom:18px;margin-left:0"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/stars.png" alt="" style="border-radius:0px;width:auto;height:16px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('From the initial quote to the final inspection, everything was handled professionally. The quality of their work and attention to detail really stood out.', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"0px"},"margin":{"top":"26px","bottom":"0px"},"blockGap":{"top":"10px","left":"10px"}}}} -->
                        <div class="wp-block-columns" style="margin-top:26px;margin-bottom:0px;padding-bottom:0px"><!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}}} -->
                            <div class="wp-block-column"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"12px","left":"12px"}}}} -->
                                <div class="wp-block-columns"><!-- wp:column {"width":"56px","style":{"spacing":{"blockGap":"0"}}} -->
                                    <div class="wp-block-column" style="flex-basis:56px"><!-- wp:image {"width":"auto","height":"56px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
                                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/testimonial-2.png" alt="" style="border-radius:100px;width:auto;height:56px" /></figure>
                                        <!-- /wp:image -->
                                    </div>
                                    <!-- /wp:column -->

                                    <!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}}} -->
                                    <div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"18px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                                        <h4 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px;font-size:18px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Jesisica Nguyen', 'homelancer'); ?></h4>
                                        <!-- /wp:heading -->

                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"2px","bottom":"0"}},"color":{"text":"#5c5c5e"},"elements":{"link":{"color":{"text":"#5c5c5e"}}},"typography":{"fontSize":"13px"}}} -->
                                        <p class="has-text-color has-link-color" style="color:#5c5c5e;margin-top:2px;margin-bottom:0;font-size:13px"><?php esc_html_e('Graphics Designer', 'homelancer'); ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:column -->
                                </div>
                                <!-- /wp:columns -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"width":"34px","style":{"spacing":{"blockGap":"0","padding":{"top":"10px"}}}} -->
                            <div class="wp-block-column" style="padding-top:10px;flex-basis:34px"><!-- wp:image {"width":"auto","height":"34px","sizeSlug":"large"} -->
                                <figure class="wp-block-image size-large is-resized"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/google_logo.png" alt="" style="width:auto;height:34px" /></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->

                <!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"style":{"spacing":{"padding":{"top":"36px","bottom":"36px","left":"26px","right":"26px"},"blockGap":"0"},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"color":{"background":"#fffffe"}},"borderColor":"border-color","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"},"cozyHoverEffect":{"hasOverflow":false,"overflow":"hidden","hasZIndex":false,"zIndex":0,"boxShadow":{"enabled":true,"color":"#0f0f0f0f","horizontal":0,"vertical":4,"blur":34,"spread":-5,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":false,"transform":{"translateX":0,"translateY":0,"rotate":0,"scale":1},"transformDefaultEnabled":false,"transformDefault":{"translateX":0,"translateY":0,"rotate":0,"scale":1}},"cozyAnimation":{"type":"none","easingFunction":"ease","anchorPlacement":"top-center","duration":600}} -->
                    <div class="wp-block-group has-border-color has-border-color-border-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#fffffe;padding-top:36px;padding-right:26px;padding-bottom:36px;padding-left:26px"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                        <h3 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('A team I can confidently recommend.', 'homelancer'); ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:image {"width":"auto","height":"16px","sizeSlug":"large","linkDestination":"none","align":"left","style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"12px","bottom":"18px","left":"0","right":"0"}},"color":{"duotone":["rgb(255, 150, 58)","rgb(255, 150, 58)"]}}} -->
                        <figure class="wp-block-image alignleft size-large is-resized has-custom-border" style="margin-top:12px;margin-right:0;margin-bottom:18px;margin-left:0"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/stars.png" alt="" style="border-radius:0px;width:auto;height:16px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('We’ve used their services for several projects, and they’ve been consistently responsive, knowledgeable, and dependable. It’s great knowing we have a team we can count on.', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"0px"},"margin":{"top":"26px","bottom":"0px"},"blockGap":{"top":"10px","left":"10px"}}}} -->
                        <div class="wp-block-columns" style="margin-top:26px;margin-bottom:0px;padding-bottom:0px"><!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}}} -->
                            <div class="wp-block-column"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"12px","left":"12px"}}}} -->
                                <div class="wp-block-columns"><!-- wp:column {"width":"56px","style":{"spacing":{"blockGap":"0"}}} -->
                                    <div class="wp-block-column" style="flex-basis:56px"><!-- wp:image {"width":"auto","height":"56px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
                                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/testimonial-3.png" alt="" style="border-radius:100px;width:auto;height:56px" /></figure>
                                        <!-- /wp:image -->
                                    </div>
                                    <!-- /wp:column -->

                                    <!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}}} -->
                                    <div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"18px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                                        <h4 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px;font-size:18px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Jesisica Nguyen', 'homelancer'); ?></h4>
                                        <!-- /wp:heading -->

                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"2px","bottom":"0"}},"color":{"text":"#5c5c5e"},"elements":{"link":{"color":{"text":"#5c5c5e"}}},"typography":{"fontSize":"13px"}}} -->
                                        <p class="has-text-color has-link-color" style="color:#5c5c5e;margin-top:2px;margin-bottom:0;font-size:13px"><?php esc_html_e('Graphics Designer', 'homelancer'); ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:column -->
                                </div>
                                <!-- /wp:columns -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"width":"34px","style":{"spacing":{"blockGap":"0","padding":{"top":"10px"}}}} -->
                            <div class="wp-block-column" style="padding-top:10px;flex-basis:34px"><!-- wp:image {"width":"auto","height":"34px","sizeSlug":"large"} -->
                                <figure class="wp-block-image size-large is-resized"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/google_logo.png" alt="" style="width:auto;height:34px" /></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->

                <!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"style":{"spacing":{"padding":{"top":"36px","bottom":"36px","left":"26px","right":"26px"},"blockGap":"0"},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"color":{"background":"#fffffe"}},"borderColor":"border-color","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"},"cozyHoverEffect":{"hasOverflow":false,"overflow":"hidden","hasZIndex":false,"zIndex":0,"boxShadow":{"enabled":true,"color":"#0f0f0f0f","horizontal":0,"vertical":4,"blur":34,"spread":-5,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":false,"transform":{"translateX":0,"translateY":0,"rotate":0,"scale":1},"transformDefaultEnabled":false,"transformDefault":{"translateX":0,"translateY":0,"rotate":0,"scale":1}},"cozyAnimation":{"type":"none","easingFunction":"ease","anchorPlacement":"top-center","duration":600}} -->
                    <div class="wp-block-group has-border-color has-border-color-border-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#fffffe;padding-top:36px;padding-right:26px;padding-bottom:36px;padding-left:26px"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                        <h3 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Outstanding service from start to finish.', 'homelancer'); ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:image {"width":"auto","height":"16px","sizeSlug":"large","linkDestination":"none","align":"left","style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"12px","bottom":"18px","left":"0","right":"0"}},"color":{"duotone":["rgb(255, 150, 58)","rgb(255, 150, 58)"]}}} -->
                        <figure class="wp-block-image alignleft size-large is-resized has-custom-border" style="margin-top:12px;margin-right:0;margin-bottom:18px;margin-left:0"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/stars.png" alt="" style="border-radius:0px;width:auto;height:16px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('They were quick to respond, arrived exactly when promised, and completed the work with great attention to detail. The whole experience was smooth and hassle-free.', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"0px"},"margin":{"top":"26px","bottom":"0px"},"blockGap":{"top":"10px","left":"10px"}}}} -->
                        <div class="wp-block-columns" style="margin-top:26px;margin-bottom:0px;padding-bottom:0px"><!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}}} -->
                            <div class="wp-block-column"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"12px","left":"12px"}}}} -->
                                <div class="wp-block-columns"><!-- wp:column {"width":"56px","style":{"spacing":{"blockGap":"0"}}} -->
                                    <div class="wp-block-column" style="flex-basis:56px"><!-- wp:image {"width":"auto","height":"56px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
                                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/team-1.png" alt="" style="border-radius:100px;width:auto;height:56px" /></figure>
                                        <!-- /wp:image -->
                                    </div>
                                    <!-- /wp:column -->

                                    <!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}}} -->
                                    <div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"18px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                                        <h4 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px;font-size:18px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Jesisica Nguyen', 'homelancer'); ?></h4>
                                        <!-- /wp:heading -->

                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"2px","bottom":"0"}},"color":{"text":"#5c5c5e"},"elements":{"link":{"color":{"text":"#5c5c5e"}}},"typography":{"fontSize":"13px"}}} -->
                                        <p class="has-text-color has-link-color" style="color:#5c5c5e;margin-top:2px;margin-bottom:0;font-size:13px"><?php esc_html_e('Graphics Designer', 'homelancer'); ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:column -->
                                </div>
                                <!-- /wp:columns -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"width":"34px","style":{"spacing":{"blockGap":"0","padding":{"top":"10px"}}}} -->
                            <div class="wp-block-column" style="padding-top:10px;flex-basis:34px"><!-- wp:image {"width":"auto","height":"34px","sizeSlug":"large"} -->
                                <figure class="wp-block-image size-large is-resized"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/google_logo.png" alt="" style="width:auto;height:34px" /></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->

                <!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"style":{"spacing":{"padding":{"top":"36px","bottom":"36px","left":"26px","right":"26px"},"blockGap":"0"},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"color":{"background":"#fffffe"}},"borderColor":"border-color","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"},"cozyHoverEffect":{"hasOverflow":false,"overflow":"hidden","hasZIndex":false,"zIndex":0,"boxShadow":{"enabled":true,"color":"#0f0f0f0f","horizontal":0,"vertical":4,"blur":34,"spread":-5,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":false,"transform":{"translateX":0,"translateY":0,"rotate":0,"scale":1},"transformDefaultEnabled":false,"transformDefault":{"translateX":0,"translateY":0,"rotate":0,"scale":1}},"cozyAnimation":{"type":"none","easingFunction":"ease","anchorPlacement":"top-center","duration":600}} -->
                    <div class="wp-block-group has-border-color has-border-color-border-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#fffffe;padding-top:36px;padding-right:26px;padding-bottom:36px;padding-left:26px"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                        <h3 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Quality work and excellent communication.', 'homelancer'); ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:image {"width":"auto","height":"16px","sizeSlug":"large","linkDestination":"none","align":"left","style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"12px","bottom":"18px","left":"0","right":"0"}},"color":{"duotone":["rgb(255, 150, 58)","rgb(255, 150, 58)"]}}} -->
                        <figure class="wp-block-image alignleft size-large is-resized has-custom-border" style="margin-top:12px;margin-right:0;margin-bottom:18px;margin-left:0"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/stars.png" alt="" style="border-radius:0px;width:auto;height:16px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('We appreciated how clearly everything was explained before the work began. The team was professional, efficient, and left everything clean when the job was finished.', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"0px"},"margin":{"top":"26px","bottom":"0px"},"blockGap":{"top":"10px","left":"10px"}}}} -->
                        <div class="wp-block-columns" style="margin-top:26px;margin-bottom:0px;padding-bottom:0px"><!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}}} -->
                            <div class="wp-block-column"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"12px","left":"12px"}}}} -->
                                <div class="wp-block-columns"><!-- wp:column {"width":"56px","style":{"spacing":{"blockGap":"0"}}} -->
                                    <div class="wp-block-column" style="flex-basis:56px"><!-- wp:image {"width":"auto","height":"56px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
                                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/team-2.png" alt="" style="border-radius:100px;width:auto;height:56px" /></figure>
                                        <!-- /wp:image -->
                                    </div>
                                    <!-- /wp:column -->

                                    <!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}}} -->
                                    <div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"18px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                                        <h4 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px;font-size:18px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Jesisica Nguyen', 'homelancer'); ?></h4>
                                        <!-- /wp:heading -->

                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"2px","bottom":"0"}},"color":{"text":"#5c5c5e"},"elements":{"link":{"color":{"text":"#5c5c5e"}}},"typography":{"fontSize":"13px"}}} -->
                                        <p class="has-text-color has-link-color" style="color:#5c5c5e;margin-top:2px;margin-bottom:0;font-size:13px"><?php esc_html_e('Graphics Designer', 'homelancer'); ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:column -->
                                </div>
                                <!-- /wp:columns -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"width":"34px","style":{"spacing":{"blockGap":"0","padding":{"top":"10px"}}}} -->
                            <div class="wp-block-column" style="padding-top:10px;flex-basis:34px"><!-- wp:image {"width":"auto","height":"34px","sizeSlug":"large"} -->
                                <figure class="wp-block-image size-large is-resized"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/google_logo.png" alt="" style="width:auto;height:34px" /></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->

                <!-- wp:cozy-block/grid -->
                <div class="cozy-block-grid"><!-- wp:group {"style":{"spacing":{"padding":{"top":"36px","bottom":"36px","left":"26px","right":"26px"},"blockGap":"0"},"border":{"width":"1px","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"color":{"background":"#fffffe"}},"borderColor":"border-color","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"},"cozyHoverEffect":{"hasOverflow":false,"overflow":"hidden","hasZIndex":false,"zIndex":0,"boxShadow":{"enabled":true,"color":"#0f0f0f0f","horizontal":0,"vertical":4,"blur":34,"spread":-5,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":false,"transform":{"translateX":0,"translateY":0,"rotate":0,"scale":1},"transformDefaultEnabled":false,"transformDefault":{"translateX":0,"translateY":0,"rotate":0,"scale":1}},"cozyAnimation":{"type":"none","easingFunction":"ease","anchorPlacement":"top-center","duration":600}} -->
                    <div class="wp-block-group has-border-color has-border-color-border-color has-background" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#fffffe;padding-top:36px;padding-right:26px;padding-bottom:36px;padding-left:26px"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                        <h3 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Reliable service we can count on.', 'homelancer'); ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:image {"width":"auto","height":"16px","sizeSlug":"large","linkDestination":"none","align":"left","style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"12px","bottom":"18px","left":"0","right":"0"}},"color":{"duotone":["rgb(255, 150, 58)","rgb(255, 150, 58)"]}}} -->
                        <figure class="wp-block-image alignleft size-large is-resized has-custom-border" style="margin-top:12px;margin-right:0;margin-bottom:18px;margin-left:0"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/stars.png" alt="" style="border-radius:0px;width:auto;height:16px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Finding a dependable service team makes all the difference. They’ve consistently delivered quality work and excellent customer service whenever we’ve needed them.', 'homelancer'); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"0px"},"margin":{"top":"26px","bottom":"0px"},"blockGap":{"top":"10px","left":"10px"}}}} -->
                        <div class="wp-block-columns" style="margin-top:26px;margin-bottom:0px;padding-bottom:0px"><!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}}} -->
                            <div class="wp-block-column"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"12px","left":"12px"}}}} -->
                                <div class="wp-block-columns"><!-- wp:column {"width":"56px","style":{"spacing":{"blockGap":"0"}}} -->
                                    <div class="wp-block-column" style="flex-basis:56px"><!-- wp:image {"width":"auto","height":"56px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
                                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/team-3.png" alt="" style="border-radius:100px;width:auto;height:56px" /></figure>
                                        <!-- /wp:image -->
                                    </div>
                                    <!-- /wp:column -->

                                    <!-- wp:column {"width":"","style":{"spacing":{"blockGap":"0"}}} -->
                                    <div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"18px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                                        <h4 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px;font-size:18px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Jesisica Nguyen', 'homelancer'); ?></h4>
                                        <!-- /wp:heading -->

                                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"2px","bottom":"0"}},"color":{"text":"#5c5c5e"},"elements":{"link":{"color":{"text":"#5c5c5e"}}},"typography":{"fontSize":"13px"}}} -->
                                        <p class="has-text-color has-link-color" style="color:#5c5c5e;margin-top:2px;margin-bottom:0;font-size:13px"><?php esc_html_e('Graphics Designer', 'homelancer'); ?></p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:column -->
                                </div>
                                <!-- /wp:columns -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"width":"34px","style":{"spacing":{"blockGap":"0","padding":{"top":"10px"}}}} -->
                            <div class="wp-block-column" style="padding-top:10px;flex-basis:34px"><!-- wp:image {"width":"auto","height":"34px","sizeSlug":"large"} -->
                                <figure class="wp-block-image size-large is-resized"><img src="https://plugins.cozythemes.com/cozy-addons/assets/media/google_logo.png" alt="" style="width:auto;height:34px" /></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:cozy-block/grid -->
            </div>
        </div>
        <!-- /wp:cozy-block/testimonial -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->