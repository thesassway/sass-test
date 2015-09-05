<?php
/**
* file: index.php
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="mainContent">

<!-- skeleton loop -->
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        // here you can add the_author, the_content and many other template loop tags
        the_title('<h3>','</h3>');
    endwhile;
endif;
?>
</div><!-- ends mainContent -->

<?php get_footer(); ?>
