<?php

add_action( 'customize_register', 'hocicosbox_page_customize_register' );

if (!function_exists('hocicosbox_page_customize_register')) {

    function hocicosbox_page_customize_register( $wp_customize ){

        $wp_customize->add_section(
            'hocicosbox_custom', array(
                'title' 		=> __( 'Sección Hocicosbox', 'hocicosbox'),
            )
        );

        $wp_customize->add_setting(
            'hocicosbox_big_image', array(
            'type' 				=> 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        ));

        $wp_customize->add_control(
            new WP_Customize_Image_Control( $wp_customize,
                'hocicosbox_big_image', array(
                    'label' => 'Imagen grande inicio',
                    'section' => 'hocicosbox_custom',
                    'button_labels' => array(// All These labels are optional
                        'select' => 'Seleccionar imagen',
                        'remove' => 'Eliminar imagen',
                        'change' => 'Cambiar imagen',
                    )
                )));
    }
}
