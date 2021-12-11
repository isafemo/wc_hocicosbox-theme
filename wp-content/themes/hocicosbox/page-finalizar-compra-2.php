<?php

/**
 * The main template file
 *
 *
 *
 * @package WordPress
 * @subpackage Hocicosbox
 * @since Hocicosbox 1.0
 */

get_header() ?>
    <div class="container">
        <div class="row">
            <div class="col">
                Tu carrito (Con Log-in)
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <?php $order = get_template_directory() . '/woocommerce/checkout/review-order.php';
                        require_once( $order ); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?php $coupon = get_template_directory() . '/woocommerce/checkout/form-coupon.php';
                        require_once( $coupon ); ?>
                    </div>
                </div>
<!--                <div class="row">-->
<!--                    <div class="col">-->
<!--                        --><?php //$billing = get_template_directory() . '/woocommerce/checkout/form-billing.php';
//                        require_once( $billing ); ?>
<!--                    </div>-->
<!--                </div>-->
                <div class="row">
                    <div class="col">
                        <?php $shipping = get_template_directory() . '/woocommerce/checkout/form-shipping.php';
                        require_once( $shipping ); ?>
                    </div>
                </div>
            </div>
            <div class="col">
                TU PEDIDO
            </div>
        </div>
    </div>
<?php get_footer() ?>