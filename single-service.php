<?php
/**
 * The template for displaying all single posts.
 *
 * @package WPBootScore
 */

get_header(); ?>


	<div id="primary" class="content-area col-sm-8">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

$cmb_test =  get_post_meta(get_the_ID(), 'wpbs_cmb_test', true); 


// var_dump($cmb_test);

    foreach ( (array) $cmb_test as $attachment_id => $attachment_url ) {
        echo '<div class="file-list-image">';
        echo wp_get_attachment_image( $attachment_id );
        echo '</div>';
    }

if ( $cmb_test == 'custom' ) {

} elseif ( $cmb_test == 'standard' ) {

} else {

}

			get_template_part( 'template-parts/content', get_post_format() );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
