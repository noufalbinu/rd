<!-- Header --><?php include (TEMPLATEPATH . '/header.php'); ?> <!-- End Header -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page_templates/base.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page_templates/news.css"/>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<style>
.column {
 background: url('img/our-network-bg.jpg')
}
</style>
<!-- Banner Section -->
<div class="banner">
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
    <div class="row">
	    <?php if ( have_posts() ) : ?>
	    	<?php while ( have_posts() ) : the_post(); ?>
			<div class="column">
			    <div class='post-thumbnail'><?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) {echo get_the_post_thumbnail($post->ID);} ?></div>
	    	    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="date-tag-container"><p class="datee"><?php the_time('F jS') ?>, <?php the_time('Y') ?> | <p class="tagss"><?php the_tags( '', '', '<br />' ); ?></div>
	    	    	<h2 class='post-title'><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	    	    	<div class="entry clear">      
                        <?php the_excerpt(''); ?>
                    </div><!-- .post-->
			    </div>
			</div>
	    	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
	    	<nav class="navigation index">
	    		<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
	    		<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
	    	</nav><!--.navigation-->
	    	<?php else : ?>
	    <?php endif; ?>
	</div>
</div>


<?php include (TEMPLATEPATH . '/footer.php'); ?>


