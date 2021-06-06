<?php
$disable_banner = get_post_meta( get_the_ID(), 'disable_banner', 1 );
$banner_img_cmb2 = get_post_meta( get_the_ID(), 'banner_img', true );
$banner_class = !empty( $banner_img_cmb2 ) ? 'parallax-banner-cmb2' : 'parallax-banner';
if( !is_front_page() && !is_home() && !is_search() && !is_404() ) { ?>

    <!-- check if banner is disabled on a page -->
    <?php if ($disable_banner !== 'on') { ?>
    <div class="page-head <?php print esc_attr( $banner_class ); ?>">
        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <?php if(get_post_type() === 'post') {?>
                        <h2 class="page-head-title"><?php esc_html_e( 'blog', 'imperial' ); ?></h2>
                    <?php } else { ?>
                        <h2 class="page-head-title"><?php wp_title(''); ?></h2>
                    <?php } ?>
                </div> <!-- /.col -->
                <div class="col-md-7">
                    <?php imperial_breadcrumbs(); ?>
                </div> <!-- /.col -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>
    <?php } ?>

<?php } elseif( is_home() ) { ?>

<div class="page-head parallax-banner">
    <div class="container">
        <div class="row">

            <div class="col-md-5">
                <h2 class="page-head-title"><?php esc_html_e( 'blog', 'imperial' ); ?></h2>
            </div> <!-- /.col -->
            <div class="col-md-7">
                <div id="crumbs" class="breadcrumbs">
                            <span>
                                <a href="<?php print esc_url( home_url('/') ); ?>"><?php esc_html_e( 'Home', 'imperial' ); ?></a>
                            </span> /
                    <span class="current"><?php esc_html_e( 'blog', 'imperial' ); ?></span>
                </div>
            </div> <!-- /.col -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div>

<?php } elseif( is_search() ) { ?>

    <div class="page-head parallax-banner">
        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <h2 class="page-head-title"><?php esc_html_e( 'Search', 'imperial' ); ?></h2>
                </div> <!-- /.col -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>
<?php } ?>
