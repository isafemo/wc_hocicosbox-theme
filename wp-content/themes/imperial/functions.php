<?php
//get theme information
$imperial  = wp_get_theme();
$version = $imperial->get( 'Version' );

if ( defined( 'WP_DEBUG' ) ) {
	$version = current_time( 'timestamp' ); //for development time only
}

//define the constants
define( 'IMPERIAL_THEME_DIR', get_template_directory() );
define( 'IMPERIAL_THEME_URL', get_template_directory_uri() );
define( 'IMPERIAL_THEME_ASSETS_URI', get_template_directory_uri() . '/assets/' );
define( 'IMPERIAL_THEME_INC_DIR', get_template_directory() . '/inc/' );
define( 'IMPERIAL_THEME_VERSION', $version );
/**
 * Setup Theme
 */
require_once IMPERIAL_THEME_INC_DIR . 'main/theme-setup.php';

/**
 * Register Styles and Scripts
 */
require_once IMPERIAL_THEME_INC_DIR . 'main/reg-scripts.php';

/**
 * Register Widget areas
 */
require_once IMPERIAL_THEME_INC_DIR . 'main/reg-widget.php';

/**
 * Custom template tags for this theme.
 */
require IMPERIAL_THEME_INC_DIR . 'template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require IMPERIAL_THEME_INC_DIR . 'extras.php';

/**
 * Customizer additions.
 */
require IMPERIAL_THEME_INC_DIR . 'customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require IMPERIAL_THEME_INC_DIR . 'jetpack.php';

/**
 * Register Custom Navigation Walker
 */
require IMPERIAL_THEME_INC_DIR . 'wp_bootstrap_navwalker.php';

/**
 * Register Custom Navigation Walker
 */
require IMPERIAL_THEME_INC_DIR . 'main/breadcrumbs.php';
/**
 * Styles from customizer
 */
require IMPERIAL_THEME_INC_DIR . 'main/imperial-styles.php';

/**
 * Load imperial Functions.
 */
require IMPERIAL_THEME_INC_DIR . 'main/imperial-functions.php';

/**
 * Add imperial Plugins.
 */
require IMPERIAL_THEME_INC_DIR . 'imperial-add-plugin.php';

require IMPERIAL_THEME_INC_DIR . 'import-demo-data.php';
require IMPERIAL_THEME_INC_DIR . 'woocommerce.php';

