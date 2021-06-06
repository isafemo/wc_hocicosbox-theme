<?php
$wp_customize->add_setting('primary_color',array(
    'default'	=> '#4dd9c9',
    'transport' => 'refresh',
    'capability' => 'edit_theme_options',
    'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
        'label' => __('Primary Color','imperial'),
        'section' => 'colors',
        'settings' => 'primary_color'
    ))
);
$wp_customize->add_setting('text_color',array(
    'default'	=> '#777777',
    'transport' => 'refresh',
    'capability' => 'edit_theme_options',
    'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize,'text_color_scheme',array(
        'label' => __('Text Color','imperial'),
        'section' => 'colors',
        'settings' => 'text_color'
    ))
);