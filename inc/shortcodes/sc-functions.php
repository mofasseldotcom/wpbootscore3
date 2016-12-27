<?php
// Shortcode [wpbs_portfolio] support
function wpbs_portfolio_shortcode($atts, $content=null){
  extract( $atts = shortcode_atts(
    array(
      'order'   => 'DESC',
      ), $atts, 'wpbs_portfolio' ) );
  ob_start();
?>
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
      'order' => $order,
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

<?php endif; wp_reset_postdata(); ?>

      </div>
    </div>
  </section>
<?php
  return ob_get_clean();
}
add_shortcode('wpbs_portfolio', 'wpbs_portfolio_shortcode');



// Shortcode [wpbs_button] support
function wpbs_button_shortcode($atts, $content=null){
  extract( $atts = shortcode_atts(
    array(
      'link'      => 'google.com',
      ), $atts, 'wpbs_button' ) );
  ob_start();
?>
<a href="<?php echo esc_url($link); ?>">
<button type="button" class="btn btn-success"><?php echo $content; ?></button>
</a>
<?php
  return ob_get_clean();
}
add_shortcode('wpbs_button', 'wpbs_button_shortcode');



// Shortcode [wpbs_row] support
function wpbs_row_shortcode($atts, $content=null){
  extract( $atts = shortcode_atts(
    array(
      ''      => '',
      ), $atts, 'wpbs_row' ) );
  ob_start();
?>
<div class="row">

<?php echo do_shortcode($content); ?>

</div>
<?php
  return ob_get_clean();
}
add_shortcode('wpbs_row', 'wpbs_row_shortcode');


// Shortcode [wpbs_col] support
function wpbs_col_shortcode($atts, $content=null){
  extract( $atts = shortcode_atts(
    array(
      'col'   => '',
      ), $atts, 'wpbs_col' ) );
  ob_start();
?>
<div class="<?php echo $col; ?>">
  <?php echo do_shortcode($content); ?>
</div>
<?php
  return ob_get_clean();
}
add_shortcode('wpbs_col', 'wpbs_col_shortcode');


// Shortcode [wpbs_section] support
function wpbs_section_shortcode($atts, $content=null){
  extract( $atts = shortcode_atts(
    array(
      'section_title'   => '',
      'section_bg'  => '',
      ), $atts, 'wpbs_section' ) );
  ob_start();
?>
<style>
  .gray {
    background: gray;
    color: white;
    padding: 15px;
  }
  .red {
    background: red;
    color: white;
    padding: 15px;
  }
</style>
<div class="clear"></div>
<div class="section <?php echo $section_bg; ?>">
  <h2 class="section-title"><?php echo $section_title; ?></h2>
  <div class="section-desc"><?php echo $content; ?></div>
</div>
<?php
  return ob_get_clean();
}
add_shortcode('wpbs_section', 'wpbs_section_shortcode');


// Shortcode [wpbs_modal] support
function wpbs_modal_shortcode($atts, $content=null){
  extract( $atts = shortcode_atts(
    array(
      'btn_title'       => '',
      'title'       => '',
      ), $atts, 'wpbs_modal' ) );
  ob_start();
?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  <?php echo $btn_title; ?>
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $title; ?></h4>
      </div>
      <div class="modal-body">
        <?php echo $content; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php
  return ob_get_clean();
}
add_shortcode('wpbs_modal', 'wpbs_modal_shortcode');


// Shortcode [wpbs_accordion] support
function wpbs_accordion_shortcode($atts, $content=null){
  extract( $atts = shortcode_atts(
    array(
      ''      => '',
      ), $atts, 'wpbs_accordion' ) );
  ob_start();
?>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  
</div>
<?php
  return ob_get_clean();
}
add_shortcode('wpbs_accordion', 'wpbs_accordion_shortcode');


// Shortcode [wpbs_line_break] support
function wpbs_line_break_shortcode($atts, $content=null){
  extract( $atts = shortcode_atts(
    array(
      'height'      => '30',
      ), $atts, 'wpbs_line_break' ) );
  ob_start();
?>
<div style="height: <?php echo $height; ?>px;"></div>
<?php
  return ob_get_clean();
}
add_shortcode('wpbs_line_break', 'wpbs_line_break_shortcode');


/**
* Fixing issues of unexpected p or br tag around shortcodes
**/
if( !function_exists('wpbootscore_fix_shortcodes') ) {
  function wpbootscore_fix_shortcodes($content){   
    $array = array (
      '<p>[' => '[', 
      ']</p>' => ']', 
      ']<br />' => ']'
    );
    $content = strtr($content, $array);
    return $content;
  }
  add_filter('the_content', 'wpbootscore_fix_shortcodes');
}

/**
* Shortcode Support in various places
**/
add_filter( 'the_excerpt', 'do_shortcode');
add_filter( 'widget_text', 'do_shortcode' );
add_filter( 'comment_text', 'do_shortcode' );



/**
* Load Shortcode mce-buttons Support File.
**/
require get_template_directory() . '/inc/shortcodes/mce-button/mce-functions.php';



