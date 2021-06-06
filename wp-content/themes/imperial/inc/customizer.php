<?php
/**
 * imperial Theme Customizer
 *
 * @package imperial
 */


function imperial_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    //var_dump($wp_customize);

    $customizer_dir = get_template_directory() . '/inc/customizer/';
    foreach ( glob( $customizer_dir . '*.php' ) as $customizer_files ) {
        require_once $customizer_files;
    }
    
}
add_action( 'customize_register', 'imperial_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function imperial_customize_preview_js() {
	wp_enqueue_script( 'imperial_customizer', get_template_directory_uri() . '/assets/js/vendor/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'imperial_customize_preview_js' );
