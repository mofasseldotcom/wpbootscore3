<!-- Testimonial Section Starts -->
    <section id="testimonial" class="graybg text-center">
      <div class="container-fluid">
        <h2 class="text-center">Testimonial</h2>
        <div class="row">

          <div class="col-sm-8 col-sm-offset-2">
<?php $args = array (
      'post_type' => 'wpbs_testimonial',
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
      'order' => 'DESC',
  );
  $testimonial_query = new WP_Query($args);
  
  if ( $testimonial_query->have_posts() ) :
?>
<!-- testimonial -->
    <div id="testimonial-carousel" class="owl-carousel owl-theme">
  
  <?php while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
  <?php $designation = get_post_meta(get_the_ID(), 'wpbs_testi_designation', true); ?>
    <div class="item">
      <?php the_content(); ?>
      <div class="img-circle">
        <?php the_post_thumbnail( 'thumbnail' ); ?>
      </div>
      <h3><?php the_title(); ?></h3>
      <h4><?php echo $designation; ?></h4>
    </div>

  <?php endwhile; ?>

<?php endif; wp_reset_query(); ?>

  </div>
  <!-- /#testimonial-logo -->

        </div><!-- /.col-sm-12 -->

      </div>

    </div>
  </section> 
  <!-- Testimonial Section Starts -->