<?php 
/**
 * Fany Lab Theme Customizer
 *
 * @package hocicosbox
 */
require_once get_template_directory() . '/inc/customizer/customizer-home/customizer-month.php';

add_action( 'customize_register', 'hocicosbox_customize_register' );

if (!function_exists('hocicosbox_customize_register')) {
        function hocicosbox_customize_register( $wp_customize ){

            $wp_customize->add_section(
                'carousel_custom', array(
                    'title' 		=> __( 'Opciones de Carrusel', 'hocicosbox'),
                )
            );

                // Field 1 - Copyright Text Box
                $wp_customize->add_setting(
                    'carousel_custom_image', array(
                    'type' 				=> 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'esc_url_raw'
                ));

                $wp_customize->add_control(
                    new WP_Customize_Image_Control( $wp_customize,
                        'carousel_custom_image', array(
                    'label' => 'Upload Logo',
                    'section' => 'carousel_custom',
                    'button_labels' => array(// All These labels are optional
                        'select' => 'Seleccionar imagen',
                        'remove' => 'Eliminar imagen',
                        'change' => 'Cambiar imagen',
                    )
                )));

                $wp_customize->add_setting(
                    'carousel_custom_title_1', array(
                        'type' 				=> 'theme_mod',
                        'default' 			=> '',
                        'sanitize_callback' => 'sanitize_text_field'
                    )
                );

                $wp_customize->add_control(
                    'carousel_custom_title_1', array(
                        'label' 		=> __( 'Titulo 1', 'hocicosbox' ),
                        'description' 	=> __( '' ),
                        'section' 		=> 'carousel_custom',
                        'type' 			=> 'text'
                    )
                );
                $wp_customize->add_setting(
                    'carousel_custom_title_2', array(
                        'type' 				=> 'theme_mod',
                        'default' 			=> '',
                        'sanitize_callback' => 'sanitize_text_field'
                    )
                );

                $wp_customize->add_control(
                    'carousel_custom_title_2', array(
                        'label' 		=> __( 'Titulo 2', 'hocicosbox' ),
                        'description' 	=> __( '' ),
                        'section' 		=> 'carousel_custom',
                        'type' 			=> 'text'
                    )
                );
            $wp_customize->add_setting(
                'carousel_custom_url_text', array(
                    'type' 				=> 'theme_mod',
                    'default' 			=> '',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'carousel_custom_url_text', array(
                    'label' 		=> __( 'Texto de enlace', 'hocicosbox' ),
                    'description' 	=> __( '', 'hocicosbox' ),
                    'section' 		=> 'carousel_custom',
                    'type' 			=> 'text'
                )
            );
                $wp_customize->add_setting(
                    'carousel_custom_url', array(
                        'type' 				=> 'theme_mod',
                        'default' 			=> '',
                        'sanitize_callback' => 'esc_url_raw'
                    )
                );

                $wp_customize->add_control(
                    'carousel_custom_url', array(
                        'label' 		=> __( 'Enlace', 'hocicosbox' ),
                        'description' 	=> __( '', 'hocicosbox' ),
                        'section' 		=> 'carousel_custom',
                        'type' 			=> 'url'
                    )
                );

            /**
            Multiple input field
             **/
//            $wp_customize->add_section(
//                'test', array(
//                    'title' 		=> __( 'TEST Setting', 'hocicosbox'),
//                    'description' 	=> __( 'TEST Section', 'hocicosbox' ),
//                )
//            );
//
//            $wp_customize->add_setting('multi_field', array(
//                'default'           => '',
//                'transport'         => 'postMessage',
//                'sanitize_callback' => 'mytheme_text_sanitization',
//            ));
//            $wp_customize->add_control(new Multi_Input_Custom_control($wp_customize, 'multi_field', array(
//                'label'    		=> esc_html__('Multiple inputs', 'mytheme'),
//                'description' 	=> esc_html__('Add more and more and more...', 'mytheme'),
//                'settings'		=> 'multi_field',
//                'section'  		=> 'test',
//            )));
    }
}
