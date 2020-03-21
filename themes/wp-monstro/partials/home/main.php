<?php
/**
 * The main section for the home page
 *
 *
 * @package wp-monstro
 * @subpackage wp-monstro
 * @since 1.0.0
 */
$content = require(get_template_directory() . "/models/home.php");
$mainContent = $content["main"]
?>

<section class="HomeMain">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="HomeMain-heading"><?php echo $mainContent["heading"] ?></h2>
        <p class="HomeMain-copy"><?php echo $mainContent["copy"] ?></p>
        <img class="HomeMain-logo" src="<?php echo $mainContent["logoImageUrl"] ?>" alt="monstro-logo">
      </div>
      <div class="col-md-6">
        <p>This is a column</p>
      </div>
    </div>
  </div>
</section>
