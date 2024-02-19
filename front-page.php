<?php include (TEMPLATEPATH . '/header.php'); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/fp-responsive.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/front-page.css"/>

<div class="fp-container">
    <div class="main-banner-wrap">
        <div class="main-banner container-width-1100">
            <div class="text-content">
                <h1>Where Innovation Fuses with Design to Breathe Life into Your WordPress Experience!</h1>
                <p>At WPadroit, we embody a dynamic and creative spirit, boasting a team of developers and designers who are genuinely passionate about curating extraordinary themes and plugins. Our mission is to transcend the ordinary and elevate your online presence to new heights.
                    Dedicated to delivering excellence in quality and user experience, we specialize in the art of WordPress theme and plugin development. Our goal is not merely to make your website functional, but to make it a visually stunning masterpiece that captivates and engages your audience.
                    Step into the realm of WPadroit, where your WordPress journey becomes a seamless blend of innovation and design, transforming your digital presence into a work of art.
                </p>
            </div>
            <div class="column"></div>
        </div>
    </div>
    <div class="get-it-now ">
        <div class="get-it-now-wrap  container-width-1100">
        <svg class="theme-icon" width="800px" height="800px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><rect x="0" fill="none" width="24" height="24"/><g><path d="M4 6c-1.105 0-2 .895-2 2v12c0 1.1.9 2 2 2h12c1.105 0 2-.895 2-2H4V6zm16-4H8c-1.105 0-2 .895-2 2v12c0 1.105.895 2 2 2h12c1.105 0 2-.895 2-2V4c0-1.105-.895-2-2-2zm-5 14H8V9h7v7zm5 0h-3V9h3v7zm0-9H8V4h12v3z"/></g></svg>
            <p>Find the perfect theme for your WordPress website. Choose from 10+  stunning designs with a 
                wide variety of features and customization options.</p>
            <a class="cta cta-white" href="#">Get Themes</a>
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
                            <h3>Get Free Video Slider</h3>
                            <svg class="resource-book" fill="#000000" width="800px" height="800px" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"><path d="M27.5 18c-.277 0-.5.223-.5.5v3c0 .277.223.5.5.5s.5-.223.5-.5v-3c0-.277-.223-.5-.5-.5zm0-5c-.277 0-.5.223-.5.5v3c0 .277.223.5.5.5s.5-.223.5-.5v-3c0-.277-.223-.5-.5-.5zm2 10h-2c-.277 0-.5.223-.5.5s.223.5.5.5h2c.277 0 .5-.223.5-.5s-.223-.5-.5-.5zm-2-15c-.277 0-.5.223-.5.5v3c0 .277.223.5.5.5s.5-.223.5-.5v-3c0-.277-.223-.5-.5-.5zm2-2h-2c-.277 0-.5.223-.5.5s.223.5.5.5h2c.277 0 .5-.223.5-.5s-.223-.5-.5-.5zm-27 12c.277 0 .5.223.5.5v3c0 .277-.223.5-.5.5s-.5-.223-.5-.5v-3c0-.277.223-.5.5-.5zm0-5c.277 0 .5.223.5.5v3c0 .277-.223.5-.5.5s-.5-.223-.5-.5v-3c0-.277.223-.5.5-.5zm-2 10h2c.277 0 .5.223.5.5s-.223.5-.5.5h-2c-.277 0-.5-.223-.5-.5s.223-.5.5-.5zm2-15c.277 0 .5.223.5.5v3c0 .277-.223.5-.5.5s-.5-.223-.5-.5v-3c0-.277.223-.5.5-.5zm-2-2h2c.277 0 .5.223.5.5s-.223.5-.5.5h-2C.223 7 0 6.777 0 6.5S.223 6 .5 6zm5 0C4.678 6 4 6.678 4 7.5v15c0 .822.678 1.5 1.5 1.5h19c.822 0 1.5-.678 1.5-1.5v-15c0-.822-.678-1.5-1.5-1.5h-19zm0 1h19c.286 0 .5.214.5.5v15c0 .286-.214.5-.5.5h-19c-.286 0-.5-.214-.5-.5v-15c0-.286.214-.5.5-.5zm7.355 3.064c-.505.163-.855.68-.855 1.248v7.374c0 .574.354 1.094.86 1.254.51.16 1.083-.004 1.576-.407l3.562-2.918c.585-.48 1-.992 1.002-1.615.002-.623-.415-1.145-1.006-1.62-.63-.506-2.37-1.943-3.558-2.917-.497-.407-1.075-.562-1.58-.4zm.948 1.176c1.186.97 2.917 2.4 3.564 2.92.485.39.634.668.633.84 0 .172-.155.445-.637.84l-3.56 2.918c-.44.44-.803.183-.803-.072v-7.374c0-.543.476-.4.803-.072z"/></svg>
                            <p>You can explore our resources, plugins, and theme documentation by clicking the button below.</p>
                            <a class="cta cta-purple" href="#">Get Adroit Booking Now</a>
                        </div>
                    </div>
                    <div class='sc'>
                         <?php 
                         $args = array(
                            'post_type'     => 'themes',
                            'posts_per_page' => 5, 
                            'order' => 'DESC' 
                        );
                         $rp = new WP_Query( $args );
                         if($rp->have_posts()) :
                         while($rp->have_posts()) : $rp->the_post(); ?>
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