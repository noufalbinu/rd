<!-- Header --><?php include (TEMPLATEPATH . '/header.php'); ?> <!-- End Header -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page_templates/base.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page_templates/news-single.css"/>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<style>
.column {
 background: url('img/our-network-bg.jpg')
}
</style>
<?php $thumb = get_the_post_thumbnail_url(); ?>
<!-- Banner Section -->
<div class="banner" style="background-image: url('<?php echo $thumb;?>')">
    <div class="center-content">
        <h1><?php wp_title(''); ?></h1>
        <p>Lorem ipsum dolor sit amet consectetur 
            adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam
		</p>
    </div>
</div>
<!-- Banner Section- EEND -->


<!-- Container -->
<div class="container">
    <!-- middle content area -->
    <h1 class="center-text"><?php the_title(); ?></h1>
    <!-- WordPress Loop -->
    <div class="blogpostwrapper">
        <?php if (have_posts()) : ?>
            <div class="date-tag-container"><p class="datee"><?php the_time('F jS') ?>, <?php the_time('Y') ?> | <p class="tagss"><?php the_tags( '', '', '<br />' ); ?></div>
           <?php while (have_posts()) : the_post(); ?>
               <div class="blogpost"><?php the_content(); ?></div>
           <?php endwhile; ?>
           <?php else : ?>
           <h6 class="center">Not Found</h6>
           <p class="center">Sorry, but you are looking for something that isn't here.</p>
           <?php include (TEMPLATEPATH . "/searchform.php"); ?>
        <?php endif; ?>
    </div>
   <!-- End WordPress Loop -->
   <h2>Other news</h2>

</div>
<div class="other-news">
<?php
    $recent_posts = wp_get_recent_posts(
        array(
           'post_type'       =>  'news',
           'posts_per_page'  => 3,
        )
    );
    foreach( $recent_posts as $recent ){
        echo '<div class="recent-news-container"><div class="recent-news-thumbnail">' . get_the_post_thumbnail($recent["ID"]) . '</div> ';
        echo '<div class="title-text-link"><a class="recent-link" href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' . $recent["post_title"].'</a>';  
        echo '' . the_excerpt('') . '</div></div>';  
    }
?>
</div>
<!-- Footer -->
<?php include (TEMPLATEPATH . '/footer.php'); ?> 
<!-- Footer -->