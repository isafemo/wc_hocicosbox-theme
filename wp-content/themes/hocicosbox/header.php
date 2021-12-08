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
<!--todo: hacer un customize con varios y poner con cols foreach-->
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
$cart_page_url = function_exists('wc_get_cart_url') ? wc_get_cart_url() : $woocommerce->cart->get_cart_url();
?>
<!--HEADER GROUP 1-->
<div class="container-fluid header-hb-shadow">
    <div class="container">
        <div class="row align-items-center">
            <!--LOGO-->
            <div class="col-4 d-none d-sm-block logo-image-header" style="background-image: url(<?= get_theme_mod('hb_header_logo_L') ?>)">
                <a href="<?php echo get_home_url(); ?>">&nbsp;</a>
            </div>
            <div class="col-4 d-sm-none logo-image-header" style="background-image: url(<?= get_theme_mod('hb_header_logo_S') ?>)">
                <a href="<?php echo get_home_url(); ?>"></a>
            </div>
            <!--END LOGO-->
            <!--SEARCH-->
            <!--       TODO: CAMBIAR EL SEARCH Y ADECUAR MEDIAQUERY-->
            <div class="col-5 text-right">
                <div class="header-search">
                    <div class="header-search-input">
                        <form role="search" method="get" class="woocommerce-product-search"
                              action="<?php echo esc_url(home_url('/')); ?>">
<!--                            <span class="icon_search" id="input-search-img"></span>-->
                            <input type="search" class="search-field"
                                   placeholder="<?php echo esc_attr_x('¿Buscas algo?', 'placeholder', 'hocicosbox'); ?>"
                                   value="<?php echo get_search_query(); ?>" name="s"
                                   title="<?php echo esc_attr_x('Buscar por:', 'label', 'hocicosbox'); ?>"/>
                            <input type="hidden" name="post_type" value="product"/>
                        </form>
                    </div>
                </div>
            </div>
            <!--END SEARCH-->
            <!--ICONS ZONE-->
            <!--        TODO: CAMBIAR ICONOS POR CORRECTOS Y ADECUAR MEDIAQUERY-->
            <div class="col-3 text-center" style="padding: 0px;">
                <div class="container-fluid hb-container-header">
                    <div class="row align-items-center">
                        <div class="col header-hb-icons">
                            <?php if ($current_user->user_login) { ?>
                                <p class="hb-hello-user">¡Hola <?= $current_user->user_login; ?>!</p>
                                <div class="dropdown hb-btn-ms">
                                    <a type="text" id="dropdownMenuButton" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-user-o"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right list-data-hb" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="/mi-cuenta/pedidos/">Historial de pedidos</a>
                                        <a class="dropdown-item" href="/mi-cuenta/editar-cuenta/">Mi cuenta</a>
                                        <a class="dropdown-item" href="#">Afiliados</a>
                                        <a class="dropdown-item" href="#">Suscripción</a>
                                        <!--                                TODO: LOGOUT USUARIO ACTIVO-->
                                        <a class="dropdown-item" href="/mi-cuenta/customer-logout">Cerrar sesión</a>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <a href="/mi-cuenta/"><i class="fa fa-user-o"></i></a>
                            <?php } ?>
                            <a href="/lista-de-deseos/"><i class="fa fa-heart"></i></a>
                            <a class="cont-minicarro" href="<?= $cart_page_url ?>">
                                <!--                            todo contador-->
                                <i class="fa fa-shopping-cart"></i>
                                <?php if (WC()->cart->get_cart_contents_count() > 0) { ?>
                                    <span class="badge badge-pill badge-info"><?= WC()->cart->get_cart_contents_count() ?></span>
                                <?php } ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--END ICONS ZONE-->
        </div>
        <!--LINE-->
        <div class="row">
            <div class="col">
                <hr class="header-hr">
            </div>
        </div>
        <!--END LINE-->
    </div>
</div>
<!--MENU-->
<?php
    $menu = WP_Bootstrap_Navwalker::getCategoriesMenu('hocicosbox_header_menu');
    ?>
<div class="container menu-land">
    <div class="row father-hb-menu">
        <?php foreach ($menu as $keyF => $father){
            $dataToggle = count($father['children']) > 0 ? 'data-toggle="collapse"' : '';
            $href = count($father['children']) > 0 ? '#collapse'.$keyF : $father['url'];
//            echo '<div class="col">';
            echo '<a class="'.$father['class'].'" '.$dataToggle.' href="'.$href.'">'.$father['name'].'</a>';
//            echo '</div>';
        }?>
    </div>
</div>
<div class="container-fluid menu-land">
    <?php foreach ($menu as $keyF => $father) {
        echo '<div id="collapse' . $keyF . '" class="row collapse hb-subclass-menu-header">';
        if (count($father['children']) > 0) {
            foreach ($father['children'] as $children) {
                echo '<div class="col">';
                echo '<a class="children-hb-menu ' . $children['class'] . ' text-uppercase" href="' . $children['url'] . '">' . $children['name'] . '</a>';
                if ($children['name'] == 'Tipos de proteína') {
                    echo '<div class="container-fluid"><div class="row">';
                    $childrenMiddle = count($children['children']) / 2;
                    foreach ($children['children'] as $key => $baby) {
                        if ($key == 0 || $key == $childrenMiddle) {
                            echo '<div class="col-6">';
                        }
                        echo '<p><a class="baby-hb-menu ' . $baby['class'] . '" href="' . $baby['url'] . '">' . $baby['name'] . '</a></p>';
                        //final div cuando sea childrenmiddle+1 o last
                        if ($key == ($childrenMiddle - 1) || $key == count($children['children'])) {
                            echo '</div>';
                        }
                    }
                    echo '</div></div></div>';
                } else {
                    foreach ($children['children'] as $baby) {

                        echo '<p><a class="baby-hb-menu ' . $baby['class'] . '" href="' . $baby['url'] . '">' . $baby['name'] . '</a></p>';
                    }
                }
                echo '</div>';
            }
        }
        echo '</div>';
    } ?>
</div>
<!--FIN HEADER GROUP 1-->
<script>

</script>