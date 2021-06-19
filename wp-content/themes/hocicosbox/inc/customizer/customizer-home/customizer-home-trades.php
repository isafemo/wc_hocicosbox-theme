<?php

    add_action( 'customize_register', 'trades_customize_register' );

    if (!function_exists('trades_customize_register')) {

        function trades_customize_register( $wp_customize ){

            $wp_customize->add_section(
                'trades_custom', array(
                    'title' 		=> __( 'Nuestras marcas', 'hocicosbox'),
                )
            );

            $wp_customize->add_setting( 'customizer_trades_repeater', array(
                'sanitize_callback' => 'customizer_repeater_sanitize'
            ));
            $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'customizer_trades_repeater', array(
                'label'   => esc_html__('Marca','customizer-repeater'),
                'section' => 'trades_custom',
                'priority' => 1,
                'customizer_repeater_image_control' => true,
                'customizer_repeater_link_control' => true,
            ) ) );
        }
    }