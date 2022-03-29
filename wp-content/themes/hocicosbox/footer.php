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
    <section class="copyright">
        <!--        Vs Despt-->
        <div class="container footer-up d-none d-md-block">
            <div class="row align-items-center">
                <div class="col-12 col-sm-3 text-center">
                    <div class="logo-footer"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/logos/pegatinas-cmyk.png')"></div>
                </div>
                <div class="col-12 col-sm-9">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-12 col-md-3 footer-menus">
                            <p class="title-footer">Secciones</p>
                            <div class="menues-footer text-left">
                                <div class="row">
                                    <div class="col">
                                        <a href="">Tienda</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="">Hocicosbox</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="/rincon-solidario">Rincón Solidario</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="">Confecciones</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 footer-menus">
                            <p class="title-footer">Información</p>
                            <div class="menues-footer text-left">
                                <div class="row">
                                    <div class="col">
                                        <a href="">Afiliados</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="">Nosotros</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="">Blog</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="">Contacto</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <span class="title-footer">Síguenos</span>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <i class="social-icons social_instagram"></i>
                                            <i class="social-icons social_facebook_circle"></i>
                                            <i class="social-icons social_twitter"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        Vs Mobile-->
        <div class="container footer-up d-block d-md-none">
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <div class="logo-footer"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/logos/pegatinas-cmyk.png')"></div>
                </div>
            </div>
            <div class="row ">
                <div class="col-1"></div>
                <div class="col-6 footer-menus-mobile">
                    <div class="menues-footer text-left">
                        <a href="">Afiliados</a>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-1"></div>
                <div class="col-6 footer-menus-mobile">
                    <div class="menues-footer text-left">
                        <a href="">Nosotros</a>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-1"></div>
                <div class="col-6 footer-menus-mobile">
                    <div class="menues-footer text-left">
                        <a href="">Hocicosbox</a>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-1"></div>
                <div class="col-6 footer-menus-mobile">
                    <div class="menues-footer text-left">
                        <a href="">Rincón solidario </a>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-1"></div>
                <div class="col-6 footer-menus-mobile">
                    <div class="menues-footer text-left">
                        <a href="">Blog</a>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-1"></div>
                <div class="col-6 footer-menus-mobile">
                    <div class="menues-footer text-left">
                        <a href="">Contacto</a>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-1"></div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <span class="title-footer">Síguenos</span>
                        </div>
                        <div class="col">
                            <i class="social-icons-mobile social_instagram"></i>
                            <i class="social-icons-mobile social_facebook_circle"></i>
                            <i class="social-icons-mobile social_twitter"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        Linea final-->
        <div class="container-fluid footer-down text-center">
            <div class="row align-items-center justify-content-center">
                <div class="col">
                    <p class="madewithlove">© Hocicosbox 2021 | Hecho con mucho <i class="icon_heart"></i> | <a
                                href="#"> Condiciones de uso</a></p>
                </div>
            </div>
        </div>
    </section>
</footer>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<?php wp_footer() ?>
</html>