<?php get_header(); ?>

<!-- MAIN -->
<div id="aboutc"><div id="about">
<h1 class="portfolio-title">Portfolio</h1>
<div id='main' class="portfolio-archive-container">

    <!--Gallary filter Links-->
    <div class="gallery-filter">
      <span class="filter-item active" data-filter="all">All</span>
      <?php $args = array('taxonomy' => 'projects','orderby' => 'name', 'order'   => 'ASC');
      
      $categories = get_categories($args);
       foreach($categories as $category) {
          echo '<span class="filter-item" data-filter="' . $category->term_id . '" >' . $category->name . '</span>';
       } 
       ?> 
		</div>   
    <!--Gallary Images-->
      <div class="masonry">
          <?php 
          
          if(have_posts()) : while(have_posts()) : the_post();
 

          $categoriess = get_the_terms( get_the_ID(), 'projects' );

          
          // get_the_terms returns false, a wp error, or an array of term objects.
          if ( $categoriess && ! is_wp_error( $categoriess ) ) { 
              foreach ( $categoriess as $categoryy ) {
                  // get_term_link requires taxonomy slug as the second parameter.
                  ?><div class="gallery-item <?php echo $categoryy->term_id;  ?>">
                         <a href="<?php the_permalink() ?>" rel="bookmark"><span class="shadow-box"><b><?php the_title(); ?></b></span><?php if( has_post_thumbnail() ) { the_post_thumbnail( 'medium_large' );  } ?></a>
                    </div>
                <?php 
              }
          }

          
          
         endwhile; ?>
         </div>
        <div class="wpp-pagination">
         <!-- Start the pagination functions after the loop. -->
         <div class="nav-previous alignleft"><?php next_posts_link( '<b>Next </b><img src="'.get_template_directory_uri() .'/assets/images/next.png">' ); ?></div>
         <div class="nav-next alignright"><?php previous_posts_link( '<img src="'.get_template_directory_uri() .'/assets/images/back.png"><b> Previous</b>' ); ?></div>
         <!-- End the pagination functions after the loop. -->  
         </div>      
         
         <?php else : ?>

          <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
        
        <?php endif; ?>
                    
</div></div>






<script src="<?php echo get_template_directory_uri(); ?>/assets/ei.js"></script>

<script>      
 
 const filterContainer = document.querySelector(".gallery-filter"),
 galleryItems = document.querySelectorAll(".gallery-item");

 filterContainer.addEventListener("click", (event) =>{
   if(event.target.classList.contains("filter-item")){
   	 // deactivate existing active 'filter-item'
   	 filterContainer.querySelector(".active").classList.remove("active");
   	 // activate new 'filter-item'
   	 event.target.classList.add("active");
   	 const filterValue = event.target.getAttribute("data-filter");
   	 galleryItems.forEach((item) =>{
       if(item.classList.contains(filterValue) || filterValue === 'all'){
       	item.classList.remove("hide");
       	 item.classList.add("show");
       }
       else{
       	item.classList.remove("show");
       	item.classList.add("hide");
       }
   	 });
   }
 });
</script>
<?php get_footer();?>