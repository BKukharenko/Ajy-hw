<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
	wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD_Ko-c4FCuHQ5nhxc8_9b2W5NJjidjBBA', array(), '3', true);
	wp_enqueue_script('google-map-init', get_stylesheet_directory_uri() . '/js/google-maps.js', array('google-map', 'jquery'), '0.1', true);
	if(is_front_page()) {
		wp_enqueue_script( 'isotope-script',  'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', array(), $the_theme->get( 'Version' ), true );
	}
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

//Include child-theme widgets.php
require_once('inc/widgets.php');

//Include child-theme custom-post-type.php
require_once('inc/custom-post-type.php' );

//Register new settings in customizer
include ('inc/customizer.php');

//ACF Google Map
function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyD_Ko-c4FCuHQ5nhxc8_9b2W5NJjidjBBA';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

//Show empty categories in right sidebar on Blog and Pages
add_filter( 'widget_categories_args', 'wpb_force_empty_cats' );
function wpb_force_empty_cats($cat_args) {
	$cat_args['hide_empty'] = 0;
	return $cat_args;
}

//Include setup.php to change display of excerpt
require_once ('inc/setup.php');

//Pagination
function pagination() {
	global $wp_query;
	$big = 999999999; // need an unlikely integer
	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'show_all'           => false,
		'prev_next'          => false,
		'mid_size'           => 3
	) );
}

//Include custom taxonomy
require_once ('inc/taxonomy.php');
