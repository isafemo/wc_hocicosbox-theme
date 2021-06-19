<?php

    add_action( 'customize_register', 'hocicosbox_customize_register' );

    if (!function_exists('hocicosbox_customize_register')) {

        function hocicosbox_customize_register( $wp_customize ){

            $wp_customize->add_section(
                'carousel_custom', array(
                    'title' 		=> __( 'Opciones de Carrusel', 'hocicosbox'),
                )
            );

            $wp_customize->add_setting( 'customizer_repeater_example', array(
                'sanitize_callback' => 'customizer_repeater_sanitize'
            ));
            $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'customizer_repeater_example', array(
                'label'   => esc_html__('Example','customizer-repeater'),
                'section' => 'carousel_custom',
                'priority' => 1,
                'customizer_repeater_image_control' => true,
                'customizer_repeater_title_control' => true,
                'customizer_repeater_subtitle_control' => true,
                'customizer_repeater_link_control' => true,
                'customizer_repeater_shortcode_control' => true,
            ) ) );
        }
    }