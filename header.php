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
	
	<!-- SEO Metatags Hook -->
	<?php // do_action('getSEO'); ?>
	
	
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
        <h1><?php bloginfo(); ?></h1>
        <h2><?php bloginfo('description'); ?></h2>
		</hgroup>
    </header>