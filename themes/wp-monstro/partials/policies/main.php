<?php
/**
 * The main section for the policies page
 *
 *
 * @package wp-monstro
 * @subpackage wp-monstro
 * @since 1.0.0
 */
?>


<?php
    while ( have_posts() ) : the_post(); ?> 
        <section class="container mt-4 mb-4">
            <?php the_content(); ?>
        </section>
    <?php
    endwhile;