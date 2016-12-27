<?php


/****************************************************
* Register feature post type
*****************************************************/
$labels = array(
	'name'                => _x( 'Slides', 'Post Type General Name', 'wpbootscore' ),
	'singular_name'       => _x( 'Slide', 'Post Type Singular Name', 'wpbootscore' ),
	'all_items'           => __( 'All Slides', 'wpbootscore' ),
	'view_item'           => __( 'View Slide', 'wpbootscore' ),
	'add_new_item'        => __( 'Add New Slide', 'wpbootscore' ),
	'add_new'             => __( 'Add New Slide ', 'wpbootscore' ),
	'edit_item'           => __( 'Edit Slide', 'wpbootscore' ),
	'update_item'         => __( 'Update Slide', 'wpbootscore' ),
	'search_items'        => __( 'Search Slides', 'wpbootscore' ),
	'not_found'           => __( 'Slide Not found', 'wpbootscore' ),
	'not_found_in_trash'  => __( 'Slide Not found in Trash', 'wpbootscore' ),
);
$args = array(
	'label'               => __( 'Slide', 'wpbootscore' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', ),
	'public'              => true,
	'show_in_menu'        => true,
	'menu_position'       => 10,
	'menu_icon'           => 'dashicons-slides',
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'rewrite'             => array( 'slug' => 'slide' ),
);
register_post_type( 'wpbs_slide', $args );
