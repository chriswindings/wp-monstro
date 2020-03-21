<?php

// wp_enqueue_style( 'bootstrap', '/wp-content/themes/wp-monstro/node_modules/bootstrap/dist/css/bootstrap.min.css');
wp_enqueue_script('bootstrap', '/wp-content/themes/wp-monstro/node_modules/bootstrap/dist/js/bootstrap.bundle.js', array('jquery'));
wp_enqueue_style('main', get_stylesheet_uri() );
wp_enqueue_style('navbar', get_stylesheet_directory_uri() . '/assets/dist/css/navbar.min.css' );
wp_enqueue_style('global', get_stylesheet_directory_uri() . '/assets/dist/css/global.min.css' );
