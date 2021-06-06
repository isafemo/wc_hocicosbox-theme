<?php 
    $current_year = date("Y");
?>
        </div><!-- #content -->
        <!-- footer start -->
        <footer>
            <?php if( is_active_sidebar( 'footer-sidebar' ) ) : ?>
            <div class="footer pad60">

                <div class="container">
                    <div class="row">
                        <?php dynamic_sidebar( 'footer-sidebar' ); ?>
                    </div> <!-- /.row -->
                </div> <!-- /.container -->

            </div> <!-- /.footer -->
            <?php endif; ?>

            <?php $copyright = get_theme_mod( 'copyright_text', 'Copyright '.$current_year.' Imperial WordPress Theme - by iThemesLab' ); ?>

            <div id="copyright" class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="t-center">
                                <p id="copyright-text"><?php echo esc_html( $copyright ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

        <?php get_template_part( 'layouts/imperial', 'totop' ); ?>

    </div> <!--/.main-container-->
    <?php wp_footer(); ?>
</body>
</html>
