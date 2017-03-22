<?php
/**
* file: header.php
* included via: get_header()
**/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	
	<!-- Bootstrap CDN -->
	<!-- url: http://getbootstrap.com/getting-started/ -->
	<!-- alternative (and more correct according to the WP API: use enqueue styles -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	<!-- SEO Metatags Hook -->
	<?php // do_action('getSEO'); ?>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />	
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<!-- Jquery ( allways before the wp_head() ) -->
	<?php wp_enqueue_script("jquery"); ?>
	
	<!-- wp_head() hook -->
	<?php wp_head(); ?>
	<!-- wp_head() hook ends -->
</head>

<body <?php body_class(); ?>>
    <header>
		<hgroup>
		<h2 class="newFile">File: header.php "Compass Skeleton"</h2>
        <h1><?php bloginfo(); ?></h1>
        <h2><?php bloginfo('description'); ?></h2>
		</hgroup>
    </header>