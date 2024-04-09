<!---- https://developer.wordpress.org/reference/functions/wp_insert_post/ --->


<?php $postTitle = $_POST['post_title'];
$post = $_POST['post'];
$submit = $_POST['submit'];

if(isset($submit)){

    global $user_ID;

    $new_post = array(
        'post_title' => $postTitle,
        'post_content' => $post,
        'post_status' => 'publish',
        'post_date' => date('Y-m-d H:i:s'),
        'post_author' => $user_ID,
        'post_type' => 'resort',
        'post_category' => array(0)
    );
    wp_insert_post($new_post);
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
    <form action="" method="post">
      <div class="form-base">
          <label for="post_title">Post Title</label>
          <input name="post_title" type="text">
          <label for="post">Post</label>
          <textarea name="post" type="text" ></textarea>
          <input name="submit" type="submit" value="submit" />
      </div>
    </form>
</div>

</body>
</html>