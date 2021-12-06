<?php 
/**
 * Hocicosbox Theme Customizer
 *
 * @package hocicosbox
 */
include_once ABSPATH . 'wp-includes/class-wp-customize-control.php';
require_once get_template_directory() . '/inc/customizer/customizer-repeater/functions.php';
//GENERAL PANELS
require_once get_template_directory() . '/inc/customizer/customizer-panels/customizer-header-panel.php';
require_once get_template_directory() . '/inc/customizer/customizer-panels/customizer-home-panel.php';
//HEADER
require_once get_template_directory() . '/inc/customizer/customizer-general/customizer-header.php';
require_once get_template_directory() . '/inc/customizer/customizer-general/customizer-menu.php';
//HOME
require_once get_template_directory() . '/inc/customizer/customizer-home//basic-complete-simple-custom.php'; //TODO: QUITAR AL FINAL
require_once get_template_directory() . '/inc/customizer/customizer-home/customizer-home-carousel.php';
require_once get_template_directory() . '/inc/customizer/customizer-home/customizer-month.php';
require_once get_template_directory() . '/inc/customizer/customizer-home/customizer-solidary.php';
require_once get_template_directory() . '/inc/customizer/customizer-home/customizer-home-trades.php';
//PAGES
require_once get_template_directory() . '/inc/customizer/customizer-pages/customizer-hocicosbox-page.php';
require_once get_template_directory() . '/inc/customizer/customizer-pages/customizer-solidary-page.php';


