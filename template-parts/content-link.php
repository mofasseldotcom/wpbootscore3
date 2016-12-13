<?php
/**
 * Template part for displaying posts.
 *
 * @package WPBootScore
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('link-post-format'); ?>>


	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
