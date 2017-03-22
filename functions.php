<?php
/* REGISTER MENUS */
// https://codex.wordpress.org/Navigation_Menus 
// The sidebar-menu is used in sidebar.php

function petj_menus() {
  register_nav_menus(
    array(
      'sidebar-menu' => __( 'Sidebar Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'petj_menus' );

/* WIDGET AREAS */
// http://codex.wordpress.org/Widgetizing_Themes

function petj_widgets_define() {

	register_sidebar( array(
		'name'          => 'petj_sidebar_widget',
		'id'            => 'petj_sidebar_widget',
		'before_widget' => '<div id="petjSidebarWidget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="petjSidebarWidget rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'petj_widgets_define' );
?>