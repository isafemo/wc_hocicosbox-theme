<?php

if ( class_exists('WooCommerce') && (is_shop() || is_cart() || is_product() || is_checkout() ) ) {
	$imperial_sidebar = 'shop-sidebar';
} else {
	$imperial_sidebar = 'right-sidebar';
}

if ( ! is_active_sidebar( $imperial_sidebar ) ) {
	return;
}
?>

<div id="secondary" class="widget-area sidebar" role="complementary">
	<?php dynamic_sidebar( $imperial_sidebar ); ?>
</div><!-- #secondary -->
