<?php
/**
 * Metaboxes for wpbs_testimonial post type
 */
add_filter( 'cmb2_meta_boxes', 'wpbootscore_wpbs_testimonial_metaboxes' );
function wpbootscore_wpbs_testimonial_metaboxes(array $meta_boxes){
    $meta_boxes['wpbs_testimonial_metabox'] = array(
        'id'           => 'wpbs_testimonial_metabox',
        'title'        => __( 'Additional testimonial informations', 'wpbootscore' ),
        'object_types' => array( 'wpbs_testimonial', ),
        'fields'       => array(
            array(
                'name' => 'Designation of Person',
                'description' => __( 'Write Designation of the person here', 'wpbootscore' ),
                'id'   => 'wpbs_testi_designation',
                'type' => 'text',
            ),
        ),
    );
    return $meta_boxes;
}