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

Here's a style.css sample for a WordPress theme:
~~~~
/*!
Theme Name: Twenty Thirteen
Theme URI: http://wordpress.org/themes/twentythirteen
Author: the WordPress team
Author URI: http://wordpress.org/
Description: The 2013 theme for WordPress takes us back to the blog, featuring a full range of post formats, each displayed beautifully in their own unique way. Design details abound, starting with a vibrant color scheme and matching header images, beautiful typography and icons, and a flexible layout that looks great on any device, big or small.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: black, brown, orange, tan, white, yellow, light, one-column, two-columns, right-sidebar, flexible-width, custom-header, custom-menu, editor-style, featured-images, microformats, post-formats, rtl-language-support, sticky-post, translation-ready
Text Domain: twentythirteen

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/
~~~~

Please note the exclamation mark after the /*!. It 

## style.css for a child theme

And this is *style.css* for a child theme:

~~~~
/*!
 Theme Name:   Twenty Fifteen Child
 Theme URI:    http://example.com/twenty-fifteen-child/
 Description:  Twenty Fifteen Child Theme
 Author:       John Doe
 Author URI:   http://example.com
 Template:     twentyfifteen
 Version:      1.0.0
 License:      GNU General Public License v2 or later
 License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 Tags:         light, dark, two-columns, right-sidebar, responsive-layout, accessibility-ready
 Text Domain:  twenty-fifteen-child
*/
~~~~

# Files

config.rb
footer.php
header.php
index.php
koala-config.json
page.php
README.md
/sass/style.scss
sidebar.php
single.php
style.css
