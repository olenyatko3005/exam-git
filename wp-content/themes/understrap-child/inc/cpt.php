<?php

add_action( 'init', 'family_register' );
add_action( 'init', 'testimonials_register' );
add_action( 'init', 'project_register' );
/**
 * Register a Family post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function family_register() {
	$labels = array(
		'name'               => _x( 'Family', 'post type general name', 'understrap' ),
		'singular_name'      => _x( 'Family item', 'post type singular name', 'understrap' ),
		'menu_name'          => _x( 'Family', 'admin menu', 'understrap' ),
		'name_admin_bar'     => _x( 'Family', 'add new on admin bar', 'understrap' ),
		'add_new'            => _x( 'Add New Family item', 'Team member', 'understrap' ),
		'add_new_item'       => __( 'Add New Family item', 'understrap' ),
		'new_item'           => __( 'New Family item', 'understrap' ),
		'edit_item'          => __( 'Edit Family item', 'understrap' ),
		'view_item'          => __( 'View Family item', 'understrap' ),
		'all_items'          => __( 'All Family item', 'understrap' ),
		'search_items'       => __( 'Search Family item', 'understrap' ),
		'parent_item_colon'  => __( 'Parent Family item:', 'understrap' ),
		'not_found'          => __( 'No Family item found.', 'understrap' ),
		'not_found_in_trash' => __( 'No Family item found in Trash.', 'understrap' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'This is a list of Family item.', 'understrap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'family' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'taxonomies'  		 => array( 'category', 'post_tag' ),
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'comments' ),
	);

	register_post_type( 'family', $args );
}



function testimonials_register() {
	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name', 'understrap' ),
		'singular_name'      => _x( 'Testimonials item', 'post type singular name', 'understrap' ),
		'menu_name'          => _x( 'Testimonials', 'admin menu', 'understrap' ),
		'name_admin_bar'     => _x( 'Testimonials', 'add new on admin bar', 'understrap' ),
		'add_new'            => _x( 'Add New Testimonials item', 'Team member', 'understrap' ),
		'add_new_item'       => __( 'Add New Testimonials item', 'understrap' ),
		'new_item'           => __( 'New Testimonials item', 'understrap' ),
		'edit_item'          => __( 'Edit Testimonials item', 'understrap' ),
		'view_item'          => __( 'View Testimonials item', 'understrap' ),
		'all_items'          => __( 'All Testimonials item', 'understrap' ),
		'search_items'       => __( 'Search Testimonials item', 'understrap' ),
		'parent_item_colon'  => __( 'Parent Testimonials item:', 'understrap' ),
		'not_found'          => __( 'No Testimonials item found.', 'understrap' ),
		'not_found_in_trash' => __( 'No Testimonials item found in Trash.', 'understrap' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'This is a list of Testimonials item.', 'understrap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonials' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'taxonomies'  		 => array( 'category', 'post_tag' ),
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'comments' ),
	);

	register_post_type( 'testimonials', $args );
}

function project_register() {
	$labels = array(
		'name'               => _x( 'Project', 'post type general name', 'understrap' ),
		'singular_name'      => _x( 'Project item', 'post type singular name', 'understrap' ),
		'menu_name'          => _x( 'Project', 'admin menu', 'understrap' ),
		'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'understrap' ),
		'add_new'            => _x( 'Add New Project item', 'Team member', 'understrap' ),
		'add_new_item'       => __( 'Add New Project item', 'understrap' ),
		'new_item'           => __( 'New Project item', 'understrap' ),
		'edit_item'          => __( 'Edit Project item', 'understrap' ),
		'view_item'          => __( 'View Project item', 'understrap' ),
		'all_items'          => __( 'All Project item', 'understrap' ),
		'search_items'       => __( 'Search Project item', 'understrap' ),
		'parent_item_colon'  => __( 'Parent Project item:', 'understrap' ),
		'not_found'          => __( 'No Project item found.', 'understrap' ),
		'not_found_in_trash' => __( 'No Project item found in Trash.', 'understrap' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'This is a list of Project item.', 'understrap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'project' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'taxonomies'  		 => array( 'category', 'post_tag' ),
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'comments' ),
	);

	register_post_type( 'project', $args );
}