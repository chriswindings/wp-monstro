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
  <?php wp_head(); ?>
  <?php wp_enqueue_style('navbar', get_stylesheet_directory() . 'assets/dist/css/navbar.min.css' ) ?>
</head>

<body <?php body_class() ?>>

<?php 
    wp_body_open(); 
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="/wp-content/uploads/2020/03/Montstro-logo.svg" alt="Monstro"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        </ul>
    </div>
    </nav>
</header>