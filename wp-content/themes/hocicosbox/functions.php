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
/**
 * Enqueue Custom Navigation Walker
 */
function hocicosbox_scripts()
{
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.js', array('jquery'), '4.6.0', true);
    wp_enqueue_script('popper-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.bundle.js', array('jquery'), '4.6.0', true);
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '4.6.0', 'all');
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array('jquery'), '3.6.0', true);
    wp_enqueue_script('header-js', get_template_directory_uri() . '/assets/js/header.js', array('jquery'), '1.0', true);
    wp_enqueue_script('cart-js', get_template_directory_uri() . '/assets/js/hb-cart-scripts.js', array('jquery'), '1.0', true);
    wp_enqueue_style('hocicosbox-style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all');
    wp_enqueue_style('hocicosbox-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('hocicosbox-style-rs-css', get_template_directory_uri() . '/assets/css/rincon-solidario.css', array(), '1.1', 'all');
    // Flexible JS and CSS files
    wp_enqueue_script('flexslider-min-js', get_template_directory_uri() . '/inc/plugins/flexslider/jquery.flexslider-min.js', array('jquery'), '', true);
    wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/inc/plugins/flexslider/flexslider.js', array('jquery'), '', true);
    wp_enqueue_style('flexslider-css', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/inc/plugins/flexslider/flexslider-rtl.css'), 'all');
    wp_enqueue_script('slider-scale-js', get_template_directory_uri() . '/assets/js/imageScale/image-scale.js', array('jquery'), '', true);
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
    add_image_size('hocicosbox-home-blog',305,306,array('center','center'));

    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    if (!isset($content_width)) {
        $content_width = 600;
    }

}

add_action('after_setup_theme', 'hocicosbox_config', 0);

function cart_scripts()
{
    wp_enqueue_script('cart-js', get_template_directory_uri() . '/assets/js/hb-cart-scripts.js', array('jquery'), '1.0', true);
}
//RELOAD SCRIPT CART
function reload_script_cart_hb() {
    add_action('wp_enqueue_scripts', 'cart_scripts');
    exit;
}

add_action( 'woocommerce_customer_save_address', 'action_woocommerce_customer_save_address', 99, 2 );
//EDIT ADDRESS
function action_woocommerce_customer_save_address( $user_id, $load_address ) {
    wp_safe_redirect(wc_get_page_permalink('myaccount'));
    exit;
};
add_action( 'woocommerce_customer_save_address', 'action_woocommerce_customer_save_address', 99, 2 );
//add_filter( 'woocommerce_billing_fields' , 'custom_override_billing_fields' );
//add_filter( 'woocommerce_shipping_fields' , 'custom_override_shipping_fields' );

function custom_override_billing_fields( $fields ) {
//    MODIFY
    $fields['billing_first_name']['label'] = 'Nombre y Apellidos o Razón social';
    $fields['billing_company']['label'] = 'CIF';
    $fields['billing_company']['required'] = '1';
    $fields['billing_address_1']['label'] = 'Dirección';
    $fields['billing_city']['label'] = 'Ciudad, Provincia';
    $fields['billing_email']['label'] = 'Email';
    $fields['billing_postcode']['label'] = 'CP';
    $fields['billing_postcode']['priority'] = '71';
//    UNSET
    unset($fields['billing_last_name']);
    unset($fields['billing_country']);
    unset($fields['billing_address_2']);
    unset($fields['billing_state']);
    return $fields;
}

function custom_override_shipping_fields( $fields ) {
//    ADD
    $fields['shipping_email'] = [
        'label' => 'Email',
        'required' => 1,
        'type' => 'email',
        'class' => [0 => 'form-row-wide'],
        'validate' => [0 => 'email'],
        'autocomplete' => 'email username',
        'priority' => 110
    ];
    $fields['shipping_phone'] = [
        'label' => 'Teléfono',
        'required' => 1,
        'type' => 'tel',
        'class' => [0 => 'form-row-wide'],
        'validate' => [0 => 'phone'],
        'autocomplete' => 'tel',
        'priority' => 100
    ];
//    MODIFY
    $fields['shipping_address_1']['label'] = 'Dirección';
    $fields['shipping_city']['label'] = 'Ciudad, Provincia';
    $fields['shipping_postcode']['label'] = 'CP';
    $fields['shipping_postcode']['priority'] = '71';
//    UNSET
    unset($fields['shipping_state']);
    unset($fields['shipping_address_2']);
    unset($fields['shipping_country']);
    unset($fields['shipping_company']);
    return $fields;
}