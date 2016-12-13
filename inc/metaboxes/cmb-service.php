<?php
/**
 * Metaboxes for service post type
 */
add_filter( 'cmb2_meta_boxes', 'wpbootscore_service_metaboxes' );
function wpbootscore_service_metaboxes(array $meta_boxes){
    $meta_boxes['service_metabox'] = array(
        'id'           => 'service_metabox',
        'title'        => __( 'Additional service informations', 'wpbootscore' ),
        'object_types' => array( 'service', ),
        'fields'       => array(
            array(
                'name' => 'Service Icon',
                'description' => __( 'Write/enter your service icon name here', 'wpbootscore' ),
                'id'   => 'wpbs_service_icon',
                'type' => 'text_small',
            ),
            array(
                'name' => 'Text URL Test',
                'description' => __( '', 'wpbootscore' ),
                'id'   => 'wpbs_cmb_test',
                    'type' => 'file_list',
    'preview_size' => array( 150, 150 ), // Default: array( 50, 50 )
    // Optional, override default text strings
    'text' => array(
        'add_upload_files_text' => 'Replacement', // default: "Add or Upload Files"
        'remove_image_text' => 'Replacement', // default: "Remove Image"
        'file_text' => 'Replacement', // default: "File:"
        'file_download_text' => 'Replacement', // default: "Download"
        'remove_text' => 'Replacement', // default: "Remove"
    ),
            ),
        ),
    );
    return $meta_boxes;
}