<?php 

get_header();

?>

<main class="content-section">
  <?php get_template_part('templates/template', 'head'); ?>
  <?php if(is_front_page()) : ?> 
    <?php get_template_part('templates/template', 'front'); ?> 
    <?php endif; ?>


</main>

<?
get_footer();

?>