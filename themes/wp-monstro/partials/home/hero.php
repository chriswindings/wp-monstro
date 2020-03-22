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
$heroContent = $content["hero"]
?>

<section class="HomeHero">
  <div class="HomeHero-containter container">
    <div class="HomeHero-content">
      <p class="HomeHero-preHeading"><?php echo $heroContent["preHeading"] ?></p>
      <h1 class="HomeHero-heading"><?php echo $heroContent["heading"] ?></h1>
    </div>
    <button type="button" class="HomeHero-cta btn btn-primary">Let us Show You</button>
  </div>
</section>
