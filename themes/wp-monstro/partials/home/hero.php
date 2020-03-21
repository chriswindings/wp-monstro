<?php
/**
 * The hero section for the home page
 *
 *
 * @package wp-monstro
 * @subpackage wp-monstro
 * @since 1.0.0
 */
$content = require(get_template_directory() . "/models/home.php");
?>

<section class="HomeHero">
  <div class="HomeHero-content">
    <p class="HomeHero-preHeading"><?php echo $content["hero"]["preHeading"] ?></p>
    <h1 class="HomeHero-heading"><?php echo $content["hero"]["heading"] ?></h1>
  </div>
</section>
