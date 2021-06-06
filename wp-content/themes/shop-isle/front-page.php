<?php
/**
 * The front-page.php
 *
 * @package ShopIsle
 */

get_header();
/* Wrapper start */

echo '<div class="main">';
$big_title = get_template_directory() . '/inc/sections/shop_isle_big_title_section.php';
load_template( apply_filters( 'shop-isle-subheader', $big_title ) );

/* Wrapper start */
$shop_isle_bg = get_theme_mod( 'background_color' );

if ( isset( $shop_isle_bg ) && $shop_isle_bg != '' ) {
	echo '<div class="main front-page-main" style="background-color: #' . $shop_isle_bg . '">';
} else {

	echo '<div class="main front-page-main" style="background-color: #FFF">';

}

if ( defined( 'WCCM_VERISON' ) ) {

	/* Woocommerce compare list plugin */
	echo '<section class="module-small wccm-frontpage-compare-list">';
	echo '<div class="container">';
	do_action( 'shop_isle_wccm_compare_list' );
	echo '</div>';
	echo '</section>';

}
?>
<br><br>
<div id="about" class="container">
  <div class="row">
    <div class="col-sm-7">
	<h2 class="module-title font-alt product-banners-title">Bienvenidos a Hubidogs</h2>
	<h3>¿Qué podemos hacer por ti?</h3>
    <h4>¡Hola peludines!, somos una empresa de productos artesanos y personalizados para mascotas y para humanos (Porque también se lo merecen)<br>
		<br>¿No encuentras lo que buscas entre nuestros diseños? ¿Por qué no lo diseñamos juntos? ¡Contacta con nosotros y explícanos tu idea!<br>
	</h4>
    <br><a href="https://hubidogs.com/contacto" class="btn btn-b btn-round">Puedes explicarnos tu idea desde aquí</a>
    </div>
    <div class="col-sm-5 hidden-xs">
	<img src="https://hubidogs.com/wp-content/uploads/2020/10/perropng.png">
    </div>
  </div>
  <?php
/******* Products Section */
$latest_products = get_template_directory() . '/inc/sections/shop_isle_products_section.php';
require_once( $latest_products );
?>
<center><h3><i>"Mima a tu mejor amigo y mímate a ti con <b>Hubidogs</b>"</i></h3><br></center>
<!--<div id="about" class="container">
  <div class="row">
	<div class="col-sm-4"><center><img src="https://hubidogs.com/wp-content/uploads/2020/11/bolas-web.jpg"><br><br><a href="https://hubidogs.com/categoria-producto/navidad" class="btn btn-b btn-round">VER TODAS LOS PRODUCTOS NAVIDAD</a></center></div>
	<div class="col-sm-4"><center><img src="https://hubidogs.com/wp-content/uploads/2020/11/COLLAR-CLIP-AGUACATE.jpg"><br><br><a href="https://hubidogs.com/categoria-producto/humanos/humanos-tazas" class="btn btn-b btn-round">VER TODOS LOS COLLARES</a></center></div>
  </div>
  <div class="row">
	<div class="col-sm-4"><center><img src="https://hubidogs.com/wp-content/uploads/2020/10/CATEGORIA-CHAPAS.jpg"><br><br><a href="https://hubidogs.com/categoria-producto/peludos/peludos-chapas" class="btn btn-b btn-round">VER TODAS LAS CHAPAS</a></center></div>
	<div class="col-sm-4"><center><img src="https://hubidogs.com/wp-content/uploads/2020/11/CATEGORIA-TAZAS.jpg"><br><br><a href="https://hubidogs.com/categoria-producto/humanos/humanos-tazas" class="btn btn-b btn-round">VER TODAS LAS TAZAS</a></center></div>
	<div class="col-sm-4"><center><img src="https://hubidogs.com/wp-content/uploads/2020/10/CATEGORIA-PERSONALIZADO.jpg"><br><br><a href="https://hubidogs.com/categoria-producto/personalizables" class="btn btn-b btn-round">VER TODOS LOS PERSONALIZABLES</a></center></div>
  </div>
</div>-->
<br><br><br><br>
<div class="container">
  <div class="row">
	<div class="col-sm-6"><center><a href="https://www.instagram.com/adventures_zeus_vera/" target="_blank"><img src="https://hubidogs.com/wp-content/uploads/2020/12/hubilovermesNOV2020-scaled.jpg"></a></center></div>
	<div class="col-sm-6"><h3 class="font-negri">¿QUÉ ES SER HUBILOVER DEL MES?</h3>
	Desde <b>Hubidogs</b> queremos premiar a nuestros clientes con el premio a <i>Hubilover del mes</i>.<br>
	Por eso, entre todos los clientes que suban una foto a instagram con nuestros productos y sigan las instrucciones de abajo se sorteará los días 1 de cada mes <b>el hubilover del mes</b>.
	<h3 class="font-negri">¿QUÉ GANO SIENDO HUBILOVER DEL MES?</h3>
	<ul>
		<li>Tu fotografía estará expuesta durante un mes en el marco de la izquierda y estará enlazada a tu instagram.</li>
		<li>Un <b>cupón descuento de 5€</b> para gastar en nuestra tienda</li>
	</ul>
	<h3 class="font-negri">¿CÓMO SER HUBILOVER DEL MES?</h3>
	<ul>
		<li>Síguenos en instagram</li>
		<li>Mencionanos en el pie de foto de tus fotos de instagram con nuestros productos</li>
		<li>Utiliza en tu foto con nuestros productos el hashtag <b>#Hubilover</b></li>
	</ul>
	<p><i>Cada mes se hará el sorteo entre los que participen en el mes en curso.</i><br>
	<i>El código de descuento no tendrá fecha de caducidad.</i><br>
	<i>El código será exclusivo para el ganador, no pudiendo ser transferible a otra persona.</i></p>
	</div>
  </div>
</div>
<?php
/******  Banners Section */
$banners_section = get_template_directory() . '/inc/sections/shop_isle_banners_section.php';
require_once( $banners_section );
/********PRUEBA IG */
echo '<section id="latest" class="module-small"><div class="container"><div class="row"><div class="col-sm-6 col-sm-offset-3"><h2 class="module-title font-alt product-banners-title">Síguenos en Instagram</h2></div></div>';
echo '<div class="products_shortcode">';
	echo do_shortcode( '[insta-gallery id="0"]' );
	echo '</div>';
	echo '</div><!-- .container --></section>';
/**** FIN PRUEBA IG */

/******* Video Section */
$video = get_template_directory() . '/inc/sections/shop_isle_video_section.php';
require_once( $video );

/******* Products Slider Section */
$products_slider = get_template_directory() . '/inc/sections/shop_isle_products_slider_section.php';
require_once( $products_slider );


get_footer();

