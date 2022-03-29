<?php
/**
 * View Order
 *
 * Shows the details of a particular order on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/view-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

defined( 'ABSPATH' ) || exit;
$user_id = get_post_meta( $order->get_order_number(), '_customer_user', true );
$customer = new WC_Customer( $user_id );
$first_name   = $customer->get_first_name();
$last_name    = $customer->get_last_name();
$address = $customer->get_shipping_address();
$country = $customer->get_shipping_city();
$cp = $customer->get_shipping_postcode();
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="hb-user-int-orders-title">Tu pedido</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p><span class="hb-mo-order-number">#<?= $order->get_order_number() ?></span></p>
            <p class="hb-mo-info-start">Pedido realizado el <?= wc_format_datetime($order->get_date_created()) ?>.
                Estado <span class="hb-mo-order-state"><?= wc_get_order_status_name($order->get_status()) ?></span></p>
            <hr class="hb-mo-hr">
        </div>
    </div>
    <div class="row hb-mo-th-orders">
        <div class="col-4 hb-mo-title-col text-left">DETALLES DEL PEDIDO</div>
        <div class="col-4 hb-mo-title-col text-center">PRECIO UNITARIO</div>
        <div class="col-4 hb-mo-title-col text-right">SUBTOTAL</div>
    </div>
    <?php foreach ($order->get_items() as $item) { ?>
        <div class="row hb-mo-item-general">
            <?php $_product = wc_get_product( $item['variation_id'] ? $item['variation_id'] : $item['product_id'] ); ?>
            <div class="col col-4 hb-mo-item-col text-left"><a href="<?= get_permalink( $_product->get_id() ) ?>"> <?= $item->get_product()->name ?> </a></div>
            <div class="col col-4 hb-mo-price-col text-center"><?= ($item->get_subtotal()/$item->get_quantity()) ?>€ <span>x <?= $item->get_quantity() < 10 ? '0'.$item->get_quantity() : $item->get_quantity() ?></span></div>
            <div class="col col-4 hb-mo-price-col text-right"><?= $item->get_subtotal().'€' ?></div>
        </div>
    <?php } ?>
    <hr class="hb-mo-hr">
    <div class="row">
        <div class="col text-left hb-mo-total">
                <div class="row">
                    <div class="col">Enviado a <?= $first_name ?> <?= $last_name ?></div>
                </div>
                <div class="row hb-mo-row-total text-left">
                    <div class="col"><?= $address.', '.$cp.', '.$country ?></div>
                </div>
                <div class="row">
                    <div class="col">Pago mediante: <?= $order->get_payment_method_title() ?></div>
                </div>
        </div>
        <div class="col-4 hb-mo-total">
                <div class="row hb-mo-row-total">
                    <div class="col">Envío</div>
                    <div class="col"><?= $order->get_shipping_total() ?>€</div>
                </div>
                <div class="row hb-mo-row-total">
                    <div class="col">Impuestos</div>
                    <div class="col"><?= $order->get_shipping_tax() ?>€</div>
                </div>
                <div class="row hb-mo-row-total">
                    <div class="col">
                        <div class="row">
                            <div class="col">Descuento</div>
                        </div>
                        <div class="row">
                            <div class="col"><span><?php foreach ($order->get_coupon_codes() as $key=>$coupon){if($key == 0){ echo $coupon; } else { echo '/'.$coupon; }}?></span></div>
                        </div>
                    </div>
                    <div class="col"><?= $order->get_discount_to_display() == 0 ? '0€' : '-'.$order->get_discount_to_display() ?></div>
                </div>
                <div class="row hb-mo-total-row text-center">
                    <div class="col">Total</div>
                    <div class="col"><?= $order->get_total() ?>€</div>
                </div>
        </div>
    </div>
</div>
