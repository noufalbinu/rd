<!---- https://developer.wordpress.org/reference/functions/wp_insert_post/ --->


<?php 
$postTitle = $_POST['post_title'];
$post = $_POST['post'];
$submit = $_POST['submit'];


if(isset($submit)){

    global $user_ID;

    global $wpdb;
    require_once ABSPATH . 'wp-admin/includes/image.php';
    require_once ABSPATH . 'wp-admin/includes/file.php';
    require_once ABSPATH . 'wp-admin/includes/media.php';

    $new_post = array(
      
        'post_title' => $postTitle,
        'post_content' => $post,
        'post_status' => 'publish',
        'post_date' => date('Y-m-d H:i:s'),
        'post_author' => $user_ID,
        'post_type' => 'resort',
        'post_category' => array(0)
    );
    $post_id = wp_insert_post($new_post);

    # Set Thumbnail

    $args = array(
      'post_type' => 'attachment',
      'posts_per_page' => -1,
      'post_status' => 'pending',
      'post_parent' => $post_id
  );

  $attachments = get_posts($args);

  function shapeSpace_load_wp_media_files() {
	
    wp_enqueue_media();
    
  }
  add_action('admin_enqueue_scripts', 'shapeSpace_load_wp_media_files');
$image = $attachment_id;

$attachment_file_type = wp_check_filetype(basename($image), null);

$wp_upload_dir = wp_upload_dir();

$attachment_args = array(
    'guid'           => $wp_upload_dir['url'] . '/' . basename($image),
    'post_title'     => preg_replace('/\.[^.]+$/', '', basename($image)),
    'post_mime_type' => $attachment_file_type['type']
);

$attachment_id = wp_get_attachment_url( $attach_id );

require_once(ABSPATH . 'wp-admin/includes/image.php');

$attachment_meta_data = wp_generate_attachment_metadata($attachment_id, $image);

wp_update_attachment_metadata($attachment_id, $attachment_meta_data);

set_post_thumbnail($post_id, $attachment_id);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled Document</title>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/submit-property.css"/>
</head>

<body>
    <div id="wrap">
      <h1>Add your Property</h1>
      <form method="post" action="" enctype="multipart/form-data">
      <div class="form-base">
          <label for="post_title">Post Title</label>
          <input name="post_title" type="text">
          <label for="post">Post</label>
          <textarea name="post" type="text" ></textarea>
          <input id="upload_image_button" name="upload_image" type="file" value="<?php if (isset($options['upload-image'])) echo esc_attr($options['upload-image']); ?>">
          
          <input name="submit" type="submit" value="submit" />
      </div>
    </form>
</div>

<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<script>
  jQuery(document).ready(function($){
	var custom_uploader;
	$('#upload_image_button').click(function(e) {
		e.preventDefault();
		if (custom_uploader) {
			custom_uploader.open();
			return;
		}
		custom_uploader = wp.media.frames.file_frame = wp.media({
			multiple: false,
			library: { type: 'image' },
			button:  { text: 'Select Image' },
			title: 'Select an image or enter an image URL.',
		});
		custom_uploader.on('select', function() {
			console.log(custom_uploader.state().get('selection').toJSON());
			attachment = custom_uploader.state().get('selection').first().toJSON();
			$('#upload_image_button').val(attachment.url);
		});
		custom_uploader.open();
	});
});
</script>
</body>
</html>