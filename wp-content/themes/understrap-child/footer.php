<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="wrapper-footer">

    <div class="row">

        <div class="col-md-12">

            <footer class="site-footer" id="colophon">
                <div class="featured-clients text-center">
                    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
                        <h3 class="featured-clients-heading pt-4"><?= __( 'Featured Clients', 'understrap' ) ?></h3>
                            <?php
                            $args = array (
	                            'post_type'  => array( 'clients' ),
	                            'posts_per_page' => -1
                            );

                            // The Query
                            $query_slider = new WP_Query( $args );

                            // The Loop
                            if ( $query_slider->have_posts() ) { ?>
                                <ul class="row featured-clients-list py-5 justify-content-around no-gutters pl-0">
                                <?php
	                            while ( $query_slider->have_posts() ) {
		                            $query_slider->the_post(); ?>
                                    <li class="client">
                                        <a class="partner-link" href="<?= get_field('featured_client_link') ?>">
				                            <?php the_post_thumbnail();
				                            ?>
                                        </a>
                                    </li>
		                            <?php
	                            }
                            } else {
	                            // no posts found
                            }

                            // Restore original Post Data
                            wp_reset_query();
                            wp_reset_postdata();

                            ?>
                        </ul>
                    </div>
                </div>
                <div class="contact-us">
                    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
                        <div class="row pt-5 pb-4 contact-us-content text-center text-md-left">
                            <div class="col-md-6">
                                <h3 class="contact-us-heading"><?= __( 'Contact Us:', 'understrap' ) ?></h3>
                                <p class="contact-us-description"> <?= get_theme_mod('description_text')?></p>
                                <div class="row phone-wrapper no-gutters mb-3 justify-content-center justify-content-md-start">
                                    <i class="fa fa-phone"></i>
                                    <a class="phone-number" href="tel:<?= get_theme_mod('phone_link')?>"><?= get_theme_mod('phone_number')?></a>
                                </div>
                                <div class="row address-wrapper no-gutters justify-content-center justify-content-md-start">
                                    <i class="fa fa-map-marker"></i>
                                    <address class="address"><?= get_theme_mod('address')?></address>
                                </div>
                                <div class="contact-map">
	                                <?php
	                                $location = get_field('map', 'option');

	                                if (!empty($location)):
		                                ?>
                                        <div class="acf-map">
                                            <div class="marker" data-lat="<?php echo $location['lat']; ?>"
                                                 data-lng="<?php echo $location['lng']; ?>"></div>
                                        </div>
	                                <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6 text-left">
	                            <?php echo do_shortcode( '[contact-form-7 id="31" title="Untitled"]' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-logo py-5 text-center">
                    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
                        <a href="<?php echo site_url(); ?>"><?= wp_get_attachment_image(get_theme_mod( 'custom_logo' ));?></a>
                    </div>
                </div>
                <div class="copyright text-center py-4">
                    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
                        <span class="copyright-symbol">&copy;</span>
                        <time datetime="<?php echo date('Y'); ?>"><?php echo date('Y'); ?></time>
                        <span class="copyright-text"><?= get_theme_mod('copyright_text')?></span>
                    </div>
                </div>
            </footer><!-- #colophon -->

        </div><!--col end -->

    </div><!-- row end -->

</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

