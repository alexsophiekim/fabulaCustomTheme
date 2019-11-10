<?php
function addCustomThemeFiles_fabula(){
    wp_enqueue_style('bootstrapCSSfabula', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('customCSSfabula', get_template_directory_uri() . '/assets/css/style.css', array(), '0.0.2', 'all');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapJSfabula', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_script('customJSfabula', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '0.0.1', true);
};
add_action('wp_enqueue_scripts', 'addCustomThemeFiles_fabula');

add_theme_support( 'post-thumbnails',  array( 'post' ) );
add_image_size('icon', 50, 50, true);

function addCustomMenus_Fabula(){
        add_theme_support('menus');
        register_nav_menus( array(
          'top_nav' => __('Top Menu'),
          'footer_nav' => __('Footer Menu'),
          'side_nav' => __('Side Menu')
        ));
}
add_action('after_setup_theme', 'addCustomMenus_Fabula');

add_theme_support('post-formats', array('video','audio','image','gallery'));

add_theme_support('wp-block-styles');

function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
};
add_action( 'after_setup_theme', 'register_navwalker' );

function fabulaLogo() {
  add_theme_support('custom-logo');
};
add_action('after_setup_theme', 'fabulaLogo');
add_image_size('fabulaLogo', 200, 100);

function add_custom_post_types(){
    $args = array(
        'labels' => array(
            'name' => 'Soaps',
            'singular_name' => 'Soap',
            'add_new_item' => 'Add New Product'
        ),
        'public' => true,
        'hierarchical' => true,
        'show_in_nav_menus' => false,
        'show_in_rest' => false,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-store',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'post-formats'
        ),
        'delete_with_user' => false
    );
    register_post_type('soaps', $args);
}
add_action('init', 'add_custom_post_types');

require( get_template_directory() . '/inc/customizer.php' );
require( get_template_directory() . '/inc/custom_fields.php');
