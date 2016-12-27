<?php
/**
 * Template Name: Home Page
 *
 *
 * @package WPBootScore
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

<?php get_template_part('template-parts/tp-service'); ?>
<?php get_template_part('template-parts/tp-portfolio'); ?>
<?php get_template_part('template-parts/tp-testimonial'); ?>
<?php get_template_part('template-parts/tp-brand'); ?>
<?php get_template_part('template-parts/tp-contact'); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
