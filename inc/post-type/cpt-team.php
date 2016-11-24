<?php


/****************************************************
* Register team post type
*****************************************************/
$labels = array(
	'name'                => _x( 'Team', 'Post Type General Name', 'wpbootscore' ),
	'singular_name'       => _x( 'Team', 'Post Type Singular Name', 'wpbootscore' ),
	'all_items'           => __( 'All Teams', 'wpbootscore' ),
	'view_item'           => __( 'View Team', 'wpbootscore' ),
	'add_new_item'        => __( 'Add New Team', 'wpbootscore' ),
	'add_new'             => __( 'Add New Team ', 'wpbootscore' ),
	'edit_item'           => __( 'Edit Team', 'wpbootscore' ),
	'update_item'         => __( 'Update Team', 'wpbootscore' ),
	'search_items'        => __( 'Search Teams', 'wpbootscore' ),
	'not_found'           => __( 'Team Not found', 'wpbootscore' ),
	'not_found_in_trash'  => __( 'Team Not found in Trash', 'wpbootscore' ),
);
$args = array(
	'label'               => __( 'Team', 'wpbootscore' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes', ),
	'public'              => true,
	'show_in_menu'        => true,
	'menu_position'       => 22,
	'menu_icon'           => 'dashicons-smiley',
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'rewrite'             => array( 'slug' => 'team' ),
);
register_post_type( 'team', $args );

/****************************************************
* Register custom taxonomy for team post type
*****************************************************/

$labels = array(
	'name'					=> _x( 'Skills', 'Taxonomy General Name', 'wpbootscore' ),
	'singular_name'			=> _x( 'Skill', 'Taxonomy Singular Name', 'wpbootscore' ),
	'add_new_item'			=> __( 'Add New Skill', 'wpbootscore' ),
	'edit_item'				=> __( 'Edit Skill', 'wpbootscore' ),
	'update_item'			=> __( 'Update Skill', 'wpbootscore' ),
	'add_or_remove_items'	=> __( 'Add or remove Skill', 'wpbootscore' ),
);

$args = array(
	'labels'            => $labels,
	'public'            => true,
	'hierarchical'      => true,
	'rewrite'             => array( 'slug' => 'skill' ),
);

register_taxonomy( 'skill', array( 'team' ), $args );

/****************************************************
* Register custom taxonomy for team post type
*****************************************************/

$labels = array(
	'name'					=> _x( 'Team Tag', 'Taxonomy General Name', 'wpbootscore' ),
	'singular_name'			=> _x( 'Team Tag', 'Taxonomy Singular Name', 'wpbootscore' ),
	'add_new_item'			=> __( 'Add New Team Tag', 'wpbootscore' ),
	'edit_item'				=> __( 'Edit Team Tag', 'wpbootscore' ),
	'update_item'			=> __( 'Update Team Tag', 'wpbootscore' ),
	'add_or_remove_items'	=> __( 'Add or remove Team Tag', 'wpbootscore' ),
);

$args = array(
	'labels'            => $labels,
	'public'            => true,
	'hierarchical'      => false,
	'rewrite'             => array( 'slug' => 'team-tag' ),
);

register_taxonomy( 'team-tag', array( 'team' ), $args );




