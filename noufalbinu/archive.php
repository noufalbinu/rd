<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div id="container">
	<div id="store-front">
<?php if ( $products->have_posts() ) : $i = 1; ?>
	<?php if ( get_theme_mod( 'shoppette_edd_store_archives_title' ) || get_theme_mod( 'shoppette_edd_store_archives_description' ) ) : ?>
		<div class="store-info">
			<?php if ( get_theme_mod( 'shoppette_edd_store_archives_title' ) ) : ?>
				<h1 class="store-title"><?php echo get_theme_mod( 'shoppette_edd_store_archives_title' ); ?></h1>
			<?php endif; ?>
			<?php if ( get_theme_mod( 'shoppette_edd_store_archives_description' ) ) : ?>
				<div class="store-description">
					<?php echo wpautop( get_theme_mod( 'shoppette_edd_store_archives_description' ) ); ?>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>
	<div class="product-grid clear">
		<?php while ( $products->have_posts() ) : $products->the_post(); ?>
			
			<div class="threecol product">
				<div class="product-image">
					<?php if ( has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'product-img', array( 'class' => 'product-img' ) ); ?>
						</a>
					<?php } ?>
				</div>
				<div class="product-description">
					<a class="product-title" href="<?php the_permalink(); ?>">
						<?php the_title( '<h3>', '</h3>' ); ?>
					</a>
					<?php if ( get_theme_mod( 'shoppette_download_description' ) != 1 ) : // show downloads description? ?>
						<div class="product-info">
							<?php the_excerpt(); ?>
						</div>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'shoppette_product_view_details' ) ) : ?>
						<a class="view-details" href="<?php the_permalink(); ?>"><?php echo get_theme_mod( 'shoppette_product_view_details' ); ?></a>
					<?php endif; ?>
				</div>
			</div>

			<?php $i+=1; ?>
		<?php endwhile; ?>
	</div>			
	<div class="store-pagination">
		<?php 					
			$big = 999999999; // need an unlikely intege					
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, $current_page ),
				'total' => $products->max_num_pages,
				'prev_text' => '<i class="fa fa-arrow-circle-left"></i> Previous',
				'next_text' => 'Next <i class="fa fa-arrow-circle-right"></i>'
			) );
		?>
	</div>
<?php else : ?>
	<div class="store-404">
		<h2 class="center"><?php _e( 'Not Found', 'shoppette' ); ?></h2>
		<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'shoppette' ); ?></p>
	</div>
<?php endif; ?>
</div>
</div><!-- #container -->

