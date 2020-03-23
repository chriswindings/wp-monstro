<?php
/**
 * The content section for the careers individual page
 *
 *
 * @package wp-monstro
 * @subpackage wp-monstro
 * @since 1.0.0
 */
?>

<section class="CareersContent d-lg-none">
  <div class="accordion" id="accordionExample">
    <div class="CareersContent-card card">
      <div id="headingOne" class="CareersContent-cardContainer container">
        <a class="CareersContent-accordianHeadingButton" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h2 class="CareersContent-accordianHeading">
            <span>About the Position</span>
            <img class="CareersContent-accordianHeadingImage CareersContent-accordianHeadingImage--open" src="/wp-content/uploads/2020/03/accordian-open.svg">
            <img class="CareersContent-accordianHeadingImage CareersContent-accordianHeadingImage--closed" src="/wp-content/uploads/2020/03/accordian-closed.svg">
          </h2>
        </a>
        </div>

      <div id="collapseOne" class="collapse container show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="CareersContent-cardBody card-body">
          <?php the_field('aboutThePosition') ?>
        </div>
      </div>
    </div>

    <div class="CareersContent-card card">
      <div id="headingTwo" class="CareersContent-cardContainer container">
        <a class="CareersContent-accordianHeadingButton collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h2 class="CareersContent-accordianHeading">
            <span>Minimum Qualifications</span>
            <img class="CareersContent-accordianHeadingImage CareersContent-accordianHeadingImage--open" src="/wp-content/uploads/2020/03/accordian-open.svg">
            <img class="CareersContent-accordianHeadingImage CareersContent-accordianHeadingImage--closed" src="/wp-content/uploads/2020/03/accordian-closed.svg">
          </h2>
        </a>
      </div>
      <div id="collapseTwo" class="collapse container" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="CareersContent-cardBody card-body">
        <?php 
          $rows = get_field('minimumQualifications');
          if($rows)
          {
            echo '<ul>';

            foreach($rows as $row)
            {
              ?>
              <li class="CareersContent-listItem"><?php echo $row["minimunQualification"] ?>
              <?php
            }

            echo '</ul>';
          }
          ?>
        </div>
      </div>
    </div>

    <div class="CareersContent-card card">
      <div id="headingThree" class="CareersContent-cardContainer container">
        <a class="CareersContent-accordianHeadingButton collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h2 class="CareersContent-accordianHeading">
            <span>Preferred Qualifications</span>
            <img class="CareersContent-accordianHeadingImage CareersContent-accordianHeadingImage--open" src="/wp-content/uploads/2020/03/accordian-open.svg">
            <img class="CareersContent-accordianHeadingImage CareersContent-accordianHeadingImage--closed" src="/wp-content/uploads/2020/03/accordian-closed.svg">
          </h2>
        </a>
      </div>
      <div id="collapseThree" class="collapse container" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="CareersContent-cardBody card-body">
        <?php 
          $rows = get_field('preferredQualifications');
          if($rows)
          {
            echo '<ul>';

            foreach($rows as $row)
            {
              ?>
              <li class="CareersContent-listItem"><?php echo $row["preferredQualification"] ?>
              <?php
            }

            echo '</ul>';
          }
          ?>
        </div>
      </div>
    </div>

    <div class="CareersContent-card card">
      <div id="headingFour" class="CareersContent-cardContainer container">
        <a class="CareersContent-accordianHeadingButton collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <h2 class="CareersContent-accordianHeading">
          <span>Benefits</span>
            <img class="CareersContent-accordianHeadingImage CareersContent-accordianHeadingImage--open" src="/wp-content/uploads/2020/03/accordian-open.svg">
            <img class="CareersContent-accordianHeadingImage CareersContent-accordianHeadingImage--closed" src="/wp-content/uploads/2020/03/accordian-closed.svg">
          </h2>
        </a>
      </div>
      <div id="collapseFour" class="collapse container" aria-labelledby="headingFour" data-parent="#accordionExample">
        <div class="CareersContent-cardBody card-body">
        <?php 
          $rows = get_field('benefits');
          if($rows)
          {
            echo '<ul>';

            foreach($rows as $row)
            {
              ?>
              <li class="CareersContent-listItem"><?php echo $row["benefit"] ?>
              <?php
            }

            echo '</ul>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container CareersContent-cta">
    <a href="<?php the_field("linkedInLink") ?>" class="CareersContent-linkedIn btn btn-primary">
      <img class="CareersContent-linkedInImage" src="/wp-content/uploads/2020/03/icon-btn-applyLI@3x.svg">
      Apply with LinkedIn
    </a>
  </div>
</section>

<section class="d-none d-lg-block container CareerSingleContent">
  <div class="row">
    <div class="col-7">
      <div class="CareerSingleContent-section container">
        <h2 class="CarrerSingleContent-sectionTitle">About the Position</h2>
        <?php the_field('aboutThePosition') ?>
      </div>

      <div class="CareerSingleContent-sectionDivider"></div>

      <div class="CareerSingleContent-section container">
        <h2 class="CarrerSingleContent-sectionTitle">Minimum Qualifications</h2>
        <?php 
          $rows = get_field('minimumQualifications');
          if($rows)
          {
            echo '<ul>';

            foreach($rows as $row)
            {
              ?>
              <li class="CareersContent-listItem"><?php echo $row["minimunQualification"] ?>
              <?php
            }

            echo '</ul>';
          }
          ?>
      </div>

      <div class="CareerSingleContent-sectionDivider"></div>

      <div class="CareerSingleContent-section container">
        <h2 class="CarrerSingleContent-sectionTitle">Preferred Qualifications</h2>
        <?php 
          $rows = get_field('preferredQualifications');
          if($rows)
          {
            echo '<ul>';

            foreach($rows as $row)
            {
              ?>
              <li class="CareersContent-listItem"><?php echo $row["preferredQualification"] ?>
              <?php
            }

            echo '</ul>';
          }
          ?>
      </div>

    </div>
    <div class="col-5">
      <div class="CareerSingleContent-section container">
        <h2 class="CarrerSingleContent-sectionTitle">Benefits</h2>
        <?php 
          $rows = get_field('benefits');
          if($rows)
          {
            echo '<ul>';

            foreach($rows as $row)
            {
              ?>
              <li class="CareersContent-listItem"><?php echo $row["benefit"] ?>
              <?php
            }

            echo '</ul>';
          }
          ?>
      </div>

      <div class="CareerSingleContent-sectionDivider"></div>

      <div class="container CareersContent-cta">
        <a href="<?php the_field("linkedInLink") ?>" class="CareersContent-linkedIn btn btn-primary">
          <img class="CareersContent-linkedInImage" src="/wp-content/uploads/2020/03/icon-btn-applyLI@3x.svg">
          Apply with LinkedIn
        </a>
      </div>
    </div>
  </div>
</section>