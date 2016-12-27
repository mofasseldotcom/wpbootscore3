<!-- Slider Starts -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
<?php $args = array (
      'post_type' => 'wpbs_slide',
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
      'order' => 'DESC',
  );
  $slide_query = new WP_Query($args);
  
  if ( $slide_query->have_posts() ) :
?>
        <!-- Indicators -->
        <ol class="carousel-indicators">
        
        <?php while ( $slide_query->have_posts() ) : $slide_query->the_post(); ?>
          <?php $cp = $slide_query->current_post; ?>

          <li data-target="#myCarousel" data-slide-to="<?php echo $cp; ?>" class="<?php echo $cp==0 ? 'active' : ''; ?>"></li>
          <?php endwhile; ?>

        </ol>

        <div class="carousel-inner" role="listbox">


  <?php while ( $slide_query->have_posts() ) : $slide_query->the_post(); ?>
<?php $cp = $slide_query->current_post; ?>

<div class="item <?php echo $cp==0 ? 'active' : ''; ?>">
    <?php the_post_thumbnail( 'slide_img' ); ?>    
    <div class="container">
      <div class="carousel-caption">
        <?php the_content(); ?>
      </div>
    </div>
  </div>

  <?php endwhile; ?>

<?php endif; wp_reset_postdata(); ?>

          

        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>

      </div> <!-- /.carousel -->
      <!-- Slider Ends -->