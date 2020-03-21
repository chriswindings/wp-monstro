<?php
/**
 * Template Name: Home Page Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage wp-monstro
 * @since 1.0
 */

 get_header()
?>

<main>
  <div>This is the home page</div> 
  <?php get_template_part( 'partials/home/hero'); ?>
</main>

<?php get_footer(); ?>