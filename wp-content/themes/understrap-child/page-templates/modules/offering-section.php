<?php $container = get_theme_mod( 'understrap_container_type' ); ?>
<section class="offering-section">
    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
        <div class="section-description-wrapper text-center">
            <h1 class="header text-center pt-5"><?= get_sub_field( 'section_header' ) ?></h1>
            <p class="section-description"><?= get_sub_field( 'section_description' ) ?></p>
        </div>
		<?php
		$args = array(
			'post_type'      => array( 'offerings' ),
			'posts_per_page' => - 1
		);

		// The Query
		$query_slider = new WP_Query( $args );

		// The Loop
		if ( $query_slider->have_posts() ) { ?>
        <ul class="row offerings-list py-5 justify-content-around no-gutters pl-0">
			<?php
			while ( $query_slider->have_posts() ) {
				$query_slider->the_post(); ?>
                <li class="offering col-md-6 col-lg-4 text-center">
					<?php the_post_thumbnail();
					?>
                    <div class="offering-description-wrapper">
                        <h3 class="offering-header"><?= get_field( 'offering_name' ); ?></h3>
                        <p class="offering-description"><?= get_field( 'offering_description' ); ?></p>
                    </div>
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
</section>