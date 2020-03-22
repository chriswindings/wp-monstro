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

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <?php wp_head(); ?>
  <?php wp_enqueue_style('navbar', get_stylesheet_directory() . 'assets/dist/css/navbar.min.css' ) ?>
</head>

<body <?php body_class() ?>>

<?php 
    wp_body_open(); 
?>

<header>
    <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand mx-auto" href="/"><img src="/wp-content/uploads/2020/03/Montstro-logo.svg" alt="Monstro"></a>
            <button class="navbar-toggleable-sm collapsed" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="/waitlist">Waitlist <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/careers">Careers</a>
            </li>
            </ul>
            <div class="mb-5">
                <a href="#" class="ml-1 mr-1"><img src="/wp-content/uploads/2020/03/faceook-icon.svg" alt="facebook"></img></a>
                <a href="#" class="ml-1 mr-1"><img src="/wp-content/uploads/2020/03/twitter-icon.svg" alt="twitter"></img></a>
                <a href="#" class="ml-1 mr-1"><img src="/wp-content/uploads/2020/03/linkedIn-icon.svg" alt="linkedIn"></img></a>
                <a href="#" class="ml-1 mr-1"><img src="/wp-content/uploads/2020/03/instagram-icon.svg" alt="instagram"></img></a>
            </div>
        </div>
    </nav>
</header>