<?php $container = get_theme_mod( 'understrap_container_type' ); ?>
<section class="why-us-section text-center"
         style="background-image: url('<?php the_sub_field( 'background_image' ); ?>');">
    <div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">
        <div class="row why-us-section-content text-left">
            <div class="col-md-6 text-wrapper ml-auto">
				<?php the_sub_field( 'section_text' ) ?>
            </div>
        </div>
        <a class="arrow-link" href="#welcome-section">
            <i class="fa fa-angle-down"></i>
        </a>
    </div>
</section>