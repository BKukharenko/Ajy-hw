<?php
get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper pt-0" id="single-wrapper">

		<?php
		while (have_rows('home_modules')) : the_row();
			switch (get_row_layout()) {
				case 'why_us_section' :
					get_template_part('page-templates/modules/why-us-section');
					break;
				case 'welcome_section' :
					get_template_part('page-templates/modules/welcome-section');
					break;
				case 'offering_section' :
					get_template_part('page-templates/modules/offering-section');
					break;
				case 'works_section' :
					get_template_part('page-templates/modules/works-section');
					break;
				default:
					break;
			}
		endwhile;
		?>


</div><!-- Wrapper end -->


<?php
get_footer();
?>

