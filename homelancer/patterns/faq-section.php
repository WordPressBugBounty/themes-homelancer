<?php

/**
 * Title: FAQ Section
 * Slug: homelancer/faq-section
 * Categories: homelancer-faq
 */
?>
<!-- wp:group {"metadata":{"categories":["homelancer-faq"],"name":"FAQ Section"},"align":"full","style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"35%"} -->
        <div class="wp-block-column" style="flex-basis:35%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"},"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3","fontSize":"14px","textAlign":"left","textTransform":"uppercase","letterSpacing":"10%"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
                <h5 class="wp-block-heading has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:500;letter-spacing:10%;line-height:1.3;text-transform:uppercase"><?php esc_html_e( 'FAQS', 'homelancer' ); ?></h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2","fontSize":"48px","textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="font-size:48px;font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e( 'Questions? We\'ve Got Answers.', 'homelancer' ); ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"}}} -->
                <p style="font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e( 'Still unsure about something? Call us at', 'homelancer' ); ?> <span style="text-decoration: underline;">+1 (000) 012-3456.</span></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":""} -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:0px"><!-- wp:accordion {"autoclose":true,"style":{"spacing":{"blockGap":"0"}}} -->
                <div role="group" class="wp-block-accordion"><!-- wp:accordion-item {"openByDefault":true,"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"16px"},"padding":{"bottom":"16px","top":"0px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
                    <div class="wp-block-accordion-item is-open" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:16px;padding-top:0px;padding-bottom:16px"><!-- wp:accordion-heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}}} -->
                        <h3 class="wp-block-accordion-heading has-icon has-icon-right" style="font-size:24px;font-style:normal;font-weight:600"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'What home services do you offer?', 'homelancer' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
                        <!-- /wp:accordion-heading -->

                        <!-- wp:accordion-panel -->
                        <div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
                            <p><?php esc_html_e( 'We provide reliable home services tailored to your needs, from repairs and maintenance to installations, improvements, and other essential household services.', 'homelancer' ); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:accordion-panel -->
                    </div>
                    <!-- /wp:accordion-item -->

                    <!-- wp:accordion-item {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"bottom":"16px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
                    <div class="wp-block-accordion-item" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-bottom:16px"><!-- wp:accordion-heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}}} -->
                        <h3 class="wp-block-accordion-heading has-icon has-icon-right" style="font-size:24px;font-style:normal;font-weight:600"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'How do I book a service?', 'homelancer' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
                        <!-- /wp:accordion-heading -->

                        <!-- wp:accordion-panel -->
                        <div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
                            <p><?php esc_html_e( 'Simply contact us or request a service through our website. Tell us what you need, choose a convenient time, and we’ll take care of the rest.', 'homelancer' ); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:accordion-panel -->
                    </div>
                    <!-- /wp:accordion-item -->

                    <!-- wp:accordion-item {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"bottom":"16px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
                    <div class="wp-block-accordion-item" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-bottom:16px"><!-- wp:accordion-heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}}} -->
                        <h3 class="wp-block-accordion-heading has-icon has-icon-right" style="font-size:24px;font-style:normal;font-weight:600"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'Are your technicians experienced and qualified?', 'homelancer' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
                        <!-- /wp:accordion-heading -->

                        <!-- wp:accordion-panel -->
                        <div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
                            <p><?php esc_html_e( 'Yes. Our team consists of experienced professionals who are committed to delivering quality workmanship, dependable service, and excellent customer care.', 'homelancer' ); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:accordion-panel -->
                    </div>
                    <!-- /wp:accordion-item -->

                    <!-- wp:accordion-item {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"bottom":"16px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
                    <div class="wp-block-accordion-item" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-bottom:16px"><!-- wp:accordion-heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}}} -->
                        <h3 class="wp-block-accordion-heading has-icon has-icon-right" style="font-size:24px;font-style:normal;font-weight:600"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'How much does a home service cost?', 'homelancer' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
                        <!-- /wp:accordion-heading -->

                        <!-- wp:accordion-panel -->
                        <div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
                            <p><?php esc_html_e( 'Pricing depends on the type and scope of the work. We provide clear estimates before starting, so you know what to expect.', 'homelancer' ); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:accordion-panel -->
                    </div>
                    <!-- /wp:accordion-item -->

                    <!-- wp:accordion-item {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"bottom":"16px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
                    <div class="wp-block-accordion-item" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-bottom:16px"><!-- wp:accordion-heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}}} -->
                        <h3 class="wp-block-accordion-heading has-icon has-icon-right" style="font-size:24px;font-style:normal;font-weight:600"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'Do you offer same-day or emergency services?', 'homelancer' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
                        <!-- /wp:accordion-heading -->

                        <!-- wp:accordion-panel -->
                        <div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
                            <p><?php esc_html_e( 'We offer flexible scheduling and, for selected services, same-day or emergency appointments may be available. Contact us to check availability.', 'homelancer' ); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:accordion-panel -->
                    </div>
                    <!-- /wp:accordion-item -->

                    <!-- wp:accordion-item {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"bottom":"16px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
                    <div class="wp-block-accordion-item" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-bottom:16px"><!-- wp:accordion-heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}}} -->
                        <h3 class="wp-block-accordion-heading has-icon has-icon-right" style="font-size:24px;font-style:normal;font-weight:600"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'Do you guarantee your work?', 'homelancer' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
                        <!-- /wp:accordion-heading -->

                        <!-- wp:accordion-panel -->
                        <div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
                            <p><?php esc_html_e( 'We stand behind the quality of our work and are committed to making sure every job meets our standards and your expectations.', 'homelancer' ); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:accordion-panel -->
                    </div>
                    <!-- /wp:accordion-item -->

                    <!-- wp:accordion-item {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"bottom":"16px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
                    <div class="wp-block-accordion-item" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-bottom:16px"><!-- wp:accordion-heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}}} -->
                        <h3 class="wp-block-accordion-heading has-icon has-icon-right" style="font-size:24px;font-style:normal;font-weight:600"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'Do you serve my area?', 'homelancer' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
                        <!-- /wp:accordion-heading -->

                        <!-- wp:accordion-panel -->
                        <div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
                            <p><?php esc_html_e( 'We serve homeowners across our local service area. Contact us with your location and service needs to confirm availability.', 'homelancer' ); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:accordion-panel -->
                    </div>
                    <!-- /wp:accordion-item -->

                    <!-- wp:accordion-item {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"bottom":"16px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-color","width":"1px"},"left":{"width":"0px","style":"none"}}}} -->
                    <div class="wp-block-accordion-item" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-bottom:16px"><!-- wp:accordion-heading {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}}} -->
                        <h3 class="wp-block-accordion-heading has-icon has-icon-right" style="font-size:24px;font-style:normal;font-weight:600"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'Why should I choose your home services?', 'homelancer' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
                        <!-- /wp:accordion-heading -->

                        <!-- wp:accordion-panel -->
                        <div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
                            <p><?php esc_html_e( 'We combine experienced professionals, dependable service, transparent pricing, and a commitment to quality to make every home service simple and stress-free.', 'homelancer' ); ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:accordion-panel -->
                    </div>
                    <!-- /wp:accordion-item -->
                </div>
                <!-- /wp:accordion -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->