<?php

add_action( 'init', 'featured_clients_post_type_register' );
/**
 * Register a team post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function featured_clients_post_type_register() {
    $labels = array(
        'name'               => _x( 'Featured Clients', 'post type general name', 'understrap' ),
        'singular_name'      => _x( 'Featured Client', 'post type singular name', 'understrap' ),
        'menu_name'          => _x( 'Featured Clients', 'admin menu', 'understrap' ),
        'name_admin_bar'     => _x( 'Featured Clients', 'add new on admin bar', 'understrap' ),
        'add_new'            => _x( 'Add New Featured client', 'featured client', 'understrap' ),
        'add_new_item'       => __( 'Add New Featured Client', 'understrap' ),
        'new_item'           => __( 'New Featured client', 'understrap' ),
        'edit_item'          => __( 'Edit Featured client', 'understrap' ),
        'view_item'          => __( 'View Featured client', 'understrap' ),
        'all_items'          => __( 'All Featured clients', 'understrap' ),
        'search_items'       => __( 'Search Featured clients', 'understrap' ),
        'parent_item_colon'  => __( 'Parent Featured clients:', 'understrap' ),
        'not_found'          => __( 'No featured clients found.', 'understrap' ),
        'not_found_in_trash' => __( 'No featured clients found in Trash.', 'understrap' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'This is a list of featured clients.', 'understrap' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'clients' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('thumbnail', 'title', 'page-attributes')
    );

    register_post_type( 'clients', $args );
}

//Offering Post Type

add_action( 'init', 'offering_post_type_register' );
/**
 * Register a offering post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function offering_post_type_register() {
	$labels = array(
		'name'               => _x( 'Offering', 'post type general name', 'understrap' ),
		'singular_name'      => _x( 'Offering post', 'post type singular name', 'understrap' ),
		'menu_name'          => _x( 'Offering', 'admin menu', 'understrap' ),
		'name_admin_bar'     => _x( 'Offering', 'add new on admin bar', 'understrap' ),
		'add_new'            => _x( 'Add New Offering', 'Offering', 'understrap' ),
		'add_new_item'       => __( 'Add New Offering', 'understrap' ),
		'new_item'           => __( 'New Offering', 'understrap' ),
		'edit_item'          => __( 'Edit Offering', 'understrap' ),
		'view_item'          => __( 'View Offering', 'understrap' ),
		'all_items'          => __( 'All Offerings', 'understrap' ),
		'search_items'       => __( 'Search Offerings', 'understrap' ),
		'parent_item_colon'  => __( 'Parent Offerings:', 'understrap' ),
		'not_found'          => __( 'No offerings found.', 'understrap' ),
		'not_found_in_trash' => __( 'No offerings found in Trash.', 'understrap' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'This is a list of offerings.', 'understrap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'offerings' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('thumbnail', 'title', 'page-attributes')
	);

	register_post_type( 'offerings', $args );
}

//Register Portfolio Post Type
add_action('init', 'portfolio_post_type_register');

function portfolio_post_type_register()
{
	$labels = array(
		'name'               => _x( 'Portfolio', 'post type general name', 'understrap' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name', 'understrap' ),
		'menu_name'          => _x( 'Portfolio', 'admin menu', 'understrap' ),
		'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'understrap' ),
		'add_new'            => _x( 'Add New Portfolio Item', 'team member', 'understrap' ),
		'add_new_item'       => __( 'Add New Portfolio Item', 'understrap' ),
		'new_item'           => __( 'New Portfolio item', 'understrap' ),
		'edit_item'          => __( 'Edit Portfolio item', 'understrap' ),
		'view_item'          => __( 'View Portfolio item', 'understrap' ),
		'all_items'          => __( 'All Portfolio items', 'understrap' ),
		'search_items'       => __( 'Search Portfolio items', 'understrap' ),
		'parent_item_colon'  => __( 'Parent Portfolio item:', 'understrap' ),
		'not_found'          => __( 'No items found.', 'understrap' ),
		'not_found_in_trash' => __( 'No items found in Trash.', 'understrap' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'This is a list of portfolio items.', 'understrap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('thumbnail', 'title', 'page-attributes')
	);
	register_post_type('portfolio',$args);
}