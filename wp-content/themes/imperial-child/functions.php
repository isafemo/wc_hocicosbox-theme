<?php
add_action( 'wp_enqueue_scripts', 'imperial_child_enqueue_styles' );
function imperial_child_enqueue_styles() {
	wp_enqueue_style( 'imperial-parent-style', get_template_directory_uri() . '/style.css', 1000 );

}
