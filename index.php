<?php
/**
* file: index.php
*/
?>

<?php get_header(); ?>
<?php //get_sidebar(); ?>

<!-- skeleton loop -->
<?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;
?>

<?php get_footer(); ?>
