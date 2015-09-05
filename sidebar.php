<!-- sidebar -->
<div id="sidebar">

<!-- the sidebar menu (registered in functions.php) -->
<h3>Menu</h3>
<?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu' ) ); ?>

<!-- widget area ( registered in functions.php ) -->
<h3>Widgets</h3>
<?php dynamic_sidebar( 'petj_sidebar_widget' ); ?>
	
</div><!-- ends sidebar -->