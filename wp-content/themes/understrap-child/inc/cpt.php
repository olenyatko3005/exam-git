<?php

add_action( 'init', 'test_register' );
/**
 * Register a test post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function test_register() {
	$labels = array(
		'name'               => _x( 'test', 'post type general name', 'understrap' ),
		'singular_name'      => _x( 'test item', 'post type singular name', 'understrap' ),
		'menu_name'          => _x( 'test', 'admin menu', 'understrap' ),
		'name_admin_bar'     => _x( 'test', 'add new on admin bar', 'understrap' ),
		'add_new'            => _x( 'Add New test item', 'Team member', 'understrap' ),
		'add_new_item'       => __( 'Add New test item', 'understrap' ),
		'new_item'           => __( 'New test item', 'understrap' ),
		'edit_item'          => __( 'Edit test item', 'understrap' ),
		'view_item'          => __( 'View test item', 'understrap' ),
		'all_items'          => __( 'All test item', 'understrap' ),
		'search_items'       => __( 'Search test item', 'understrap' ),
		'parent_item_colon'  => __( 'Parent test item:', 'understrap' ),
		'not_found'          => __( 'No test item found.', 'understrap' ),
		'not_found_in_trash' => __( 'No test item found in Trash.', 'understrap' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'This is a list of test item.', 'understrap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'test' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'taxonomies'  		 => array( 'category', 'work', 'post_tag' ),
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'comments' ),
	);

	register_post_type( 'test', $args );
}
