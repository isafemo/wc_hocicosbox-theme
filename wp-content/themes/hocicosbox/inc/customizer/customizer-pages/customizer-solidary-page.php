<?php

add_action( 'customize_register', 'rincon_solidario_customize_register' );

if (!function_exists('rincon_solidario_customize_register')) {

    function rincon_solidario_customize_register( $wp_customize ){

        $wp_customize->add_section(
            'rincon_solidario_custom', array(
                'title' 		=> __( 'Rincon Solidario', 'hocicosbox'),
            )
        );

        $wp_customize->add_setting( 'customizer_rincon_solidario_repeater', array(
            'sanitize_callback' => 'customizer_repeater_sanitize'
        ));
        $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'customizer_rincon_solidario_repeater', array(
            'label'   => esc_html__('Rincon solidario','customizer-repeater'),
            'section' => 'rincon_solidario_custom',
            'priority' => 1,
            'customizer_repeater_image_control' => true,
            'customizer_repeater_title_control' => true,
            'customizer_repeater_subtitle_control' => true,
            'customizer_repeater_link_control' => true,
            'customizer_repeater_shortcode_control' => true,
        ) ) );
    }
}
