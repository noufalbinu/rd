<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title><?php wp_title('|',true,'right'); ?> <?php bloginfo('name'); ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/normalize.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/header.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/sidebar.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/body.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/footer.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/archive.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/page.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/portfolio.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/front-page.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/responsive-nav.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/responsive-home.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/responsive-gallery.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/responsive-archive.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/single-post.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/responsive-pages.css" rel="stylesheet">

        <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/jquery.bxslider.css" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css-masonry/files/css/labs.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css-masonry/files/css/masonry.css">

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/main-nav.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/starcss.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/text-animation.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/fontawesome/css/all.css">


        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
        <link rel="manifest" href="assets/images/site.webmanifest">


        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Dancing+Script&family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Quicksand|Raleway|Ubuntu&display=swap" rel="stylesheet">


        <?php wp_enqueue_script('jquery'); ?>
        <?php wp_head(); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8CFBZYGGPK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8CFBZYGGPK');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7107145757341621" crossorigin="anonymous"></script>
    </head>
<body>
<div id ='mass-head'>
    <div id="topbar"> <!-- top bar -->
            <div id="nav-icon">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
            <b class="dc">
                <a href="/">Noufal Binu</a>
            </b>
        <nav id="menu">
            
            <?php wp_nav_menu( array( 'container'=> false, 'theme_location' => 'header-menu' ) ); ?>
        </nav>
        <
    </div>
</div>