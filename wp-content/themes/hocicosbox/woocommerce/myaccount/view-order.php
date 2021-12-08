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
    <div class="row">
        <div class="col hb-mo-title-col">DETALLES DEL PEDIDO</div>
        <div class="col hb-mo-title-col">PRECIO UNITARIO</div>
        <div class="col hb-mo-title-col">SUBTOTAL</div>
    </div>
    <?php foreach ($order->get_items() as $item) { ?>
        <div class="row">
            <div class="col hb-mo-item-col"><a href="producto/<?= $item->get_product()->slug ?>"> <?= $item->get_product()->name ?> </a></div>
            <div class="col hb-mo-price-col"><?= $item->get_product()->price ?>€ <span>x <?= $item->get_quantity() < 10 ? '0'.$item->get_quantity() : $item->get_quantity() ?></span></div>
            <div class="col hb-mo-price-col"><?= $item->get_subtotal().'€' ?></div>
        </div>
    <?php } ?>
    <hr class="hb-mo-hr">
    <div class="row">
        <div class="col">
            <div class="container-fluid hb-mo-total">
                <div class="row">
                    <div class="col">Enviado a</div>
                </div>
                <div class="row">
                    <div class="col">Dirección</div>
                </div>
                <div class="row">
                    <div class="col">Pagado mediante: <?= $order->get_order_item_totals()['payment_method']['value'] ?></div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="container-fluid hb-mo-total">
                <div class="row">
                    <div class="col">Envío</div>
                    <div class="col">€</div>
                </div>
                <div class="row">
                    <div class="col">Impuestos</div>
                    <div class="col"><?= $order->get_total_tax() ?>€</div>
                </div>
                <div class="row">
                    <div class="col">Descuento <span>codename</span></div>
                    <div class="col">€</div>
                </div>
                <div class="row hb-mo-total-row">
                    <div class="col">Total</div>
                    <div class="col"><?= $order->get_total() ?>€</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--######################################################-->
<?php
//do_action( 'woocommerce_view_order', $order_id ); ?>
