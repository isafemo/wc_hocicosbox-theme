<?php
$wp_customize->add_panel( 'footer_panel', array(
    'title' => esc_html__('Footer Settings', 'imperial'),
    'priority' => 120,
) );
$wp_customize->add_section( 'copyright_sec', array(
    'title' => esc_html__( 'Copyright', 'imperial' ),
    'panel' => 'footer_panel',
    'priority' => 100,
) );
$wp_customize->add_setting( 'copyright_text', array(
    'default' => __( 'Copyright 2017 imperial WordPress Theme - by iThemesLab', 'imperial' ),
    'transport' => 'postMessage',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'copyright_text_control',
        array(
            'label' => esc_html__( 'Copyright Text', 'imperial' ),
            'section' => 'copyright_sec',
            'settings' => 'copyright_text',
            'type' => 'text',
        )
    )
);