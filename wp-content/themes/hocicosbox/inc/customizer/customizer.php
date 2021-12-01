<?php 
/**
 * Hocicosbox Theme Customizer
 *
 * @package hocicosbox
 */
include_once ABSPATH . 'wp-includes/class-wp-customize-control.php';
//GENERAL PANEL
require_once get_template_directory() . '/inc/customizer/customizer-general/customizer-general-panel.php';
require_once get_template_directory() . '/inc/customizer/basic-complete-simple-custom.php';
require_once get_template_directory() . '/inc/customizer/customizer-general/customizer-header.php';
//HOME
require_once get_template_directory() . '/inc/customizer/customizer-repeater/functions.php';
require_once get_template_directory() . '/inc/customizer/customizer-home/customizer-home-carousel.php';
require_once get_template_directory() . '/inc/customizer/customizer-home/customizer-month.php';
require_once get_template_directory() . '/inc/customizer/customizer-home/customizer-solidary.php';
require_once get_template_directory() . '/inc/customizer/customizer-home/customizer-home-trades.php';
require_once get_template_directory() . '/inc/customizer/customizer-pages/customizer-solidary-page.php';


