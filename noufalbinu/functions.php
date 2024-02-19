<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
add_theme_support( 'title-tag' );

add_action( 'init', 'codex_book_init' );
function codex_book_init() {
	$labels = array(
		'name'               => _x( 'Portfolio', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Portfolio', 'admin menu', 'your-plugin-textdomain' ),
		
		'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Portfolio', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Portfolio', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Portfolio', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Portfolio', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Portfolio', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Portfolio', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Portfolio', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Portfolio:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Portfolio found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Portfolio found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
        'taxonomies' => ['book_author'],
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'portfolio', $args );
}
register_taxonomy( 'projects', array('portfolio'), array(
  'hierarchical' => true, 
  'label' => 'Projects', 
  'singular_label' => 'Project', 
  'rewrite' => array( 'slug' => 'Project', 'with_front'=> false )
  )
);




/**
 * Register meta boxes.
 */
function hcf_register_meta_boxes() {
    add_meta_box( 'hcf-1', __( 'Hello Custom Field', 'hcf' ), 'hcf_display_callback', 'portfolio' );
}
add_action( 'add_meta_boxes', 'hcf_register_meta_boxes' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function hcf_display_callback( $post ) {
    include get_template_directory() . '/inc/mbt/form.php';
}
/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function hcf_save_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields = [
        'hcf_author',
        'hcf_published_date',
        'hcf_price',
    ];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
     }
}
add_action( 'save_post', 'hcf_save_meta_box' );









function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


register_sidebar( array(
  'name' => 'footer_one',
  'id' => 'footer_one',
  'description' => 'Appears in the footer area',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
  ) );
  
  register_sidebar( array(
    'name' => 'footer_two',
    'id' => 'footer_two',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );

register_sidebar( array(
  'name' => 'footer_three',
  'id' => 'footer_three',
  'description' => 'Appears in the footer area',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
  ) );




register_sidebar(array(
    'name' => 'post_section',
    'id' => 'post_section',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  )
);


// Changing excerpt length
function new_excerpt_length($length) {
return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changing excerpt more
function new_excerpt_more($more) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow">Read More...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


add_theme_support( 'post-thumbnails' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );


function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');




?>
