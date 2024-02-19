<!-- Header --><?php include (TEMPLATEPATH . '/header.php'); ?> <!-- End Header -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page_templates/base.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page_templates/happening.css"/>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />

<!-- Banner Section -->
<div class="banner">
    <div class="center-content">
        <h1>What’s Happening</h1>
        <p>Lorem ipsum dolor sit amet consectetur 
            adipiscing eli<br>mattis sit phasellus mollis sit aliquam sit nullam</p>
    </div>
</div>
<!-- Banner Section- EEND -->
<!-- Our Project Section -->

  <div class="container">
      <div class="news-slide">
  	    <?php
        $args = array(
        'post_type'   => array('news'),
        'post_status' => 'publish',
        'posts_per_page' => 4
        );
        $new_post_loop = new WP_Query( $args );
        
        if ( $new_post_loop -> have_posts() ) : 
  	      while ( $new_post_loop -> have_posts() ) : $new_post_loop -> the_post();
        ?>
  			<div class="single-news-container">
        <div class='post-thumbnail'><?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) {echo get_the_post_thumbnail($post->ID);} ?></div>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  			    
  	    	    
  				<div class="date-tag-container"><p class="datee"><?php the_time('F jS') ?>, <?php the_time('Y') ?> | <p class="tagss"><?php the_tags( '', '', '<br />' ); ?></div>
  	    	    	<h2 class='post-title'><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  	    	    	<div class="entry clear">      
                          <?php the_excerpt('hhhh'); ?>
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
    <div class="status-container">
      <div class="status">  
        <div class="point" data-key="0"></div>
        <div class="stat" data-key="0"></div>
        <div class="stat" data-key="1"></div>
        <div class="stat" data-key="2"></div>
        <div class="stat" data-key="3"></div>
      </div>
    </div>
  </div>
</div>

<script>
  /*********************************
SLIDER  https://codepen.io/Dimboss/pen/mYGaqo : Inspired From

*********************************/
let slide=0, 
slides = document.querySelectorAll('.news-slide > .single-news-container');
let auto;
function startSl(){
 stopSl();
 slides[slide].classList.add("current_news");
 auto=setInterval(nextSl, 4000);
}
function stopSl(){
 clearInterval(auto);
}
function nextSl(){
  //video slide move next
  slides[slide].classList.remove("current_news");
  slide=(slide+1)%slides.length; //0+1=1 % 6
  slides[slide].classList.add("current_news");
  let pointer = document.querySelector(".point");
  pointer.dataset.current = slide; //change pointer data attribute value with slide
}

//Status Point Selector
let pointer = document.querySelector(".point");
const elStatus = Array.from(document.querySelectorAll('.status .stat'));
elStatus.forEach(stat => {
  //on mouse click change pointer, slide & text
  stat.addEventListener('click', () => {
    let vlg = stat.dataset.key; 
    slides[slide].classList.remove("current_news");
    slide = vlg;
    slides[slide].classList.add("current_news");  
    pointer.dataset.current = slide; //change pointer data attribute value with slide
  });
});
startSl();
</script>

<!-- Our Project Section- EEND -->
<!-- End WordPress Loop --></div><!-- End page Container -->
<!-- Footer --><?php include (TEMPLATEPATH . '/footer.php'); ?> <!-- Footer -->