

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




<div id="aboutc"><div id="about">
<h1 class="portfolio-title"><?php the_title(); ?></h1>
<div id='main' class="portfolio-single-container">
<div class="package-container">


 <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="main-post-div">
                <div class="single-page-post-heading">
                </div>
                <div class="content-here">
                
                  <div class="project-details">
                    <p><span class="dashicons dashicons-businessman"></span> CLient Name: <?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_author', true ) ); ?></p>
                    <p><span class="dashicons dashicons-admin-appearance"></span> Technologies Used: <?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_published_date', true ) ); ?></p>
                    <p><span class="dashicons dashicons-admin-links"></span> Live Site Link:  <?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_price', true ) ); ?></p>
                  </div>
                  <?php  the_content();  ?>
                </div>

                </div>

            <?php endwhile; ?>
            </div>
            </div>
</div></div>

<!-- Footer -->
<?php include (TEMPLATEPATH . '/footer.php'); ?>
<!-- Footer -->







