<?php
/*
Template Name: Home
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header-home'); ?>
  <?php get_template_part('templates/content', 'page-home'); ?>
<?php endwhile; ?>
  <?php get_template_part('templates/content', 'blog-home'); ?>
