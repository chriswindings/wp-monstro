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
  <?php get_template_part( 'partials/home/hero'); ?>
  <?php get_template_part( 'partials/home/main'); ?>
</main>

<?php get_footer(); ?>