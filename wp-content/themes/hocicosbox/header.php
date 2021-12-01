<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Hocicosbox
 * @since Hocicosbox 1.0
 */
?>
<!DOCTYPE html>
<html <?= language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?= bloginfo('charset') ?>>">
    <?php wp_head(); ?>
    <title>Hocicosbox-test</title>
</head>
<body <?= body_class(); ?>>
<!--BARRA FIJA PARA NOTICIAS-->
<div class="container-fluid hb-header-notices">
    <div class="row">
        <div class="col">
            <?php echo get_theme_mod('hb_notice_text') ?>
        </div>
    </div>
</div>
<!--FIN BARRA FIJA PARA NOTICIAS-->
<?php
global $current_user;
global $woocommerce;
$cart_content = WC()->cart;
$cart_page_url = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : $woocommerce->cart->get_cart_url();
$cart_count_contents = count($woocommerce->cart->get_cart_contents());
?>
<!--HEADER GROUP 1-->
<div class="container-fluid header-hb-shadow">
<div class="container">
    <div class="row align-items-center">
        <div class="col-4">
            <a href="<?php echo get_home_url(); ?>"><img class="logo-l"
                                                         src="<?php echo get_theme_mod('hb_header_logo_L') ?>"></a>
            <a href="<?php echo get_home_url(); ?>"><img class="logo-s"
                                                         src="<?php echo get_theme_mod('hb_header_logo_S') ?>"></a>
        </div>
        <div class="col-5 text-right">
            <div class="header-search">
                <div class="header-search-input">
                    <form role="search" method="get" class="woocommerce-product-search"
                          action="<?php echo esc_url(home_url('/')); ?>">
                        <span class="icon_search" id="input-search-img"></span>
                        <input type="search" class="search-field"
                               placeholder="<?php echo esc_attr_x('¿Buscas algo?', 'placeholder', 'hocicosbox'); ?>"
                               value="<?php echo get_search_query(); ?>" name="s"
                               title="<?php echo esc_attr_x('Buscar por:', 'label', 'hocicosbox'); ?>"/>
                        <input type="hidden" name="post_type" value="product"/>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3 text-center" style="padding: 0px;">
            <div class="container-fluid hb-container-header">
                <div class="row align-items-center">
                    <div class="col">
                        <?php if ($current_user->user_login) {?>
                        <p class="hb-hello-user">¡Hola <?= $current_user->user_login; ?>!</p>
                        <div class="dropdown hb-btn-ms">
                            <a class="hb-icon-header" type="text" id="dropdownMenuButton" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user-o"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/mi-cuenta/orders/">Historial de pedidos</a>
                                <a class="dropdown-item" href="/mi-cuenta/edit-account/">Mi cuenta</a>
                                <a class="dropdown-item" href="#">Afiliados</a>
                                <a class="dropdown-item" href="#">Suscripción</a>
                                <a class="dropdown-item" href="<?= wp_logout_url(get_home_url()) ?>>">Cerrar sesión</a>
                            </div>
                        </div>
                        <?php } else { ?>
                        <a href="<?= wp_login_url() ?>"><i class="fa fa-user-o"></i></a>
                        <?php } ?>
                        <a href="/lista-de-deseos/"><i class="fa fa-heart"></i></a>
                        <a href="<?= $cart_page_url ?>">
                            <i class="fa fa-shopping-cart"></i>
                            <?php if($cart_count_contents > 0){?>
                                <span class="badge badge-pill badge-info"><?= $cart_count_contents ?></span>
                            <?php }?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <hr class="header-hr">
        </div>
    </div>
    <div class="row header-menu align-items-center justify-content-center">
        <?php wp_nav_menu(array('theme_location' => 'hocicosbox_header_menu')); ?>
    </div>
</div>
</div>
<!--FIN HEADER GROUP 1-->