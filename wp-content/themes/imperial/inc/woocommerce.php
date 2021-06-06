<?php
//add woocommerce theme support 
function imperial_woocommerce_setup() {
	add_theme_support( 'woocommerce', array(
		'product_grid' => array(
			'default_rows' => 2,
			'default_columns' => 3,
		)
	) );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'imperial_woocommerce_setup' );

//change the grid column
function imperial_loop_columns() {
	return 3;
}
add_filter( 'loop_shop_columns',  'imperial_loop_columns', 999);

//change products per page
function new_loop_shop_per_page( $cols ) {
  $cols = 6;
  return $cols;
}
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

  function imperial_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 3 related products
	$args['columns'] = 3; // arranged in 2 columns
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'imperial_related_products_args' );


if ( class_exists( 'woocommerce' ) ) {
	function add_cart_to_menu_item( $items, $args ) {
	    $css_class = 'menu-item menu-item-type-cart menu-item-type-woocommerce-cart';
	    
	    $item_count_text = sprintf(
					/* translators: number of items in the mini cart. */
					_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'imperial' ),
	                WC()->cart->get_cart_contents_count() );
	    $items .= '<li class="' . esc_attr( $css_class ) . '">';
	    $items .= '<a href="'. esc_url( wc_get_cart_url() ) .'"><i class="cart-icon fa fa-shopping-cart"></i> ';
	    $items .= '<span class="amount">'. wp_kses_data( WC()->cart->get_cart_subtotal() ).'</span>';
	    $items .= ' - ';
	    $items .= '<span class="count">'. esc_html( $item_count_text ).'</span>';
	    $items .= '</a>';
	    $items .= '</li>';

	    return $items;
	}
	add_filter( 'wp_nav_menu_items', 'add_cart_to_menu_item', 10, 2 );

	add_filter( 'woocommerce_add_to_cart_fragments', 'cart_to_menu_fragments' );
	function cart_to_menu_fragments( $fragments ) {
		// Add our fragment
		$fragments['li.menu-item-type-woocommerce-cart'] = add_cart_to_menu_item( '', new stdClass(), true );
		return $fragments;
	}
}