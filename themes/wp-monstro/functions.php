<?php
wp_enqueue_style('global', get_stylesheet_directory_uri() . '/assets/dist/css/global.min.css' );
wp_enqueue_style('navbar', get_stylesheet_directory_uri() . '/assets/dist/css/navbar.min.css' );
wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/assets/dist/css/footer.min.css' );
wp_enqueue_style('home-page', get_stylesheet_directory_uri() . '/assets/dist/css/home.min.css' );
wp_enqueue_style('careers-page', get_stylesheet_directory_uri() . '/assets/dist/css/careers.min.css' );
wp_enqueue_style('main', get_stylesheet_uri() );
wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Red+Hat+Display:700|Red+Hat+Text:400,700&display=swap');

// wp_enqueue_style( 'bootstrap', '/wp-content/themes/wp-monstro/node_modules/bootstrap/dist/css/bootstrap.min.css');
wp_enqueue_script('bootstrap', '/wp-content/themes/wp-monstro/node_modules/bootstrap/dist/js/bootstrap.bundle.js', array('jquery'));
