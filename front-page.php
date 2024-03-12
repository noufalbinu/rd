<?php include (TEMPLATEPATH . '/header.php'); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/fp-responsive.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/front-page.css"/>

<div class="fp-container">
    <div class="main-banner-wrap">
        <div class="main-banner container-width-1100">
            <div class="text-content">
                <h1>Explore Best Resorts & Hotels in Kerala</h1>
                <p>Create lasting memories in a vacation home designed for an extraordinary experience. This distinctive residence ensures each moment becomes a cherished part of your unforgettable trip. From thoughtful amenities to a unique ambiance, let this space elevate your travel, creating memories etched in your mind for years.</p>
                <div class="bnr-search">
                    <input class="search-input" placeholder="Search Resorts, Hotel & Camping" type="search">
                    <button class="search-button" placeholder="Search Themes" type="button">
                    <svg class="bnr-search-icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 24L20.2223 20.2156M22.3158 15.1579C22.3158 17.0563 21.5617 18.8769 20.2193 20.2193C18.8769 21.5617 17.0563 22.3158 15.1579 22.3158C13.2595 22.3158 11.4389 21.5617 10.0965 20.2193C8.75413 18.8769 8 17.0563 8 15.1579C8 13.2595 8.75413 11.4389 10.0965 10.0965C11.4389 8.75413 13.2595 8 15.1579 8C17.0563 8 18.8769 8.75413 20.2193 10.0965C21.5617 11.4389 22.3158 13.2595 22.3158 15.1579Z" stroke="white" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    </button>
                </div>
            </div>
            <div class="column bnr-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/adv.png" alt="">
            </div>
        </div>
    </div>
    <div class="get-it-now ">
        <h2 class="popular-locations">Popular Locations</h2>
        <div class="get-it-now-wrap  container-width-1100">
            <div class="big-cat">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>\assets\images\dummy-cat-banner-600-400.png" alt="">
            </div>
            <div class="medium-cat">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>\assets\images\dummy-cat-banner-600-400.png" alt="">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>\assets\images\dummy-cat-banner-600-400.png" alt="">
            </div>
            <div class="medium-cat">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>\assets\images\dummy-cat-banner-600-400.png" alt="">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>\assets\images\dummy-cat-banner-600-400.png" alt="">
            </div>
            <div class="medium-cat">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>\assets\images\dummy-cat-banner-600-400.png" alt="">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>\assets\images\dummy-cat-banner-600-400.png" alt="">
            </div>
            <div class="medium-cat">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>\assets\images\dummy-cat-banner-600-400.png" alt="">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>\assets\images\dummy-cat-banner-600-400.png" alt="">
            </div>
            
        </div>
    </div>
     <!-- RESORT POST CONTAINER -->
     <div id='main-container'>
        <div class="resources-container">
            <div class="resources container-width-1100">
                <h2>New Themes</h2>
                <div class="resourec-doc-wrap">
                    <div class='fp-resort-list'>
                         <?php 
                         $args = array(
                            'post_type'     => 'resort',
                            'posts_per_page' => 18, 
                            'order' => 'DESC' 
                        );
                        $rp = new WP_Query( $args );
                        if($rp->have_posts()) :
                        while($rp->have_posts()) : $rp->the_post();?>
                        

 
                        <div class='list'>
                           <div class='list-item'>
                               <div class="excerpt-image"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( array(300, 200) );  } ?></div>
                               <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></h3></a>
                           </div>
                        </div>
                        <?php endwhile; wp_reset_postdata(); endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MAIN CONTAINER -->
    <div id='main-container'>
        <div class="resources-container">
            <div class="resources container-width-1100">
                <h2>New Themes</h2>
                <div class="resourec-doc-wrap">
                    <div class='blog-resources'>
                       <div class='resources-wrap'>
                            <h3>Do You have plan for adventures trip</h3>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>\assets\images\adv.webp" alt="">
                            <p>Join our channel to receive thrilling details about adventure trips!</p>
                            <a class="cta cta-purple" href="#">Join Now</a>
                        </div>
                    </div>
                    <div class='sc'>
                         <?php 
                         $args = array(
                            'post_type'     => 'resort',
                            'posts_per_page' => 6, 
                            'order' => 'DESC' 
                        );
                        $rp = new WP_Query( $args );
                        if($rp->have_posts()) :
                        while($rp->have_posts()) : $rp->the_post();?>
                        

 
                        <div class='web'>
                           <div class='scub'>
                               <div class="excerpt-image"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( array(300, 200) );  } ?></div>
                               <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></h3></a>
                           </div>
                        </div>
                        <?php endwhile; wp_reset_postdata(); endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- MAIN END-->

<?php include (TEMPLATEPATH . '/footer.php'); ?>