<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Hocicosbox
 * @since Hocicosbox 1.0
 */
?>
<footer>
<!--    <section class="footer-widgets">Footer widgets</section>-->
    <section class="copyright">
        <div class="container footer-up">
            <div class="row">
                <div class="col-3 text-center">
                    <img class="responsive-image logo"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/pegatinas-cmyk.png">
                </div>
                <div class="col-2"></div>
                <div class="col-2 footer-menus">
                    <p class="title-footer">Secciones</p>
                    <div class="menues-footer text-left">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'hocicosbox_footer_menu'
                            )
                        )
                        ?>
                    </div>
                </div>
                <div class="col-2">
                    <p class="title-footer">Información</p>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col">
                            <p class="title-footer">Newsletter</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Email
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Síguenos
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid footer-down text-center">
            <div class="row align-items-center justify-content-center">
                <div class="col">
                    <p class="madewithlove">© Hocicosbox 2021 | Hecho con mucho      | Condiciones de uso</p>
                </div>
            </div>
        </div>
    </section>
</footer>
</div>
</body>
<?php wp_footer() ?>
</html>