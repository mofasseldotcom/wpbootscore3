  <!-- Portfolio Section Starts -->
  <section id="portfolio" class="">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">

          <nav class="portfolio-filter">
            <?php $terms = get_terms('wpbs_portflio_filter'); 
              //var_dump($terms);
            ?>
            <ul class="nav navbar-nav">
              <li class="filter" data-filter="all">Show All</li>
              <?php foreach ($terms as $term): ?>                
                <li class="filter" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>
              <?php endforeach ?>
              
            </ul>
          </nav>

        </div>

        <div id="portfolio-items">
<?php $args = array (
      'post_type' => 'wpbs_portfolio',
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
      'order' => 'DESC',
  );
  $portflio_query = new WP_Query($args);
  
  if ( $portflio_query->have_posts() ) :
?>

  <?php while ( $portflio_query->have_posts() ) : $portflio_query->the_post(); ?>

<?php 
  $attachment_id = get_post_thumbnail_id(get_the_ID());
  $small_thumb = wp_get_attachment_image_src($attachment_id, 'portfolio_img', true);
  $big_img = wp_get_attachment_image_src($attachment_id, 'large', false);
  // echo "<pre>";
  // print_r($small_thumb);
  // echo "</pre>";
?>


  <div <?php post_class("mix portfolio-item col-sm-3"); ?>>
    <a href="<?php echo $big_img[0]; ?>">
    <img class="img-responsive" src="<?php echo $small_thumb[0]; ?>" width="<?php echo $small_thumb[1]; ?>" height="<?php echo $small_thumb[2]; ?>" alt="<?php the_title(); ?>">
    </a>
    <?php //the_post_thumbnail( 'portfolio_img', array('class'=>'img-responsive') ); ?>

    <h3 class="text-center"><?php the_title(); ?></h3>
  </div>

  <?php endwhile; ?>

<?php endif; wp_reset_query(); ?>
          

          <!-- <div class="mix portfolio-item col-sm-3 category-2">
            <img class="img-responsive" src="<?php //echo get_template_directory_uri(); ?>/images/project-2.jpg" alt="project">
            <h3 class="text-center">Lorem ipsum dolor sit amet.2</h3>
          </div>

          <div class="mix portfolio-item col-sm-3 category-1">
            <img class="img-responsive" src="<?php //echo get_template_directory_uri(); ?>/images/project-1.jpg" alt="project">
            <h3 class="text-center">Lorem ipsum dolor sit amet.3</h3>
          </div>

          <div class="mix portfolio-item col-sm-3 category-2">
            <img class="img-responsive" src="<?php //echo get_template_directory_uri(); ?>/images/project-2.jpg" alt="project">
            <h3 class="text-center">Lorem ipsum dolor sit amet.4</h3>
          </div>
        </div> -->

      </div>
    </div>
  </section>
  <!-- Portfolio Section Ends -->