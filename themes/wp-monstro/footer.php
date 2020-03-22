<?php
/**
 * Footer file for the wp-monstro theme.
 *
 * @package WordPress
 * @subpackage wp-monstro
 * @since 1.0.0
 */

 ?>

 <footer class="Footer container">
    <div class="Footer-buttonWrapper d-md-none">
      <a href="#">
        <button class="Footer-buttonToTop" type="button">
          <img class="Footer-buttonImage" src="/wp-content/uploads/2020/03/up-arrow.svg" alt="up-arrow">
        </button>
      </a>
    </div>

    <div class="Footer-half">
      <div class="Footer-logoWrapper">
        <img class="Footer-logo" src="/wp-content/uploads/2020/03/Monstro.svg" alt="Monstro Logo"> 
      </div>
      <div class="Footer-copyright d-none d-md-block">
        <span class="Footer-copyrightText">Copyright © 2020 Monstro, LLC. All Rights Reserved</span>
      </div>
    </div>

    <div class="Footer-half">
      <div class="Footer-socialIcons">
        <?php get_template_part( 'partials/social-icons'); ?>
      </div>

      <div class="Footer-links">
        <a class="Footer-link" href="/privacy-policy">Privacy Policy</a>
        <span class="Footer-divider">|</span>
        <a class="Footer-link" href="/disclosures">Disclosures</a>
      </div>
    </div>

    <div class="Footer-copyright d-md-none">
      <span class="Footer-copyrightText">Copyright © 2020 Monstro, LLC. All Rights Reserved</span>
    </div>

 </footer>

<?php wp_footer(); ?>
  </body>
</html>