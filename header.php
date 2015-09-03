<?php
/**
* file: header.php
* purpose: HTML5 header.
* invoke: get_header()
**/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	
	<!-- SEO Metatags Hook -->
	<?php // do_action('getSEO'); ?>
	
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<!-- Jquery -->
	<?php wp_enqueue_script("jquery"); ?>
	<!-- Jquery end -->
	
	<!-- wp_head() hook -->
	<?php wp_head(); ?>
	<!-- wp_head() hook ends -->
</head>

<body <?php body_class(); ?>>