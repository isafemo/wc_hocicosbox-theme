<?php
$wp_customize->add_panel( 'top_header_panel', array(
    'title' => esc_html__('Top Header Settings', 'imperial'),
    'priority' => 18,
) );

$wp_customize->add_section( 'contact_section', array(
    'title' => esc_html__( 'Contact Section', 'imperial' ),
    'panel' => 'top_header_panel',
    'priority' => 11,
) );

$wp_customize->add_setting( 'contact_phone', array (
    'default' => esc_html( '880-1713078083' ),
    'transport' => 'refresh',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'contact_phone_control',
        array(
            'label' => esc_html__( 'Contact Number', 'imperial' ),
            'section' => 'contact_section',
            'settings' => 'contact_phone',
            'type' => 'text',
        )
    )
);

$wp_customize->add_setting( 'contact_email', array (
    'default' => esc_html( 'mail@imperial.com' ),
    'transport' => 'refresh',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'contact_email_control',
        array(
            'label' => esc_html__( 'Email Address', 'imperial' ),
            'section' => 'contact_section',
            'settings' => 'contact_email',
            'type' => 'text',
        )
    )
);


$wp_customize->add_section( 'social_icon_sec', array(
    'title' => esc_html__( 'Social Section', 'imperial' ),
    'panel' => 'top_header_panel',
    'priority' => 12,
) );
$wp_customize->add_setting( 'socail_text', array (
        'default' => esc_html( 'Follow us on :' ),
        'transport' => 'refresh',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'socail_text_control',
        array(
            'label' => esc_html__( 'Social Text', 'imperial' ),
            'section' => 'social_icon_sec',
            'settings' => 'socail_text',
            'type' => 'text',
        )
    )
);

$wp_customize->add_setting( 'fb_url', array (
    'default' => 'http://facebook.com/username',
    'transport' => 'refresh',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw'
) );
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'fb_url_control',
        array(
            'label' => esc_html__( 'Facebook', 'imperial' ),
            'section' => 'social_icon_sec',
            'settings' => 'fb_url',
            'type' => 'text',
        )
    )
);
$wp_customize->add_setting( 'tw_url', array (
    'default' => 'http://twitter.com/username',
    'transport' => 'refresh',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw'
) );
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'tw_url_control',
        array(
            'label' => esc_html__( 'Twitter', 'imperial' ),
            'section' => 'social_icon_sec',
            'settings' => 'tw_url',
            'type' => 'text',
        )
    )
);
$wp_customize->add_setting( 'gplus_url', array (
    'default' => 'http://plus.google.com/username',
    'transport' => 'refresh',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw'
) );
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'gplus_url_control',
        array(
            'label' => esc_html__( 'Google Plus', 'imperial' ),
            'section' => 'social_icon_sec',
            'settings' => 'gplus_url',
            'type' => 'text',
        )
    )
);
$wp_customize->add_setting( 'lin_url', array (
    'default' => 'http://linkedin.com/username',
    'transport' => 'refresh',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'lin_url_control',
        array(
            'label' => esc_html__( 'Linked In', 'imperial' ),
            'section' => 'social_icon_sec',
            'settings' => 'lin_url',
            'type' => 'text',
        )
    )
);
$wp_customize->add_setting( 'pin_url', array (
    'default' => 'http://pinterest.com/username',
    'transport' => 'refresh',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'pin_url_control',
        array(
            'label' => esc_html__( 'Pinterest', 'imperial' ),
            'section' => 'social_icon_sec',
            'settings' => 'pin_url',
            'type' => 'text',
        )
    )
);
