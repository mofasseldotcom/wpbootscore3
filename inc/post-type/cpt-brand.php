<?php

/****************************************************
* Register wpbs_brand post type
*****************************************************/
$labels = array(
	'name'                => _x( 'Brands', 'Post Type General Name', 'wpbootscore' ),
	'singular_name'       => _x( 'Brand', 'Post Type Singular Name', 'wpbootscore' ),
	'all_items'           => __( 'All Brands', 'wpbootscore' ),
	'view_item'           => __( 'View Brand', 'wpbootscore' ),
	'add_new_item'        => __( 'Add New Brand', 'wpbootscore' ),
	'add_new'             => __( 'Add New Brand ', 'wpbootscore' ),
	'edit_item'           => __( 'Edit Brand', 'wpbootscore' ),
	'update_item'         => __( 'Update Brand', 'wpbootscore' ),
	'search_items'        => __( 'Search Brands', 'wpbootscore' ),
	'not_found'           => __( 'Brand Not found', 'wpbootscore' ),
	'not_found_in_trash'  => __( 'Brand Not found in Trash', 'wpbootscore' ),
);
$args = array(
	'label'               => __( 'Brand', 'wpbootscore' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'thumbnail', 'page-attributes', ),
	'public'              => true,
	'show_in_menu'        => true,
	'menu_position'       => 10,
	'menu_icon'           => 'dashicons-smiley',
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'rewrite'             => array( 'slug' => 'brand' ),
);
register_post_type( 'wpbs_brand', $args );
