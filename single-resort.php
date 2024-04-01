

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
    <div class="cta-container">
      <a class="download-cta cta-preview" href="<?php echo esc_attr( get_post_meta( get_the_ID(), 'cta_preview', true ) ); ?>">
        Live Preview
      </a>
      
      <div class="features">
        <?php
          $terms = get_the_terms( $post->ID , 'features' );
          foreach ( $terms as $term ) {
            $term;
          }
          ?>
         <p><?php  echo $term->name; ?></p>
      </div>
    </div>
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="">
        <div class="content-here">
          
          <?php  the_content();  ?>
          
        </div>
      </div>
      <?php comments_template(); ?>
    <?php endwhile; ?>
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







