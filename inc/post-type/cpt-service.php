<?php

/****************************************************
* Register service post type
*****************************************************/
$labels = array(
	'name'                => _x( 'Services', 'Post Type General Name', 'wpbootscore' ),
	'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'wpbootscore' ),
	'all_items'           => __( 'All Services', 'wpbootscore' ),
	'view_item'           => __( 'View Service', 'wpbootscore' ),
	'add_new_item'        => __( 'Add New Service', 'wpbootscore' ),
	'add_new'             => __( 'Add New Service ', 'wpbootscore' ),
	'edit_item'           => __( 'Edit Service', 'wpbootscore' ),
	'update_item'         => __( 'Update Service', 'wpbootscore' ),
	'search_items'        => __( 'Search Services', 'wpbootscore' ),
	'not_found'           => __( 'Service Not found', 'wpbootscore' ),
	'not_found_in_trash'  => __( 'Service Not found in Trash', 'wpbootscore' ),
);
$args = array(
	'label'               => __( 'Service', 'wpbootscore' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor', 'page-attributes', ),
	'public'              => true,
	'show_in_menu'        => true,
	'menu_position'       => 21,
	'menu_icon'           => 'dashicons-smiley',
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'rewrite'             => array( 'slug' => 'service' ),
);
register_post_type( 'service', $args );


/****************************************************
* Register custom taxonomy for service post type
*****************************************************/

$labels = array(
	'name'					=> _x( 'Service Category', 'Taxonomy General Name', 'wpbootscore' ),
	'singular_name'			=> _x( 'Service Category', 'Taxonomy Singular Name', 'wpbootscore' ),
	'add_new_item'			=> __( 'Add New Service Category', 'wpbootscore' ),
	'edit_item'				=> __( 'Edit Service Category', 'wpbootscore' ),
	'update_item'			=> __( 'Update Service Category', 'wpbootscore' ),
	'add_or_remove_items'	=> __( 'Add or remove Service Category', 'wpbootscore' ),
);

$args = array(
	'labels'            => $labels,
	'public'            => true,
	'hierarchical'      => true,
	'rewrite'             => array( 'slug' => 'service-cat' ),
);

register_taxonomy( 'service-cat', array( 'service' ), $args );
