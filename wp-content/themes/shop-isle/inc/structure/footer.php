<?php
/**
 * Template functions used for the site footer.
 *
 * @package WordPress
 * @subpackage Shop Isle
 */

if ( ! function_exists( 'shop_isle_footer_widgets' ) ) {
	/**
	 * Display the footer widgets
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function shop_isle_footer_widgets() {
		?>
		<!-- Widgets start -->

		<?php if ( is_active_sidebar( 'sidebar-footer-area-1' ) || is_active_sidebar( 'sidebar-footer-area-2' ) || is_active_sidebar( 'sidebar-footer-area-3' ) || is_active_sidebar( 'sidebar-footer-area-4' ) ) : ?>

		<div class="module-small bg-dark shop_isle_footer_sidebar">
			<div class="container">
				<div class="row">

					<?php if ( is_active_sidebar( 'sidebar-footer-area-1' ) ) : ?>
						<div class="col-sm-6 col-md-3 footer-sidebar-wrap">
							<?php dynamic_sidebar( 'sidebar-footer-area-1' ); ?>
						</div>
					<?php endif; ?>
					<!-- Widgets end -->

					<?php if ( is_active_sidebar( 'sidebar-footer-area-2' ) ) : ?>
						<div class="col-sm-6 col-md-3 footer-sidebar-wrap">
							<?php dynamic_sidebar( 'sidebar-footer-area-2' ); ?>
						</div>
					<?php endif; ?>
					<!-- Widgets end -->

					<?php if ( is_active_sidebar( 'sidebar-footer-area-3' ) ) : ?>
						<div class="col-sm-6 col-md-3 footer-sidebar-wrap">
							<?php dynamic_sidebar( 'sidebar-footer-area-3' ); ?>
						</div>
					<?php endif; ?>
					<!-- Widgets end -->


					<?php if ( is_active_sidebar( 'sidebar-footer-area-4' ) ) : ?>
						<div class="col-sm-6 col-md-3 footer-sidebar-wrap">
							<?php dynamic_sidebar( 'sidebar-footer-area-4' ); ?>
						</div>
					<?php endif; ?>
					<!-- Widgets end -->

				</div><!-- .row -->
			</div>
		</div>

	<?php endif; ?>

		<?php
	}
}// End if().

if ( ! function_exists( 'shop_isle_footer_copyright_and_socials' ) ) {
	/**
	 * Display the theme copyright and socials
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function shop_isle_footer_copyright_and_socials() {

		?>
		<!-- Footer start -->
		<footer class="footer bg-dark">
			<!-- Divider -->
			<hr class="divider-d">
			<!-- Divider -->
			<div class="container">
				<div class="row">
					<?php
					/* Copyright */
					$shop_isle_copyright = apply_filters( 'shop_isle_footer_copyright_filter', get_theme_mod( 'shop_isle_copyright' ) );
					$shop_isle_copyright = ! empty( $shop_isle_copyright ) ? $shop_isle_copyright : '';
					/*info web*/
					echo '<div class="col-sm-4">';
					if ( ! empty( $shop_isle_copyright ) || is_customize_preview() ) :
						echo '<p class="copyright font-alt">' . $shop_isle_copyright . '</p>';
						endif;

						$shop_isle_site_info_hide = apply_filters( 'shop_isle_footer_socials_filter', get_theme_mod( 'shop_isle_site_info_hide' ) );
					if ( isset( $shop_isle_site_info_hide ) && $shop_isle_site_info_hide != 1 ) {
						echo apply_filters( 'shop_isle_site_info', '<p class="shop-isle-poweredby-box"><a class="shop-isle-poweredby" href="http://themeisle.com/themes/shop-isle/" rel="nofollow">ShopIsle </a>' . __( 'powered by', 'shop-isle' ) . '<a class="shop-isle-poweredby" href="http://wordpress.org/" rel="nofollow"> WordPress</a></p>' );
					}
					echo '<i class="fas fa-archive"></i> Avenida Madre Paula Montalt 65, 1 3B<br>41089, Dos hermanas/Sevilla<br><i class="far fa-envelope"></i> info@hubidogs.com';
					echo '</div>';
					/*HORARIO ATENCIÓN*/
					echo '<div class="col-sm-4">';
					echo '<h6 class="copyright font-alt">Horario atención al cliente:</h6>';
					echo '<p style="color: #8C8C8C;">Contestaremos los emails en estos horarios.</p>';
					echo 'Lunes a Viernes de 10:00 a 20:00<br>';
					echo 'Sábados de 10:00 a 14:00';
					echo '</div>';
					/* links */
					echo '<div class="col-sm-4">';
					echo '<h6 class="copyright font-alt">Nuestra empresa</h6>';
					echo '<a href="https://hubidogs.com/aviso-legal">Aviso legal</a><br>';
					echo '<a href="https://hubidogs.com/privacy-policy">Politica de privacidad</a><br>';
					echo '<a href="https://hubidogs.com/envios-y-devoluciones">Envíos y devoluciones</a><br>';
					echo '<a href="https://hubidogs.com/preguntas-frecuentes">Preguntas frecuentes</a><br>';
					echo '</div>';
					?>
				</div>
				<br>
				<div class="row">
				<div class="col-sm"><center>Copyright 2020 <a href="www.hubidogs.com">Hubidogs</a> todos los derechos reservados.</center></div>
				</div><!-- .row -->

			</div>
		</footer>
		<!-- Footer end -->
		<?php
	}
}// End if().


if ( ! function_exists( 'shop_isle_footer_wrap_open' ) ) {
	/**
	 * Display the theme copyright and socials
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function shop_isle_footer_wrap_open() {
		echo '</div><div class="bottom-page-wrap">';
	}
}


if ( ! function_exists( 'shop_isle_footer_wrap_close' ) ) {
	/**
	 * Display the theme copyright and socials
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function shop_isle_footer_wrap_close() {
		echo '</div><!-- .bottom-page-wrap -->';
	}
}
