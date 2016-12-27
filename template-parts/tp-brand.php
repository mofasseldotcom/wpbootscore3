  <!-- Brand Logo Section Starts -->
  <section id="brand-logo" class="">
    <div class="container-fluid">
      <h2 class="text-center">Brand</h2>
      <div class="row">

        <div class="col-sm-12">

         <!-- brand-logo -->
         <div id="brand-carousel" class="owl-carousel owl-theme">

<?php $args = array (
      'post_type' => 'wpbs_brand',
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
      'order' => 'DESC',
  );
  $brand_query = new WP_Query($args);
  
  if ( $brand_query->have_posts() ) :
?>

  <?php while ( $brand_query->have_posts() ) : $brand_query->the_post(); ?>

    <div class="item">
      <?php the_post_thumbnail( 'brand_img' ); ?>
    </div>

  <?php endwhile; ?>

<?php endif; wp_reset_query(); ?>
          

        </div>
        <!-- /#brand-logo -->

      </div><!-- /.col-sm-12 -->

    </div>

  </div>
</section> 
<!-- Brand Logo Section Starts -->