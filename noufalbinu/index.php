<?php get_header(); ?>


<!---------   c1   ---------->	
 <div id="aboutc">
	<div id="about">
		<div class="first">
            <h1 class='archive-h1'><?php wp_title(''); ?></h1>
            <div class="recent-updates">
	            <?php if ( have_posts() ) : ?>
	           	<?php while ( have_posts() ) : the_post(); ?>
	               <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	               	   <div class="post-header"><h2 class='post-title'><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div><!--.post-header-->
	               	   <div class="entry clear">
                             <div class='post-thumbnail'><?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { echo get_the_post_thumbnail($post->ID);} ?></div>
                             <?php the_excerpt('<span class="moretext">...on the edge of your seat? Click here to solve the mystery.</span>'); ?>
	           		   </div>
                    </div><!-- .post-->
		        <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
			    <nav class="navigation index">
			    	<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
			    	<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
			    </nav><!--.navigation-->
			</div><!-- end middle content area -->		
		    <?php else : endif; ?>
	    </div>
		<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
	</div>
   <!-- end middle content area -->
   
</div>
 
<!-- Footer -->
<?php include (TEMPLATEPATH . '/footer.php'); ?>
<!-- Footer -->

