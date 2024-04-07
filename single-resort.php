

<?php
function mypage_head() {
    echo '<link rel="stylesheet" type="text/css" href="'.plugin_dir_url( __FILE__ ) . '/package/template-style/package-style.css">'."\n";
}
add_action('wp_head', 'mypage_head');
?>
<?php
/*
Template Name: aaaaaaa
Template Post Type: portfolio
*/
get_header(); ?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/themes.css"/>

<div class="blog-header">
  <h1><?php the_title(); ?></h1>
	<p>WordPress Tutorials, Tips, and Resources to Help Grow Your Business</p>
</div>

<div class="theme-single-container">
<div class="theme-single-container-wrap container-width-1100">
  <div class="theme-container">
    <div class="excerpt-image"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' );  } ?></div>
    <div class="features">
        <?php
         $terms = wp_get_post_terms( $post->ID, 'features');
                 foreach($terms as $term) {
             echo "<a href='".get_term_link($term)."' title='".$term->name."'>".$term->name."</a>";
         }
         echo "</span>"; ?>
      </div>
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="">
        <div class="content-here">
          <?php  the_content();  ?>
        </div>
      </div>
      
    <?php endwhile; ?>
    <?php
      $icons = apply_filters( 'taxonomy-images-list-the-terms', '', array(
        'before'       => '<div class="my-custom-class-name">',
        'after'        => '</div>',
        'before_image' => '<span>',
        'after_image'  => '</span>',
        'image_size'   => 'detail',
        'taxonomy'     => 'post_tag',
      ) );
      print_r($icons);
      if ( ! empty( $icons ) ) {
      	print '<ul>';
      	foreach ( (array) $icons as $icon ) {
          echo wp_get_attachment_image( get_the_ID(), array('700', '600'), "", array( "class" => "img-responsive" ) ); 
      		print '<li><a href="' . esc_url( get_term_link( $icon, $icon->taxonomy ) ) . '">' . wp_get_attachment_image( $icon->image_id, 'detail' ) . '</a></li>';
      	}
      	print '</ul>';
      } ?>

<?php comments_template(); ?>
  </div>
  <div class="theme-sidebar">
    <div class="project-details">
    <b class="theme-details-title">Property Details</b>
      <p><span class="dashicons dashicons-businessman"></span> Location: <?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_author', true ) ); ?></p>
      <p><span class="dashicons dashicons-admin-appearance"></span> Price Range: <?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_published_date', true ) ); ?></p>
      <p><span class="dashicons dashicons-admin-links"></span> Website:  <?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_price', true ) ); ?></p>
    </div>
    <div class="project-buttons">
      <a class="download-cta cta-free" href="<?php echo esc_attr( get_post_meta( get_the_ID(), 'free_download', true ) ); ?>">BOOK NOW</a>
      <a class="download-cta cta-pro" href="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_author', true ) ); ?>">CALL NOW</a>
      <a class="download-cta cta-doc" href="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_author', true ) ); ?>">Installation & Setup Guide</a>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include (TEMPLATEPATH . '/footer.php'); ?>
<!-- Footer -->







