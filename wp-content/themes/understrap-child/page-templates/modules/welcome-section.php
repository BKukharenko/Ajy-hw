<?php $container = get_theme_mod( 'understrap_container_type' ); ?>
<section class="welcome-section d-flex align-items-center"
         style="background-image: url('<?php the_sub_field( 'background_image' ); ?>');" id="welcome-section">
    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
        <div class="row welcome-section-content align-items-center">
            <div class="col-md-6 text-wrapper ml-auto">
				<?php the_sub_field( 'section_text' ) ?>
            </div>
        </div>
    </div>
</section>