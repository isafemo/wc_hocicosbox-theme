<?php
/**
 * Orders
 *
 * Shows orders on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/orders.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_account_orders', $has_orders ); ?>

<?php if ( $has_orders ) : ?>
    <div class="container container-test-bg">
        <div class="row">
            <div class="col">
                <h1 class="hb-user-int-orders-title">Tu historial de pedidos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table hb-user-int-orders-table">
                    <thead>
                    <tr>
                        <?php foreach (wc_get_account_orders_columns() as $column_id => $column_name) : ?>
                            <th class="text-uppercase" scope="col"><?php echo esc_html($column_name); ?></th>
                        <?php endforeach; ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($customer_orders->orders as $customer_order) {
                        $order = wc_get_order($customer_order); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
                        $item_count = $order->get_item_count() - $order->get_item_count_refunded();
                        ?>
                        <tr>
                            <?php foreach (wc_get_account_orders_columns() as $column_id => $column_name) : ?>
                                <td data-title="<?php echo esc_attr($column_name); ?>">
                                    <?php if (has_action('woocommerce_my_account_my_orders_column_' . $column_id)) : ?>
                                        <?php do_action('woocommerce_my_account_my_orders_column_' . $column_id, $order); ?>

                                    <?php elseif ('order-number' === $column_id) : ?>
                                        <a href="<?php echo esc_url($order->get_view_order_url()); ?>">
                                            <?php echo esc_html(_x('#', 'hash before order number', 'woocommerce') . $order->get_order_number()); ?>
                                        </a>

                                    <?php elseif ('order-date' === $column_id) : ?>
                                        <time datetime="<?php echo esc_attr($order->get_date_created()->date('c')); ?>"><?php echo esc_html(wc_format_datetime($order->get_date_created())); ?></time>

                                    <?php elseif ('order-status' === $column_id) : ?>
                                        <?php echo esc_html(wc_get_order_status_name($order->get_status())); ?>

                                    <?php elseif ('order-total' === $column_id) : ?>
                                        <?php
                                        /* translators: 1: formatted order total 2: total order items */
                                        echo wp_kses_post(sprintf(_n('%1$s', '%1$s', $item_count, 'woocommerce'), $order->get_formatted_order_total(), $item_count));
                                        ?>

                                    <?php elseif ('order-actions' === $column_id) : ?>
                                        <?php
                                        $actions = wc_get_account_orders_actions($order);

                                        if (!empty($actions)) {
                                            foreach ($actions as $key => $action) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
                                                //TODO: ACCIONES VER, REPETIR, FACTURA
                                                echo '<a href="' . esc_url($action['url']) . '" class="btn btn-outline-primary">' . esc_html($action['name']) . '</a>';
//                                                echo '<a href="' . esc_url($action['url']) . '" class="btn btn-outline-primary">' . esc_html($action['name']) . '</a>';
//                                                echo '<a href="' . esc_url($action['url']) . '" class="btn btn-outline-primary">' . esc_html($action['name']) . '</a>';
                                            }
                                        }
                                        ?>
                                    <?php endif; ?>
                                </td>
                            <?php endforeach; ?>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <nav class="hb-mo-pagination">
                    <ul class="pagination justify-content-center">
                        <li class="<?= $current_page == 1 ? 'disabled' : ''?>" disabled="disabled">
                            <a class="page-link" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page - 1 ) ); ?>" tabindex="-1"><</a>
                        </li>
                    <?php
                    $num_pages = $customer_orders->max_num_pages;
                    for ($i = 0; $i < $num_pages && $i <= 5; $i++){ ?>
                        <li class="<?= ($i+1) == $current_page ? 'active' : '' ?>">
                            <a class="page-link" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $i+1 ) ); ?>"><?= ($i+1) ?></a>
                        </li>
                    <?php } ?>
                        <li class="<?= $current_page == $num_pages ? 'disabled' : ''?>">
                            <a class="page-link" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page + 1 ) ); ?>">></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

<?php else : ?>
	<div class="woocommerce-message woocommerce-message--info woocommerce-Message woocommerce-Message--info woocommerce-info">
		<a class="woocommerce-Button button" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>"><?php esc_html_e( 'Browse products', 'woocommerce' ); ?></a>
		<?php esc_html_e( 'No order has been made yet.', 'woocommerce' ); ?>
	</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_account_orders', $has_orders ); ?>
