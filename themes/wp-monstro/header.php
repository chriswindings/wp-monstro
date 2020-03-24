<?php
/**
 * Header file for the wp-monstro theme.
 *
 * @package WordPress
 * @subpackage wp-monstro
 * @since 1.0.0
 */

 ?><!DOCTYPE html>
 <html <?php language_attributes(); ?>>
  <?php 
    function add_prefinery_js() {
        ?>
        <script type="text/javascript" src="https://widget.prefinery.com/widget/v2/yxzyf2su.js" async defer></script>
        <?php
    }
    add_action('wp_head', 'add_prefinery_js');
    ?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <title><?php bloginfo('name') ?> | <?php 
        $title = get_the_title();

        if(is_archive()){
		    $title = 'Careers';
        } 
        
        echo $title;

    ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

<?php 
    wp_body_open(); 
?>

<header>
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a class="navbar-brand mx-auto" href="/">
                <img class="d-md-none" src="/wp-content/uploads/2020/03/Montstro-logo.svg" alt="Monstro">
                <img class="d-none d-md-block" src="/wp-content/uploads/2020/03/logo-header-desktop.svg" alt="Monstro">
            </a>
            <button class="navbar-toggleable-sm collapsed d-md-none" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mt-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/#waitlist">Waitlist <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/careers">Careers</a>
                    </li>
                </ul>
                <div class="mb-5 d-md-none">
                    <?php get_template_part( 'partials/social-icons'); ?>
                </div>
            </div>
        </div>
    </nav>
</header>