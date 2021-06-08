<?php 
/**
 * Hocicosbox Month Theme Customizer
 *
 * @package hocicosbox
 */

add_action( 'customize_register', 'hocicosbox_customize_home_month' );

if (!function_exists('hocicosbox_customize_home_month')) {
        function hocicosbox_customize_home_month( $wp_customize ){

            $wp_customize->add_section(
                'home_month', array(
                    'title' 		=> __( 'Meses hocicosbox', 'hocicosbox'),
                )
            );

                $wp_customize->add_setting(
                    'home_box_image_1', array(
                    'type' 				=> 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'esc_url_raw'
                ));

                $wp_customize->add_control(
                    new WP_Customize_Image_Control( $wp_customize,
                        'home_box_image_1', array(
                    'label' => 'Imagen hocicosbox perros',
                    'section' => 'home_month',
                    'button_labels' => array(// All These labels are optional
                        'select' => 'Seleccionar imagen',
                        'remove' => 'Eliminar imagen',
                        'change' => 'Cambiar imagen',
                    )
                )));

                $wp_customize->add_setting(
                    'home_box_image_2', array(
                    'type' 				=> 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'esc_url_raw'
                ));

                $wp_customize->add_control(
                    new WP_Customize_Image_Control( $wp_customize,
                        'home_box_image_2', array(
                            'label' => 'Imagen hocicosbox Gatos',
                            'section' => 'home_month',
                            'button_labels' => array(// All These labels are optional
                                'select' => 'Seleccionar imagen',
                                'remove' => 'Eliminar imagen',
                                'change' => 'Cambiar imagen',
                            )
                        )));

    }
}
