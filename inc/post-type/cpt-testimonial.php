<?php

/****************************************************
* Register wpbs_testimonial post type
*****************************************************/
$labels = array(
	'name'                => _x( 'Testimonials', 'Post Type General Name', 'wpbootscore' ),
	'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'wpbootscore' ),
	'all_items'           => __( 'All Testimonials', 'wpbootscore' ),
	'view_item'           => __( 'View Testimonial', 'wpbootscore' ),
	'add_new_item'        => __( 'Add New Testimonial', 'wpbootscore' ),
	'add_new'             => __( 'Add New Testimonial ', 'wpbootscore' ),
	'edit_item'           => __( 'Edit Testimonial', 'wpbootscore' ),
	'update_item'         => __( 'Update Testimonial', 'wpbootscore' ),
	'search_items'        => __( 'Search Testimonials', 'wpbootscore' ),
	'not_found'           => __( 'Testimonial Not found', 'wpbootscore' ),
	'not_found_in_trash'  => __( 'Testimonial Not found in Trash', 'wpbootscore' ),
);
$args = array(
	'label'               => __( 'Testimonial', 'wpbootscore' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', ),
	'public'              => true,
	'show_in_menu'        => true,
	'menu_position'       => 10,
	'menu_icon'           => 'dashicons-smiley',
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'rewrite'             => array( 'slug' => 'testimonial' ),
);
register_post_type( 'wpbs_testimonial', $args );
