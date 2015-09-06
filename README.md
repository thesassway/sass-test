# The Compass Skeleton Theme for WordPress

> This theme is a skeleton. The purpose of the theme is to demonstrate how to use the WordPress API. 
> The files are prepared for styling in *Sass / Compass*. 

This repo was made in order to get a starting point for a WordPress theme styled via *SASS* and *Compass*. 
In a standard Compass project the .scss files are placed in the /sass folder. 
However WordPress needs the style.css in the root folder. The solution is to edit the *config.rb*.


## config.rb - Compass Configuration

The file *config.rb* defines the whereabouts of certain directories. 

WordPress needs a *style.css* file in the root of the theme folder.
Therefore *config.rb* should look like this:

~~~~
http_path = "/"
css_dir = ""
sass_dir = "sass"
images_dir = "images"
javascripts_dir = "javascripts"
~~~~


## style.css for a theme

Here's a style.css sample for this WordPress theme:

~~~~
/*!
Theme Name: SASS / Compass Skeleton
Theme URI: http://multimusen.dk/
Author: Per Thykjaer Jensen
Author URI: http://multimusen.dk/
Description: Sass and Compass Skeleton theme.
Version: Beta
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: compass, sass, barebone, skeleton
Text Domain: petj_sass_compass_skeleton

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/
~~~~

Please note the exclamation mark after the /*!. It 

## style.css for a child theme

And this is *style.css* for a child theme for the theme

~~~~
/*!
 Theme Name:   Compass Skeleton Child
 Theme URI:    http://multimusen.dk
 Description:  A skeleton theme prepared for SASS and Compass.
 Author:       Per Thykjaer Jensen
 Author URI:   http://multimusen.dk
 Template:     twentyfifteen
 Version:      0.1
 License:      GNU General Public License v2 or later
 License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 Tags:         sass, compass, skeleton
 Text Domain:  compass-skeleton-child
*/
~~~~

# The Loop

* Codex: [The Loop](https://codex.wordpress.org/The_Loop)
* See: [Elegant Themes](http://www.elegantthemes.com/blog/tips-tricks/the-wordpress-loop-explained-for-beginners)

Here's a loop sample from the page above:

~~~~
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;
~~~~

More elaborate loops are possible, have a look at the loops in e.g. the *twentyfifteen*, *twentyfourteen* and other themes.

* [The Loop](https://codex.wordpress.org/The_Loop)
* [Template Tags](https://codex.wordpress.org/Template_Tags)
* [Query](https://codex.wordpress.org/Template_Tags/query_posts)


## Widget Areas

1. Define the widget in functions.php
2. Invoke the widget in relevant file

### functions.php

Use something like this in functions.php:

~~~~
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
~~~~

### sidebar.php

You can have widget areas whereever you want in your theme. In this case I add the widget area in sidebar.php:

~~~~
<?php dynamic_sidebar( 'petj_sidebar_widget' ); ?>
~~~~

# The Menu

The menu is defined in functions.php and invoked in sidebar.php. You can define menu areas all over your theme. 

## functions.php

Here the menu is registered:

~~~~
function petj_menus() {
  register_nav_menus(
    array(
      'sidebar-menu' => __( 'Sidebar Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'petj_menus' );
~~~~

## sidebar.php

And here we display the menu in the theme:

~~~~
<?php dynamic_sidebar( 'petj_sidebar_widget' ); ?>
~~~~
----

# Further development ideas

## A Costum Hook

* [do_action](https://codex.wordpress.org/Function_Reference/do_action)
* [add_action](https://codex.wordpress.org/Function_Reference/add_action)
* [hooks](http://codex.wordpress.org/Plugin_API/Hooks)

A SEO Hoop.

## Filters

* Queries
* Filter categories and posts

## Enqueue Scripts

* Bootstrap CDN
