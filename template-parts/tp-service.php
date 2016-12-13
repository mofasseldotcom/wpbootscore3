<section id="services" class="graybg">

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<header class="service-header text-center">
					<h1 class="section-title">
						Our Services
					</h1>
					<p class="section-description">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ipsum rerum pariatur unde, quam quos, molestiae quas cum, tempore aliquid officiis delectus. Modi, esse asperiores.
					</p>
				</header>
			</div>
<?php 
	global $post;


	// var_dump($post);
	$args = array (
			'post_type' => 'service',
			'posts_per_page' => -1,
			'service-cat' => 'scat1',
			'orderby' => 'menu_order',
			'order' => 'ASC',
	);
	$custom_query = get_posts($args);
?>

	<?php foreach ($custom_query as $post) : setup_postdata($post); ?>
<?php 

$service_icon =  get_post_meta(get_the_ID(), 'wpbs_service_icon', true); ?>
<div class="col-sm-4">
	<article class="service-item text-center">
		<header class="entry-header">

		<?php if($service_icon) : ?>
			<div class="service-icon entry-meta">
				<i class="fa fa-<?php echo $service_icon; ?> fa-5x"></i>
			</div><!-- .entry-meta -->
		<?php endif; ?>
			<a href="<?php the_permalink(); ?>">
				<h2 class="service-title entry-title">
					<?php the_title(); ?></h2>
				</a>
		</header><!-- .entry-header -->

		<div class="service-content entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->
	</article>
</div>

	<?php endforeach ?>

<?php wp_reset_query(); ?>

			
				
		</div>
	</div>

</section>