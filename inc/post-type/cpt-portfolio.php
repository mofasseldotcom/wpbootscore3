<?php


/****************************************************
* Register wpbs_portfolio post type
*****************************************************/
$labels = array(
	'name'                => _x( 'Portfolios', 'Post Type General Name', 'wpbootscore' ),
	'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'wpbootscore' ),
	'all_items'           => __( 'All Portfolios', 'wpbootscore' ),
	'view_item'           => __( 'View Portfolio', 'wpbootscore' ),
	'add_new_item'        => __( 'Add New Portfolio', 'wpbootscore' ),
	'add_new'             => __( 'Add New Portfolio ', 'wpbootscore' ),
	'edit_item'           => __( 'Edit Portfolio', 'wpbootscore' ),
	'update_item'         => __( 'Update Portfolio', 'wpbootscore' ),
	'search_items'        => __( 'Search Portfolios', 'wpbootscore' ),
	'not_found'           => __( 'Portfolio Not found', 'wpbootscore' ),
	'not_found_in_trash'  => __( 'Portfolio Not found in Trash', 'wpbootscore' ),
);
$args = array(
	'label'               => __( 'Portfolio', 'wpbootscore' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', ),
	'public'              => true,
	'show_in_menu'        => true,
	'menu_position'       => 10,
	'menu_icon'           => 'dashicons-smiley',
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'rewrite'             => array( 'slug' => 'portfolio' ),
);
register_post_type( 'wpbs_portfolio', $args );

/****************************************************
* Register custom taxonomy for wpbs_portfolio post type
*****************************************************/

$labels = array(
	'name'					=> _x( 'Portfolio Filters', 'Taxonomy General Name', 'wpbootscore' ),
	'singular_name'			=> _x( 'Portfolio Filter', 'Taxonomy Singular Name', 'wpbootscore' ),
	'add_new_item'			=> __( 'Add New Portfolio Filter', 'wpbootscore' ),
	'edit_item'				=> __( 'Edit Portfolio Filter', 'wpbootscore' ),
	'update_item'			=> __( 'Update Portfolio Filter', 'wpbootscore' ),
	'add_or_remove_items'	=> __( 'Add or remove Portfolio Filter', 'wpbootscore' ),
);

$args = array(
	'labels'            => $labels,
	'public'            => true,
	'hierarchical'      => true,
	'rewrite'             => array( 'slug' => 'portfolio-filter' ),
);

register_taxonomy( 'wpbs_portflio_filter', array( 'wpbs_portfolio' ), $args );

