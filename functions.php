<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */ 
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

include 'inc/extra-func.php';
include 'inc/landing_page_setup.php';
add_theme_support( 'title-tag' );


function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);

	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . '...';
	} else {
		$excerpt = implode(" ", $excerpt);
	}

	$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

	return $excerpt;
}

function register_my_menus() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Header Menu' ),
		'extra-menu' => __( 'Extra Menu' )
	  )
	);
}
add_action( 'init', 'register_my_menus' );


function add_additional_class($classes, $item, $args){
  if(isset($args->add_li_class)){
      $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class', 1, 3);

//Walker menu extra elements https://awhitepixel.com/wordpress-menu-walkers-tutorial/

class adroit_Walker extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = array() ) {
        // ul
        $indent  = str_repeat( "\t", $depth );
        $submenu = ( $depth > 0 ) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown$submenu depth_$depth\">\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        // li a span

        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $li_attributes = '';
        $class_names   = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $classes[] = ( $args->walker->has_children ) ? 'dropdown' : '';
        $classes[] = ( $item->current || $item->current_item_ancestor ) ? 'active' : '';
        $classes[] = 'dropdownitem';
        if ( $depth && $args->walker->has_children ) {
            $classes[] = 'dropdown';
        }

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';

        $attributes .= ( $args->walker->has_children ) ? ' class="nav-dropdown" ' : ''; // THE PROBLEM!



        $item_output  = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= ( $depth == 0 && $args->walker->has_children ) ? ' <b class="caret"></b></a>' : '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

    }
}

// Add term page
function pippin_taxonomy_add_new_meta_field() {
	// this will add the custom meta field to the add new term page
	?>
	<div class="form-field">
		<label for="term_meta[custom_term_meta]"><?php _e( 'Example meta field', 'pippin' ); ?></label>
		<input type="text" name="term_meta[custom_term_meta]" id="term_meta[custom_term_meta]" value="">
		<p class="description"><?php _e( 'Enter a value for this field','pippin' ); ?></p>
	</div>
<?php
}
add_action( 'resort_add_form_fields', 'pippin_taxonomy_add_new_meta_field', 10, 2 );

// Edit term page
function pippin_taxonomy_edit_meta_field($term) {
 
	// put the term ID into a variable
	$t_id = $term->term_id;
 
	// retrieve the existing value(s) for this meta field. This returns an array
	$term_meta = get_option( "taxonomy_$t_id" ); ?>
	<tr class="form-field">
	<th scope="row" valign="top"><label for="term_meta[custom_term_meta]"><?php _e( 'Set a Fetured Image', 'pippin' ); ?></label></th>
		<td>
			<input type="text" name="term_meta[custom_term_meta]" id="term_meta[custom_term_meta]" value="<?php echo esc_attr( $term_meta['custom_term_meta'] ) ? esc_attr( $term_meta['custom_term_meta'] ) : ''; ?>">
			<p class="description"><?php _e( 'Enter a value for this field','pippin' ); ?></p>
		</td>
	</tr>
<?php
}
add_action( 'resort_edit_form_fields', 'pippin_taxonomy_edit_meta_field', 10, 2 );

// Save extra taxonomy fields callback function.
function save_taxonomy_custom_meta( $term_id ) {
	if ( isset( $_POST['term_meta'] ) ) {
		$t_id = $term_id;
		$term_meta = get_option( "taxonomy_$t_id" );
		$cat_keys = array_keys( $_POST['term_meta'] );
		foreach ( $cat_keys as $key ) {
			if ( isset ( $_POST['term_meta'][$key] ) ) {
				$term_meta[$key] = $_POST['term_meta'][$key];
			}
		}
		// Save the option array.
		update_option( "taxonomy_$t_id", $term_meta );
	}
}  
add_action( 'edited_genres', 'save_taxonomy_custom_meta', 10, 2 );  
add_action( 'create_genres', 'save_taxonomy_custom_meta', 10, 2 );



add_action( 'init', 'codex_resort_init' );
function codex_resort_init() {
	$labels = array(
		'name'               => _x( 'resort', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'resort', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Property Ads', 'admin menu', 'your-plugin-textdomain' ),
		
		'name_admin_bar'     => _x( 'Resort', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New Property', 'Theme', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Theme', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Theme', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Theme', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Theme', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Ads', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Theme', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Theme:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Theme found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Theme found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		
        'taxonomies' => ['resort','location', 'features'],

		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'resort' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);
	register_post_type( 'resort', $args );
}
register_taxonomy( 'features', array('resort'), 
    array(
     'hierarchical' => true, 
     'label' => 'Add Features', 
     'singular_label' => 'Features', 
     'rewrite' => array( 'slug' => 'features', 'with_front'=> false )
     )
);
register_taxonomy( 'resort', array('resort'), 
    array(
     'hierarchical' => true, 
     'label' => 'Resort', 
     'singular_label' => 'Resort Category', 
     'rewrite' => array( 'slug' => 'resort-category', 'with_front'=> false )
     )
);
register_taxonomy( 'location', array('resort'), 
    array(
     'hierarchical' => true, 
     'label' => 'Location', 
     'singular_label' => 'Location', 
     'rewrite' => array( 'slug' => 'location', 'with_front'=> false )
     )
);


/**
 * Create two taxonomies, genres and writers for the post type "book".
 *
 * @see register_post_type() for registering custom post types.
 */
function wpdocs_create_book_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Genres', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Genre', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Genres', 'textdomain' ),
		'all_items'         => __( 'All Genres', 'textdomain' ),
		'parent_item'       => __( 'Parent Genre', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Genre:', 'textdomain' ),
		'edit_item'         => __( 'Edit Genre', 'textdomain' ),
		'update_item'       => __( 'Update Genre', 'textdomain' ),
		'add_new_item'      => __( 'Add New Genre', 'textdomain' ),
		'new_item_name'     => __( 'New Genre Name', 'textdomain' ),
		'menu_name'         => __( 'Genre', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'genre' ),
	);

	register_taxonomy( 'genre', array( 'resort' ), $args );

	unset( $args );
	unset( $labels );

	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Writers', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Writer', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Writers', 'textdomain' ),
		'popular_items'              => __( 'Popular Writers', 'textdomain' ),
		'all_items'                  => __( 'All Writers', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Writer', 'textdomain' ),
		'update_item'                => __( 'Update Writer', 'textdomain' ),
		'add_new_item'               => __( 'Add New Writer', 'textdomain' ),
		'new_item_name'              => __( 'New Writer Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate writers with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove writers', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used writers', 'textdomain' ),
		'not_found'                  => __( 'No writers found.', 'textdomain' ),
		'menu_name'                  => __( 'Writers', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'writer' ),
	);

	register_taxonomy( 'writer', 'book', $args );
}
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'wpdocs_create_book_taxonomies', 0 );



/**
 * Register meta boxes.
 */
function hcf_register_meta_boxes() {
    add_meta_box( 'hcf-1', __( 'Property Details', 'hcf' ), 'hcf_display_callback', 'resort' );
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

		'download_button',
		'download_button_pro',
		'theme_doc'
    ];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
     }
}
add_action( 'save_post', 'hcf_save_meta_box' );


function wpdocs_setup_theme() {
    add_theme_support( 'post-thumbnails' );
	add_image_size( 'fp-thumbnail', 300, 150, true );
}
add_action( 'after_setup_theme', 'wpdocs_setup_theme' );

add_action( 'init', 'codex_book_init' );
function codex_book_init() {
	$labels = array(
		'name'               => _x( 'Gallery', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Gallery', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Gallery', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Gallery', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Gallery', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Gallery', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Gallery', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Gallery', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Gallery', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Gallery', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Gallery', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Gallery:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Gallery found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Gallery found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'gallery' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'gallery', $args );
}



add_action( 'init', 'register_cpt_news' );
function register_cpt_news() {
	$labels = array(
		'name'               => _x( 'News', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'News', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'News', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'News', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'News', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New News', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New News', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit News', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View News', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All News', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search News', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent News:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No News found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No News found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'taxonomies'         => array('category', 'post_tag'),
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'news', $args );
}



function arphabet_widgets_init() {

register_sidebar( array(
	'name'          => 'Blog Right Sidebar',
	'id'            => 'blog_right_sidebar',
	'before_widget' => '<div>',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 3',
'id' => 'footer-sidebar-3',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
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
return 50;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changing excerpt more
function new_excerpt_more($more) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


function wpdocs_excerpt_more( $more ) {
    return '<a class="view-more read-more-news" href="'.get_the_permalink().'" rel="nofollow">Read News</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


add_theme_support( 'post-thumbnails' );

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

$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => '',
	'default-position-x'     => '',
	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);

function my_custom_background_setup() {
  $args = array(
    'default-color' => '000',
    'default-image' => '',
  );
  add_theme_support( 'custom-background', $args );
}
add_action( 'after_setup_theme', 'my_custom_background_setup' );

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' ); 

function theme_options_init(){
 register_setting( 'sample_options', 'sample_theme_options');
} 

function theme_options_add_page() {
 add_theme_page( __( 'Theme Options', 'sampletheme' ), __( 'Theme Options', 'sampletheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
} 

show_admin_bar(false);

//Remove JQuery migrate
 function remove_jquery_migrate( $scripts ) {
 if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
 $script = $scripts->registered['jquery'];
 
 if ( $script->deps ) { // Check whether the script has any dependencies
 $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
 }
 }
 }
 
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );


//Customize Default wp 
add_filter( 'style_loader_src', 'hijack_login_src', 10, 2 );

function hijack_login_src( $src, $handle ) {
    if( 'login' == $handle )
        $src = get_stylesheet_directory_uri() . '/css/wp-dashboard.css';
    return $src;
}

//customize nav for bootstrap
/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
	add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );