<?php

function theme_enqueue_styles()
{
    wp_enqueue_style('theme', get_template_directory_uri() . '/theme.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('front-page', get_template_directory_uri() . '/css/front-page.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('single-page', get_template_directory_uri() . '/css/single-page.css');
    wp_enqueue_style('single-page', get_template_directory_uri() . '/css/animation.css');
    wp_enqueue_script('js_script', get_stylesheet_directory_uri() . '/js/animation.js');
    wp_enqueue_script('burger-menu', get_template_directory_uri() . '/js/burger-menu.js');

}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


// Ajout de la gestion des menus dans le tableau de bord de wordpress

function register_custom_menus() {
    register_nav_menus(array(
        'menu_principal' => __('Menu principal', 'Portfolio'),
        'menu_secondaire' => __('Menu secondaire', 'Portfolio'),
    ));
}
 
add_action('init', 'register_custom_menus');

// Ajout d'un logo personnalisable au panel d'administration de wordpress
add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 100,
    'flex-height' => true,
    'flex-width'  => true,
));