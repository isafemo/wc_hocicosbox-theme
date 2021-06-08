<?php
/**
 * Hocicosbox functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hocicosbox
 */

/**
 * Register Custom Navigation Walker
 */
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/inc/customizer/customizer.php';
require get_template_directory() . '/inc/customizer/customizer-repeater/inc/customizer.php';
/**
 * Enqueue Custom Navigation Walker
 */
function hocicosbox_scripts()
{
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '4.6.0', true);
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '4.6.0', 'all');
    wp_enqueue_script('jQuery-js', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array('jquery'), '3.6.0', true);
    wp_enqueue_script('header-js', get_template_directory_uri() . '/assets/js/header.js', array('jquery'), '1.0', true);
    wp_enqueue_style('hocicosbox-style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all');
    wp_enqueue_style('hocicosbox-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
    // Flexible JS and CSS files
    wp_enqueue_script('flexslider-min-js', get_template_directory_uri() . '/inc/plugins/flexslider/jquery.flexslider-min.js', array('jquery'), '', true);
    wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/inc/plugins/flexslider/flexslider.js', array('jquery'), '', true);
    wp_enqueue_style('flexslider-css', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/inc/plugins/flexslider/flexslider-rtl.css'), 'all');
}

add_action('wp_enqueue_scripts', 'hocicosbox_scripts');

/**
 * Wordpress features
 */
function hocicosbox_config()
{
    register_nav_menus(
        array(
            'hocicosbox_header_menu' => __('header-menu', 'hocicosbox'),
            'hocicosbox_header_menu_mobile' => __('header-menu-mobile', 'hocicosbox'),
            'hocicosbox_footer_menu' => __('footer-menu', 'hocicosbox'),
            'hocicosbox_header_icons' => __('icons-menu', 'hocicosbox'),
        )
    );

    add_theme_support('woocommerce', array(
            'thumbnail_image_width' => 244,
            'single_image_width' => 244,
            'product_grid' => array(
                'defaults_rows' => 10,
                'min_rows' => 4,
                'max_rows' => 10,
                'default_columns' => 1,
                'min_columns' => 4,
                'max_columns' => 4,
            )
        )
    );

    add_image_size('hocicosbox-slider',1920,800,array('center','center'));

    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    if (!isset($content_width)) {
        $content_width = 600;
    }

}

add_action('after_setup_theme', 'hocicosbox_config', 0);