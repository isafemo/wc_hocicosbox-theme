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
    <div class="container hb-c-f-c">
        <div class="row">
            <div class="col">
                <h1>Tu carrito (Con Log-in)</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <table class="table hb-user-int-orders-table">
                                <thead>
                                <tr>
                                    <th class="text-uppercase" colspan="3" scope="col">PRODUCTO</th>
                                    <th class="text-uppercase" scope="col">PRECIO</th>
                                    <th class="text-uppercase" scope="col">CANTIDAD</th>
                                    <th class="text-uppercase" scope="col">SUBTOTAL</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                                    $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                                    $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                                    if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                                        $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                                        ?>
                                        <tr>
                                            <td>
                                                <?php
                                                echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                                    'woocommerce_cart_item_remove_link',
                                                    sprintf(
                                                        '<a href="%s" class="remove" id="hc-remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                                                        esc_url(wc_get_cart_remove_url($cart_item_key)),
                                                        esc_html__('Remove this item', 'woocommerce'),
                                                        esc_attr($product_id),
                                                        esc_attr($_product->get_sku())
                                                    ),
                                                    $cart_item_key
                                                );
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

                                                if (!$product_permalink) {
                                                    echo $thumbnail; // PHPCS: XSS ok.
                                                } else {
                                                    printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?= esc_url($product_permalink) ?>"><?= $_product->get_name() ?></a>
                                            </td>
                                            <td><?= WC()->cart->get_product_price($_product) ?></td>
                                            <td>
                                                <?php
                                                if ($_product->is_sold_individually()) {
                                                    $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
                                                } else {
                                                    $product_quantity = woocommerce_quantity_input(
                                                        array(
                                                            'input_name' => "cart[{$cart_item_key}][qty]",
                                                            'input_value' => $cart_item['quantity'],
                                                            'max_value' => $_product->get_max_purchase_quantity(),
                                                            'min_value' => '0',
                                                            'product_name' => $_product->get_name(),
                                                        ),
                                                        $_product,
                                                        false
                                                    );
                                                }

                                                echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                                                ?>
                                            </td>
                                        </tr>
                                    <?php }
                                } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col">
                        <?php if (wc_coupons_enabled()) { ?>
                            <div class="coupon">
                                <label for="coupon_code"><?php esc_html_e('Coupon:', 'woocommerce'); ?></label> <input
                                        type="text" name="coupon_code" class="input-text" id="coupon_code" value=""
                                        placeholder="<?php esc_attr_e('Coupon code', 'woocommerce'); ?>"/>
                                <button type="submit" class="button" name="apply_coupon"
                                        value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>"><?php esc_attr_e('Apply coupon', 'woocommerce'); ?></button>
                                <?php do_action('woocommerce_cart_coupon'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col">
                        <button type="submit" class="button" name="update_cart"
                                value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update cart', 'woocommerce'); ?></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">DIRECCION ENVIO</div>
                    <div class="col">EDITAR</div>
                </div>
                <div class="row">
                    <div class="col">DIRECCION</div>
                    <div class="col">EMAIL Y TELEFONO</div>
                </div>
                <div class="row">
                    <div class="col">COMENTARIOS</div>
                </div>
                <div class="row">
                    <div class="col">TEXTAREA</div>
                </div>
            </div>
            <div class="col">
                <div class="container-fluid hb-c-wd-c">
                    <div class="row">
                        <div class="col">
                            <h2>Tu pedido</h2>
                        </div>
                    </div>
                    <div class="row hb-c-wd-items">
                        <?php
                        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                            $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                            $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                            if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                                $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                                ?>
                                <div class="col-8">
                                    <p><?= $_product->get_name() ?></p>
                                </div>
                                <div class="col">
                                    <p class="hb-c-wd-price"><?= WC()->cart->get_product_price($_product) ?>
                                        <span> x <?= $cart_item['quantity'] ?></span></p>
                                </div>
                            <?php }
                        } ?>
                    </div>
                    <div class="row hb-c-wd-totals">
                        <div class="col">
                            <p>Envio</p>
                        </div>
                        <div class="col">
                            <span>dineros</span>
                        </div>
                    </div>
                    <div class="row hb-c-wd-totals">
                        <div class="col">
                            <p>Impuestos</p>
                        </div>
                        <div class="col">
                            <span>dineros</span>
                        </div>
                    </div>
                    <div class="row hb-c-wd-totals">
                        <div class="col">
                            <div class="row">
                                <div class="col"><p>Descuento:</p></div>
                            </div>
                            <div class="row">
                                <div class="col">codename</div>
                            </div>
                        </div>
                        <div class="col">
                            <span>dineros</span>
                        </div>
                    </div>
                    <div class="row hb-c-wd-total-row">
                        <div class="col">
                            Total
                        </div>
                        <div class="col">
                            dineros
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-primary">FINALIZAR COMPRA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




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