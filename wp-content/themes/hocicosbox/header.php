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
    <meta name="viewport" content="width=device-width"/>
    <meta charset="<?= bloginfo('charset') ?>>">
    <?php wp_head(); ?>
    <title>Hocicosbox-test</title>
</head>
<body <?= body_class(); ?>>
<div id="page" class="site">
    <header>
        <section class="top-bar">
            <div class="container header-search-container text-center">
                <div class="row header-search-row align-items-center justify-content-center">
                    <div class="col-5 d-none d-lg-block">
                        <a href="<?php echo get_home_url(); ?>">
                            <img class="responsive-image logo"
                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/logotipo-horizontal.svg">
                        </a>
                    </div>
                    <div class="col-5 d-lg-none">
                        <a href="<?php echo get_home_url(); ?>">
                            <img class="responsive-image"
                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/horizontal-rgb.png">
                        </a>
                    </div>
                    <div class="col-2 d-none d-lg-block"></div>
                    <div class="col-7 col-lg-5">
                        <div class="container-fluid">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-7 d-none d-lg-block">
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
                                <div class="col-3 text-right text-lg-left menu-icons">
                                    <div class="row">
                                            <?php wp_nav_menu(array('theme_location' => 'hocicosbox_header_icons')); ?>
<!--                                            --><?php //wp_nav_menu(array('theme_location' => 'hocicosbox_header_menu_mobile')); ?>
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
        </section>
    </header>