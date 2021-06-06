<?php
get_header();
get_template_part( 'layouts/imperial', 'shop-banner' );
?>

    <div id="primary" class="content-area content-pad">
        <main id="main" class="site-main" >
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <?php
                        woocommerce_content();
                        ?>
                    </div> <!--/.col-->
                    <div class="col-md-4">
                        <?php get_sidebar(); ?>
                    </div> <!--/.col-->
                </div> <!--/.row-->
            </div> <!--/.container-->
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();

