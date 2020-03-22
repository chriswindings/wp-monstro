<?php
wp_enqueue_style('global', get_stylesheet_directory_uri() . '/assets/dist/css/global.min.css' );
wp_enqueue_style('navbar', get_stylesheet_directory_uri() . '/assets/dist/css/navbar.min.css' );
wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/assets/dist/css/footer.min.css' );
wp_enqueue_style('home-page', get_stylesheet_directory_uri() . '/assets/dist/css/home.min.css' );
wp_enqueue_style('careers-page', get_stylesheet_directory_uri() . '/assets/dist/css/careers.min.css' );
wp_enqueue_style('careers-single-page', get_stylesheet_directory_uri() . '/assets/dist/css/careersSingle.min.css' );
wp_enqueue_style('main', get_stylesheet_uri() );
wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Red+Hat+Display:700|Red+Hat+Text:400,700&display=swap');

// wp_enqueue_style( 'bootstrap', '/wp-content/themes/wp-monstro/node_modules/bootstrap/dist/css/bootstrap.min.css');
wp_enqueue_script('bootstrap', '/wp-content/themes/wp-monstro/node_modules/bootstrap/dist/js/bootstrap.bundle.js', array('jquery'));



/*Custom Post type start*/
function cw_post_type_careers() {
    $supports = array(
    'title', // post title
    'custom-fields', // custom fields
    );
    $labels = array(
    'name' => _x('careers', 'plural'),
    'singular_name' => _x('careers', 'singular'),
    'menu_name' => _x('careers', 'admin menu'),
    'name_admin_bar' => _x('careers', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New careers'),
    'new_item' => __('New careers'),
    'edit_item' => __('Edit careers'),
    'view_item' => __('View careers'),
    'all_items' => __('All careers'),
    'search_items' => __('Search careers'),
    'not_found' => __('No careers found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'careers'),
    'has_archive' => true,
    'hierarchical' => false,
    );
    register_post_type('careers', $args);
}
    add_action('init', 'cw_post_type_careers');
    /*Custom Post type end*/
