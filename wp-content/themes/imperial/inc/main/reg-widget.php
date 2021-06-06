<?php
/**
 * Register widget area.
 */
function imperial_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Right Sidebar Area', 'imperial' ),
        'id'            => 'right-sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'imperial' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-title"><h3>',
        'after_title'   => '</h3></div>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Shop Sidebar Area', 'imperial' ),
        'id'            => 'shop-sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'imperial' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-title"><h3>',
        'after_title'   => '</h3></div>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area', 'imperial' ),
        'id'            => 'footer-sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'imperial' ),
        'before_widget' => '<div class="col-md-3 col-sm-6 col-xs-12"><div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<div class="widget-title"><h3>',
        'after_title'   => '</h3></div>',
    ) );
}
add_action( 'widgets_init', 'imperial_widgets_init' );