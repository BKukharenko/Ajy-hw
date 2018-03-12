<?php
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_works_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_works_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Works', 'taxonomy general name', 'understrap' ),
        'singular_name'     => _x( 'Work', 'taxonomy singular name', 'understrap' ),
        'search_items'      => __( 'Search Works', 'understrap' ),
        'all_items'         => __( 'All Works', 'understrap' ),
        'parent_item'       => __( 'Parent Work', 'understrap' ),
        'parent_item_colon' => __( 'Parent Work:', 'understrap' ),
        'edit_item'         => __( 'Edit Work', 'understrap' ),
        'update_item'       => __( 'Update Work Term', 'understrap' ),
        'add_new_item'      => __( 'Add New Work Term', 'understrap' ),
        'new_item_name'     => __( 'New Work Name', 'understrap' ),
        'menu_name'         => __( 'Works', 'understrap' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'works' ),
    );

    register_taxonomy( 'works', array( 'portfolio' ), $args );
}