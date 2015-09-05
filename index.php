<?php
/**
* file: index.php
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="mainContent">
	
<h2>Main Content</h2>
	
<h3>The Loop</h3>

Below: content from the Loop.

<!-- skeleton loop -->
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        // here you can add the_author, the_title, the_content and many other template loop tags
        the_title('<h4>','</h4>');
    endwhile;
endif;
?>
</div><!-- ends mainContent -->

<?php get_footer(); ?>