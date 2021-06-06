<?php
function imperial_demo_import() {
    return array(
        array(
            'import_file_name'             => 'Import Demo',
            'categories'                   => array( 'Imperial' ),
            'local_import_file'            => trailingslashit( IMPERIAL_THEME_INC_DIR ) . 'demo-content/demo-content.xml',
            'local_import_widget_file'     => trailingslashit( IMPERIAL_THEME_INC_DIR ) . 'demo-content/widgets.wie',
            'local_import_customizer_file' => trailingslashit( IMPERIAL_THEME_INC_DIR ) . 'demo-content/customizer.dat',
        ),
    );
}

add_filter( 'pt-ocdi/import_files', 'imperial_demo_import' );

function imperial_demo_setup() {

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
        'primary' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
    )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home Default' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

//Import Revolution Slider
    if ( class_exists( 'RevSlider' ) ) {
        $absolute_path = __FILE__;
        $path_to_file  = explode( 'wp-content', $absolute_path );
        $path_to_wp    = $path_to_file[0];

        get_template_part( $path_to_wp . '/wp-load.php' );
        get_template_part( $path_to_wp . '/wp-includes/functions.php' );

        $slider_array = array(
            IMPERIAL_THEME_INC_DIR . "demo-content/slideshow.zip",
        );

        $slider = new RevSlider();

        foreach ( $slider_array as $filepath ) {
            $slider->importSliderFromPost( true, true, $filepath );
        }

        echo 'Imperial Slideshow Imported';
    }

}

add_action( 'pt-ocdi/after_import', 'imperial_demo_setup' );

add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );