<!--top header start-->
<div class="top-header hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php $contact_phone = get_theme_mod( 'contact_phone' );
                if($contact_phone) :
                ?>
                <div class="dib">
                    <div class="top-contact">
                        <i class="fa fa-phone"></i><?php echo esc_html( $contact_phone ); ?>
                    </div>
                </div>
                <?php endif;
                $contact_email = get_theme_mod( 'contact_email');
                if($contact_email) :
                ?>
                <div class="dib">
                    <div class="top-contact">
                        <i class="fa fa-envelope"></i><?php echo esc_html( $contact_email ); ?>
                    </div>
                </div>
                <?php endif; ?>
            </div> <!--/.col-->
            <div class="col-md-6">
                <div class="pull-right">
                    <?php $social_text = get_theme_mod( 'socail_text');
                        if($social_text) { ?>
                    <div class="follow-us-text dib">
                        <p><?php echo esc_html( $social_text ); ?></p>
                    </div>

                    <ul class="top_social_icons dib">
                        <?php
                        $fb_url = get_theme_mod( 'fb_url');
                        $tw_url = get_theme_mod( 'tw_url');
                        $gplus_url = get_theme_mod( 'gplus_url');
                        $lin_url = get_theme_mod( 'lin_url');
                        $pin_url = get_theme_mod( 'pin_url');
                        ?>
                        <?php if($fb_url) { ?>
                        <li><a href="<?php echo esc_url( $fb_url ); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <?php };
                        if($tw_url) { ?>
                        <li><a href="<?php echo esc_url( $tw_url ); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <?php };
                        if($gplus_url) { ?>
                        <li><a href="<?php echo esc_url( $gplus_url ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <?php };
                        if($lin_url) { ?>
                        <li><a href="<?php echo esc_url( $lin_url ); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <?php };
                        if($pin_url) { ?>
                        <li><a href="<?php echo esc_url( $pin_url ); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        <?php }; ?>
                    </ul>
                    <?php } ?>
                </div>
            </div> <!--/.col-->
        </div> <!--/.row-->
    </div> <!--/.container-->
</div>
<!--top header end-->