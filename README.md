# Compass Project Prepared for WordPress

This repo was made in order to get a starting point for a WordPress theme styled via SASS and Compass. 
In a standard Compass project the .scss files are placed in the /sass folder. 
However WordPress needs the style.css in the root folder. 

# config.rb - Compass Configuration

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
?>
~~~~

More elaborate loops are possible, have a look at the loops in e.g. the *twentyfifteen*, *twentyfourteen* and other themes.

* [The Loop](https://codex.wordpress.org/The_Loop)
* [Template Tags](https://codex.wordpress.org/Template_Tags)
* [Query](https://codex.wordpress.org/Template_Tags/query_posts)

# Future development ideas

## Menu

*Navigare necesse est*

## Widget Area

In *sidebar.php*

## A Costum Hook

do_action, add_action(), function ...
