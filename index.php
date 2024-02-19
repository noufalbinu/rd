<?php get_header(); ?>
<!---------   BLOG CONTAINER   ---------->
<div class="blog-container">
    <div class="blog-header">
    	<h1>Wpadroit Blog</h1>
		<p>WordPress Tutorials, Tips, and Resources to Help Grow Your Business</p>
    </div>	
    <div class="blog-container-wrap container-width-1100">			
        <div class="blog-post-content">
		    <!-- POSTS LOOP -->
		    <div class='posts-loop' id='posts-loop'>
                <?php 
                if ( have_posts() ) : 
		        while ( have_posts() ) : the_post(); ?>	
		            <!-- POSTS LOOP SINGLE -->
		            <div class='posts-loop-single' id='posts-loop-single'>
					    <div class="blog-post-title" id='archive-post-title'>				
		    			    <h2 class='post-title'><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		    			</div><!--.post-header-->
		    			<div class='post-thumbnail-date-excerpt'>
		    		        <div class='post-thumbnail'>
		    		           <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) {
		    			       echo get_the_post_thumbnail($post->ID);} ?>
		    				</div>
		    			    
		    				<div id='excerpt'>
		    				    
		    					<div id='posts-date'>
									<?php the_time('F j, Y'); ?>
								</div>	
		    					<?php the_excerpt('');?>
		    				</div>
		    			</div>
		    		</div><!-- POSTS LOOP SINGLE END-->
		    	<?php
		        endwhile; ?>
		    	<!--.navigation-->
		    	<nav class="navigation index">
		    	    <div class="alignleft" id='older-posts'><i class="fas fa-chevron-left"></i><?php next_posts_link( 'Older Entries' ); ?></div>
		    	    <div class="alignright"id='newer-posts'><?php previous_posts_link( 'Newer Entries' ); ?><i class="fas fa-chevron-right"></i></div>
		    	</nav><?php 
	            else : 
		            _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
		        endif; ?> 
		    </div><!--------- END POSTS LOOP ------------------->
		</div>
		<div class="blog-post-sidebar-wrap">
            <?php get_sidebar(); ?>
        </div>
	</div> <!--------- END  BLOG POSTS CONTAINER---------->
	
</div> <!--------- END  BLOG CONTAINER   ---------->
<?php get_footer(); ?>


