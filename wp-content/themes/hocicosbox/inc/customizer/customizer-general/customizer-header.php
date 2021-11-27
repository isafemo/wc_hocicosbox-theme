<?php
/**
 * Section: Basic
 *
 * Basic Customizer section with basic controls.
 *
 * @since     1.0.0
 * @package   WPC
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Customize function.
if ( ! function_exists( 'hb_customize_header_notice' ) ) {
    // Customize Register action.
    add_action( 'customize_register', 'hb_customize_header_notice' );

    /**
     * Customize Panel.
     *
     * Adds a Panel, Section with basic controls.
     *
     * @param  object WP_Customize $wp_customize Instance of the WP_Customize_Manager class.
     * @since  1.0.0
     */
    function hb_customize_header_notice( $wp_customize ) {
        // Section: Notices.
        $wp_customize->add_section( 'hb_section_header_notice', array(
            'priority'       => 10,
            'panel'          => 'hb_general_panel_wpcustomize',
            'title'          => __( 'Barra informativa', 'WPC' ),
            'description'    => __( 'Barra informativa al inicio de la web.', 'WPC' ),
            'capability'     => 'edit_theme_options'
        ) );

        // Setting: Notices.
        $wp_customize->add_setting( 'hb_notice_text', array(
            'type'                 => 'theme_mod',
            'default'              => 'BARRA INFORMATIVA PARA NOTICIAS | EDITABLE',
            'transport'            => 'refresh', // Options: refresh or postMessage.
            'capability'           => 'edit_theme_options',
            'sanitize_callback'    => 'esc_attr'
        ) );

        // Control: Notices.
        $wp_customize->add_control( 'hb_notice_text', array(
            'label'       => __( 'Texto a mostrar', 'WPC' ),
            'description' => __( 'El texto que pongamos aquí se mostrará en la barra inicial, separar informaciones con barra |', 'WPC' ),
            'section'     => 'hb_section_header_notice',
            'type'        => 'text'
        ) );

        // Section: Logo.
        $wp_customize->add_section( 'hb_section_header_logo', array(
            'priority'       => 10,
            'panel'          => 'hb_general_panel_wpcustomize',
            'title'          => __( 'Logotipo', 'WPC' ),
            'description'    => __( 'Logotipo de la cabecera.', 'WPC' ),
            'capability'     => 'edit_theme_options'
        ) );

        // Setting: Logo L.
        $wp_customize->add_setting( 'hb_header_logo_L', array(
            'type'                 => 'theme_mod',
            'sanitize_callback' => 'esc_url_raw',
            'transport'            => 'refresh', // Options: refresh or postMessage.
            'capability'           => 'edit_theme_options',
        ));

        // Control: Logo L.
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hb_header_logo_control_L', array(
            'label' => 'Imagen logo grande',
            'priority' => 1,
            'section' => 'hb_section_header_logo',
            'settings' => 'hb_header_logo_L',
            'button_labels' => array(// All These labels are optional
                'select' => 'Seleccionar imagen',
                'change' => 'Cambiar imagen',
            )
        )));

        // Setting: Logo S.
        $wp_customize->add_setting( 'hb_header_logo_S', array(
            'type'                 => 'theme_mod',
            'sanitize_callback' => 'esc_url_raw',
            'transport'            => 'refresh', // Options: refresh or postMessage.
            'capability'           => 'edit_theme_options',
        ));

        // Control: Logo S.
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hb_header_logo_control_S', array(
            'label' => 'Imagen logo pequeño',
            'priority' => 2,
            'section' => 'hb_section_header_logo',
            'settings' => 'hb_header_logo_S',
            'button_labels' => array(// All These labels are optional
                'select' => 'Seleccionar imagen',
                'change' => 'Cambiar imagen',
            )
        )));
    }
}