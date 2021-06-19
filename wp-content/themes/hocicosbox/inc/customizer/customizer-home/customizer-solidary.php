<?php 
/**
 * Hocicosbox Month Theme Customizer
 *
 * @package hocicosbox
 */

add_action( 'customize_register', 'hocicosbox_customize_home_solidary' );

if (!function_exists('hocicosbox_customize_home_solidary')) {
        function hocicosbox_customize_home_solidary( $wp_customize ){

            $wp_customize->add_section(
                'home_solidary', array(
                    'title' 		=> __( 'Espacio solidario', 'hocicosbox'),
                )
            );

                $wp_customize->add_setting(
                    'home_solidary_image', array(
                    'type' 				=> 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'esc_url_raw'
                ));

                $wp_customize->add_control(
                    new WP_Customize_Image_Control( $wp_customize,
                        'home_solidary_image', array(
                    'label' => 'Imagen',
                    'section' => 'home_solidary',
                    'button_labels' => array(// All These labels are optional
                        'select' => 'Seleccionar imagen',
                        'remove' => 'Eliminar imagen',
                        'change' => 'Cambiar imagen',
                    )
                )));

    }
}
