<!doctype html>  

<html <?php language_attributes(); ?> class="no-js">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php
// Print the <title> tag based on what is being viewed.
global $page, $paged;
wp_title( '-', true, 'right' );
// Add the blog name.
bloginfo( 'name' );
// Add a page number if necessary:
if ( $paged >= 2 || $page >= 2 )
	echo ' - ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
?></title>

<!-- default stylesheet -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/normalize.css">		

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write(unescape('%3Cscript src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>

<!-- drop Google Analytics Here -->
<!-- end analytics -->

<!-- modernizr -->
<script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.full.min.js"></script>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<!-- wordpress head functions -->
<?php wp_head(); ?>
<!-- end of wordpress head -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

</head>


<body <?php body_class(); ?>>
	
		<div id="wrap">
			
			<header role="banner">
				<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
				<h1><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>

				<nav role="navigation">
					<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
				</nav>

			</header><!-- end header -->