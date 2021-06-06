<?php
/**
 * Enqueue styles.
 */
function imperial_styles() {

	wp_register_style( 'theme-style', get_stylesheet_uri() );

	wp_register_style( 
		'google-fonts',
		'//fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Lora:ital,wght@0,500;0,600;0,700;1,400&family=Open+Sans:wght@400;600;700&display=swap',
		array( 'theme-style' ),
		IMPERIAL_THEME_VERSION
	);

	wp_register_style(
		'bootstrap',
		IMPERIAL_THEME_ASSETS_URI . 'css/vendor/bootstrap.min.css',
		array( 'theme-style' ),
		IMPERIAL_THEME_VERSION
	);

	wp_register_style(
		'fontawesome',
		IMPERIAL_THEME_ASSETS_URI . 'vendors/fontawesome/css/all.min.css',
		array( 'theme-style', 'bootstrap' ),
		IMPERIAL_THEME_VERSION
	);

	wp_register_style(
		'flaticon',
		IMPERIAL_THEME_ASSETS_URI . 'fonts/flaticon/flaticon.css',
		array( 'theme-style', 'bootstrap', 'fontawesome' ),
		IMPERIAL_THEME_VERSION
	);

	wp_register_style(
		'hover-css',
		IMPERIAL_THEME_ASSETS_URI . 'css/vendor/hover-min.css',
		array( 'theme-style', 'bootstrap', 'fontawesome', 'flaticon' ),
		IMPERIAL_THEME_VERSION
	);

	wp_register_style(
		'owl-carousel',
		IMPERIAL_THEME_ASSETS_URI . 'css/vendor/owl.carousel.css',
		array( 'theme-style', 'bootstrap', 'fontawesome', 'flaticon', 'hover-css', ),
		IMPERIAL_THEME_VERSION
	);

	wp_register_style(
		'owl-theme',
		IMPERIAL_THEME_ASSETS_URI . 'css/vendor/owl.theme.default.css',
		array( 'theme-style', 'bootstrap', 'fontawesome', 'flaticon', 'hover-css', 'owl-carousel' ),
		IMPERIAL_THEME_VERSION
	);

	wp_register_style(
		'mean-menu',
		IMPERIAL_THEME_ASSETS_URI . 'css/vendor/meanmenu.min.css',
		array( 'theme-style', 'bootstrap', 'fontawesome', 'flaticon', 'hover-css', 'owl-carousel' ),
		IMPERIAL_THEME_VERSION
	);

	wp_register_style(
		'imperial-main',
		IMPERIAL_THEME_ASSETS_URI . 'css/theme-style.css',
		array( 'theme-style', 'bootstrap', 'fontawesome', 'flaticon', 'hover-css', 'owl-carousel', 'mean-menu' ),
		IMPERIAL_THEME_VERSION
	);

	wp_register_style(
		'imperial-responsive',
		IMPERIAL_THEME_ASSETS_URI . 'css/responsive.css',
		array( 'theme-style', 'bootstrap', 'fontawesome', 'flaticon', 'hover-css', 'owl-carousel', 'mean-menu', 'imperial-main' ),
		IMPERIAL_THEME_VERSION
	);

	wp_enqueue_style( 'theme-style' );
	wp_enqueue_style( 'google-fonts' );
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'fontawesome' );
	wp_enqueue_style( 'flaticon' );
	wp_enqueue_style( 'hover-css' );
	wp_enqueue_style( 'owl-carousel' );
	wp_enqueue_style( 'owl-theme' );
	wp_enqueue_style( 'mean-menu' );
	wp_enqueue_style( 'imperial-main' );
	wp_enqueue_style( 'imperial-responsive' );

}

add_action( 'wp_enqueue_scripts', 'imperial_styles' );

/**
 * Enqueue scripts.
 */
function imperial_scripts() {

	wp_register_script(
		'bootstrap',
		IMPERIAL_THEME_ASSETS_URI . 'js/vendor/bootstrap.min.js',
		array( 'jquery' ),
		IMPERIAL_THEME_VERSION,
		true
	);

	wp_register_script(
		'owl-carousel',
		IMPERIAL_THEME_ASSETS_URI . 'js/vendor/owl.carousel.min.js',
		array( 'jquery', 'bootstrap' ),
		IMPERIAL_THEME_VERSION,
		true
	);

	wp_register_script(
		'appear',
		IMPERIAL_THEME_ASSETS_URI . 'js/vendor/jquery.appear.js',
		array( 'jquery', 'bootstrap', 'owl-carousel' ),
		IMPERIAL_THEME_VERSION,
		true
	);

	wp_register_script(
		'count-to',
		IMPERIAL_THEME_ASSETS_URI . 'js/vendor/jquery.countTo.js',
		array( 'jquery', 'bootstrap', 'owl-carousel', 'appear' ),
		IMPERIAL_THEME_VERSION,
		true
	);

	wp_register_script(
		'mean-menu',
		IMPERIAL_THEME_ASSETS_URI . 'js/vendor/jquery.meanmenu.min.js',
		array( 'jquery', 'bootstrap', 'owl-carousel', 'appear', 'count-to' ),
		IMPERIAL_THEME_VERSION,
		true
	);

	wp_register_script(
		'imperial-main',
		IMPERIAL_THEME_ASSETS_URI . 'js/main.js',
		array( 'jquery', 'bootstrap', 'owl-carousel', 'appear', 'count-to', 'mean-menu' ),
		IMPERIAL_THEME_VERSION,
		true
	);

    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'owl-carousel' );
    wp_enqueue_script( 'appear' );
    wp_enqueue_script( 'count-to' );
    wp_enqueue_script( 'mean-menu' );
    wp_enqueue_script( 'imperial-main' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'imperial_scripts' );