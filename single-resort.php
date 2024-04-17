

<?php
function mypage_head() {
    echo '<link rel="stylesheet" type="text/css" href="'.plugin_dir_url( __FILE__ ) . '/package/template-style/package-style.css">'."\n";
}
add_action('wp_head', 'mypage_head');
?>
<?php
/*
Template Name: aaaaaaa
Template Post Type: portfolio
*/
get_header(); ?>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/themes.css"/>

<div class="blog-header">
  <h1><?php the_title(); ?></h1>
	<p>WordPress Tutorials, Tips, and Resources to Help Grow Your Business</p>
</div>

<div class="theme-single-container">
<div class="theme-single-container-wrap container-width-1100">
  <div class="theme-container">
    <div class="excerpt-image"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' );  } ?></div>
    <div class="features">
      <div class="features-wrap">
        <div class="amenities-title">
          <b>Amenities</b>
        </div>
        <div class="amenities-content">
        <?php
         $terms = wp_get_post_terms( $post->ID, 'features');
                 foreach($terms as $term) {
             echo "<a href='".get_term_link($term)."' title='".$term->name."'>".$term->name."</a>";
         }
         echo "</span>"; ?>
        </div>
      </div>
    </div>
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="">
        <div class="content-here">
          <?php  the_content();  ?>
        </div>
      </div>
      
    <?php endwhile; ?>
    <?php
      $icons = apply_filters( 'taxonomy-images-list-the-terms', '', array(
        'before'       => '<div class="my-custom-class-name">',
        'after'        => '</div>',
        'before_image' => '<span>',
        'after_image'  => '</span>',
        'image_size'   => 'detail',
        'taxonomy'     => 'post_tag',
      ) );
      print_r($icons);
      if ( ! empty( $icons ) ) {
      	print '<ul>';
      	foreach ( (array) $icons as $icon ) {
          echo wp_get_attachment_image( get_the_ID(), array('700', '600'), "", array( "class" => "img-responsive" ) ); 
      		print '<li><a href="' . esc_url( get_term_link( $icon, $icon->taxonomy ) ) . '">' . wp_get_attachment_image( $icon->image_id, 'detail' ) . '</a></li>';
      	}
      	print '</ul>';
      } ?>

<?php comments_template(); ?>
  </div>
  <div class="theme-sidebar">
    <div class="project-details">
    <b class="theme-details-title">Property Details</b>
      <p><span class="dashicons dashicons-businessman"></span><i class="fa-solid fa-location-dot"></i> Location: <?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_author', true ) ); ?></p>
      <p><span class="dashicons dashicons-admin-appearance"></span><i class="fa-solid fa-indian-rupee-sign"></i> Price Range: <?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_published_date', true ) ); ?></p>
      <p><span class="dashicons dashicons-admin-links"></span><i class="fa-solid fa-link"></i> Website:  <?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_price', true ) ); ?></p>
      <p><span class="dashicons dashicons-admin-links"></span><i class="fa-solid fa-phone-volume"></i> Phone:  <?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_price', true ) ); ?></p>
    </div>
    <div class="project-buttons">
      <a class="download-cta cta-free" href="<?php echo esc_attr( get_post_meta( get_the_ID(), 'free_download', true ) ); ?>">BOOK NOW</a>
      <a class="download-cta cta-pro" href="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_author', true ) ); ?>">CALL NOW</a>
    </div>
    <div class="location-map">
      <div class="location-map-wrap">
        <div id="map"></div>
        <a class="map-link" href="">See Map <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        <p class="location-map-address">Kochi, Thripunithura</p>
      </div>
    </div>
  </div>
</div>

<script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: "AIzaSyABnl7QE_4myV3fkmz_d7sKXTLV7njv-UY", v: "weekly"});</script>
        <script>
  // Initialize and add the map
let map;

async function initMap() {
  // The location of Uluru
  const position = { lat: -25.344, lng: 131.031 };
  // Request needed libraries.
  //@ts-ignore
  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

  // The map, centered at Uluru
  map = new Map(document.getElementById("map"), {
    zoom: 4,
    center: position,
    mapId: "DEMO_MAP_ID",
  });

  // The marker, positioned at Uluru
  const marker = new AdvancedMarkerElement({
    map: map,
    position: position,
    title: "Uluru",
  });
}

initMap();

</script>
<!-- Footer -->
<?php include (TEMPLATEPATH . '/footer.php'); ?>
<!-- Footer -->







