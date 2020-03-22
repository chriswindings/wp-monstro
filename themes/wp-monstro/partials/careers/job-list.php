<?php
/**
 * The job list partial for the careers page
 *
 *
 * @package wp-monstro
 * @subpackage wp-monstro
 * @since 1.0.0
 */
$content = require(get_template_directory() . "/models/careers.php");
$jobsContent = $content["jobs"]
?>

<section class="CareersJobs">
  <div class="CareersJobs-containter container">
    <div class="CareersJobs-content">
      <?php foreach($jobsContent as $job) {
        ?>
        
          <div class="Job">
            <h2 class="Job-title"><?php echo $job["title"] ?></h2>
            <div class="Job-details">
              <span class="Job-location"><?php echo $job["location"] ?></span>
              <span class="Job-detailsSeperator"> • </span>
              <span class="Job-type"><?php echo $job["type"] ?></span>
            </div>
            <div class="Job-ctas">
              <a href="#" class="Job-cta Job-viewDetails btn btn-outline-secondary">
                VIEW DETAILS
              </a>
              <a href="#" class="Job-cta Job-linkedIn btn btn-primary">
                <img class="Job-linkedInImage" src="/wp-content/uploads/2020/03/icon-btn-applyLI@3x.svg">Apply
              </a>
            </div>
          </div>

          <div class="Job-divider"></div>

        <?php
      }
      ?>
    </div>
  </div>
</section>
