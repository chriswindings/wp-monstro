<?php
/**
 * Template Name: Careers
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage wp-monstro
 * @since 1.0
 */

 get_header()
?>

<main>
  <?php get_template_part( 'partials/careers/hero'); ?>
  <?php get_template_part( 'partials/careers/job-list'); ?>
</main>

<?php get_footer(); ?>