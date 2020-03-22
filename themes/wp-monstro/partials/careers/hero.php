<?php
/**
 * The hero section for the careers page
 *
 *
 * @package wp-monstro
 * @subpackage wp-monstro
 * @since 1.0.0
 */
$content = require(get_template_directory() . "/models/careers.php");
$heroContent = $content["hero"]
?>

<section class="CareersHero">
  <div class="CareersHero-containter container">
    <div class="CareersHero-content">
      <p class="CareersHero-preHeading"><?php echo $heroContent["preHeading"] ?></p>
      <h1 class="CareersHero-heading"><?php echo $heroContent["heading"] ?></h1>
    </div>
  </div>
</section>
