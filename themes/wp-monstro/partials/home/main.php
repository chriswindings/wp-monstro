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
        <div class="HomeMain-logoWrapper">
         <img class="HomeMain-logo" src="<?php echo $mainContent["logoImageUrl"] ?>" alt="monstro-logo">
        </div>
      </div>
      <div class="col-md-6">
        <div id="waitlist" class="card shadow-lg PrefineryForm mb-5" style="max-width: 22rem">
          <div class='prefinery-form-embed PrefineryForm-container'></div>
          <!-- <div>
            <img />
            <p>Your privacy is paramount.</p>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>
