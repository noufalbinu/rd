

<?php
function mypage_head() {
    echo '<link rel="stylesheet" type="text/css" href="'.plugin_dir_url( __FILE__ ) . '/package/template-style/package-style.css">'."\n";


}
add_action('wp_head', 'mypage_head');


?>

<?php
/*
Template Name: aaaaaaa
Template Post Type: page, packages
*/
get_header(); ?>






<div class="package-container">


 <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="main-post-div">
                <div class="single-page-post-heading">
                <h1><?php the_title(); ?></h1>
                </div>
                <div class="content-here">
                <?php  the_content();  ?>
                </div>
                
                </div>

            <?php endwhile; ?>
</div>





<!-- Footer -->
<?php include (TEMPLATEPATH . '/footer.php'); ?>
<!-- Footer -->







