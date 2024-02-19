
<!DOCTYPE html>
<html lang='en' class="maze">
<head>
   <title><?php wp_title(''); ?><?php if (!(is_404()) && (is_single()) || (is_page()) || (is_archive())) { ?> &raquo; <?php } ?> - <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/base.css"/>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/footer.css"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/header.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/oz.css"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/single.css"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/sidebar.css"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/archive.css"/>
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link href="https://fonts.cdnfonts.com/css/glacial-indifference-2?styles=54222,54221" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,700&family=Lato:wght@100&display=swap" rel="stylesheet">

    <!----- JS ------>	
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>
    <!----- JS ------>	
</head>
<body>
	<div class="header-outer-nav ">
	    <div class="outer-nav-wrap container-width-1100">
			<p class="notification-nav">
Looking to get more wordpress website traffic? Allwpseo provides strategies for SEO : <a href="https://allwpseo.com">Drive more traffic now</a></p>
        </div>
    </div>
    <header>
	    <div class="header-wrap container-width-1100">
            <div class="logo">
               <a class="link-secondary" href="#">
                  <img src="<?php header_image(); ?>" >
               </a>
            </div>
            <nav class="navbar bg-primary">
		        <div class="nav-icon-contianer" style="display:none">
		            <div class="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
		    	</div>
		    	<div class="nav-container">
		            <ul class="navbar-nav">
		            	<li class="nav-item">
		            		<a href="#" class="nav-link">WordPress Themes</a>
							<ul class="dropdown">
		            			<li class="nav-item">
		            				<a href="/Themes" class="nav-link">Free Themes</a>
		            			</li>
		            			<li class="nav-item">
		            				<a href="/themes" class="nav-link">Premium Themes</a>
		            			</li>
		            		</ul>
		            	<li class="nav-item">
		            		<a href="#" class="nav-link">Resources</a>
		            		<ul class="dropdown">
		            			<li class="nav-item">
		            				<a href="/blog" class="nav-link">Blog</a>
		            			</li>
		            			<li class="nav-item">
		            				<a href="/documentai" class="nav-link">Docs</a>
		            			</li>
		            		</ul>
		            	</li>		
		            </ul>
		    		<div class="navbar-utils">
		        	    <form id="search-form" name="myform" role="search" method="get" action="<?php echo home_url(); ?>">  
                            <input autocomplete="off" class="search-field" id="search-text" name="s" placeholder="<?php echo esc_attr_x( 'Search…', 'placeholder' ) ?>" type="text" value="<?php the_search_query(); ?>" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                            <span class="search-input" style="display: none;" aria-hidden="true" onclick="myform.submit()">
                                <svg class="search-icon-mob" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 24L20.2223 20.2156M22.3158 15.1579C22.3158 17.0563 21.5617 18.8769 20.2193 20.2193C18.8769 21.5617 17.0563 22.3158 15.1579 22.3158C13.2595 22.3158 11.4389 21.5617 10.0965 20.2193C8.75413 18.8769 8 17.0563 8 15.1579C8 13.2595 8.75413 11.4389 10.0965 10.0965C11.4389 8.75413 13.2595 8 15.1579 8C17.0563 8 18.8769 8.75413 20.2193 10.0965C21.5617 11.4389 22.3158 13.2595 22.3158 15.1579Z" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </span>
		        	        <span class="close-open">
		        	            <svg class="search-icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 24L20.2223 20.2156M22.3158 15.1579C22.3158 17.0563 21.5617 18.8769 20.2193 20.2193C18.8769 21.5617 17.0563 22.3158 15.1579 22.3158C13.2595 22.3158 11.4389 21.5617 10.0965 20.2193C8.75413 18.8769 8 17.0563 8 15.1579C8 13.2595 8.75413 11.4389 10.0965 10.0965C11.4389 8.75413 13.2595 8 15.1579 8C17.0563 8 18.8769 8.75413 20.2193 10.0965C21.5617 11.4389 22.3158 13.2595 22.3158 15.1579Z" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                </svg>
		        	    	    <svg class="close-icon-small" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                    <path d="M7.5 0C3.32143 0 0 3.32143 0 7.5C0 11.6786 3.32143 15 7.5 15C11.6786 15 15 11.6786 15 7.5C15 3.32143 11.6786 0 7.5 0ZM10.3929 11.25L7.5 8.35714L4.60714 11.25L3.75 10.3929L6.64286 7.5L3.75 4.60714L4.60714 3.75L7.5 6.64286L10.3929 3.75L11.25 4.60714L8.35714 7.5L11.25 10.3929L10.3929 11.25Z" fill="white"/>
                                </svg>
		        	    	</span> 
		                </form>
		            </div>       
		    	</div>
	        </nav>
        </div>
    </header>
   
  


