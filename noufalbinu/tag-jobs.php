<?php get_header(); ?>


<!---------   c1   ---------->	
 <div id="aboutc">			
  <div id="about">
  <div class="first">



<div class="recent-updates">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="post-header">
					<div class="date"><?php the_time( 'M j y' ); ?></div>
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<div class="author"><?php the_author(); ?></div>
				</div><!--.post-header-->
				<div class="entry clear">

					<?php the_excerpt(); ?>
					<?php edit_post_link(); ?>
					<?php wp_link_pages(); ?>
				</div><!--. entry-->
				<footer class="post-footer">
					<div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
				</footer><!--.post-footer-->
			</div><!-- .post-->
			



		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
			<nav class="navigation index">
				<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
				<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
			</nav><!--.navigation-->
			<!-- end middle content area --></div>

			
</div>
<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
			</div>
		<?php else : ?>
	<?php endif; ?>
</div><!--.content-->
<?php get_footer(); ?>