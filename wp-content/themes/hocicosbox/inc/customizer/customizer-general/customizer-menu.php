<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
add_action( 'customize_register', 'olsen_light_child_customize_register' );
function olsen_light_child_customize_register( WP_Customize_Manager $wp_customize ) {
    require_once get_stylesheet_directory() . '/inc/customizer/customizer-panels/categories-hb-dropdown.php';

    $wp_customize->add_section( 'homepage', array(
        'title' => esc_html_x( 'Homepage Options', 'customizer section title', 'olsen-light-child' ),
        'panel'          => 'hb_general_header_wpcustomize',
    ) );

    $wp_customize->add_setting( 'home_slider_category', array(
        'default'           => 0,
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( new My_Dropdown_Category_Control( $wp_customize, 'home_slider_category', array(
        'section'       => 'homepage',
        'label'         => esc_html__( 'Slider posts category', 'olsen-light-child' ),
        'description'   => esc_html__( 'Select the category that the slider will show posts from. If no category is selected, the slider will be disabled.', 'olsen-light-child' ),
        // Uncomment to pass arguments to wp_dropdown_categories()
        //'dropdown_args' => array(
        //	'taxonomy' => 'post_tag',
        //),
    ) ) );
}
//if ( ! function_exists( 'hb_customize_header_menu' ) ) {
//    // Customize Register action.
//    add_action('customize_register', 'hb_customize_header_menu');
//    function hb_customize_header_menu( $wp_customize ) {
//        // Section: Basic.
//        $wp_customize->add_section( 'wpc_section_menu', array(
//            'priority'       => 10,
//            'panel'          => 'hb_general_header_wpcustomize',
//            'title'          => __( 'Menú 1', 'WPC' ),
//            'description'    => __( 'Prueba menu.', 'WPC' ),
//            'capability'     => 'edit_theme_options'
//        ) );
//
//        $wp_customize->add_setting('wpc_select_categorie', array(
//            'capability' => 'edit_theme_options',
//            'type'       => 'option',
//        ));
//        $wp_customize->add_control('wpc_select_categorie', [
//            'label' => 'Featured Post from Category 2 ',
//            'description' => 'Featured Post from Category 2 ',
//            'section'    => 'wpc_section_menu',
//            'settings' => 'featured_post_1',
//            'type' => 'select',
//            // 'type'        => 'checkbox',
//            'choices' => get_categories(),
//        ]);
//        // Setting: Select.
//        $wp_customize->add_setting( 'wpc_select_categorie_2', array(
//            'type'                 => 'theme_mod',
//            'default'              => 'enable',
//            'transport'            => 'refresh', // Options: refresh or postMessage.
//            'capability'           => 'edit_theme_options',
//            'sanitize_callback'    => 'wpc_sanitize_select' // Custom function in customizer-sanitization.php file.
//        ) );
//
////         Control: Select.
//        $wp_customize->add_control( 'wpc_select_categorie_2', array(
//            'label'       => __( 'Select', 'WPC' ),
//            'description' => __( 'Description', 'WPC' ),
//            'section'     => 'wpc_section_menu',
//            'type'        => 'select',
//            'choices'  => array(
//                'enable'  => 'Enable',
//                'disable' => 'Disable'
//            )
//        ) );
//    }
//    function get_categories_select()
//    {
//        $teh_cats = get_categories();
//        $results = [];
//
//        $count = count($teh_cats);
//        for ($i = 0; $i < $count; $i++) {
//            if (isset($teh_cats[$i]))
//                $results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;
//            else
//                $count++;
//        }
//        return $results;
//    }
//}
?>