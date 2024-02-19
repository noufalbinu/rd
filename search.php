<?php include (TEMPLATEPATH . '/header.php'); ?> 
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page_templates/base.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page_templates/searchpage.css"/>
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
        <h1>Search Page</h1>
        <p>Lorem ipsum dolor sit amet consectetur 
            adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam</p>
            <form id="search-form" role="search" method="get" action="<?php echo home_url(); ?>">
                <input autocomplete="off" class="search-tab" id="search-text" name="s" placeholder="<?php echo esc_attr_x( 'Search…', 'placeholder' ) ?>" type="text" value="<?php the_search_query(); ?>" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                <input class="search-tab-button" type="button" value="Search"/>
            </form>
        </div>
</div>
<!-- Banner Section- EEND -->

<!---------   BLOG CONTAINER   ---------->
<div class='blog-container' id='blog-container'>
    <div class='posts-container' id='posts-container'>
        <div id="page-container">
            <!-- WordPress Loop -->  
            <?php
            $s=get_search_query();
            $args = array(
                's' => $s
            );
            // The Query
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) {
                _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?>
                       <li>
                           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                       </li>
                    <?php
                    }
                } else {
            ?>
            <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
            <div class="alert alert-info"><p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- End WordPress Loop -->
</div>


<!-- Footer -->
<?php include (TEMPLATEPATH . '/footer.php'); ?> 
<!-- Footer -->



