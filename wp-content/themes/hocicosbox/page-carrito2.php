<?php get_header() ?>
<?php
$cart = get_template_directory() . '/woocommerce/cart/cart.php';
$shipping = get_template_directory() . '/woocommerce/cart/cart-shipping.php';
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="schb-title">Tu carrito</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-6" style="background-color: #3c2861;">
            <?= require_once($cart); ?>
        </div>
        <div class="col-6" style="background-color: #0a4b78;">
            <?= require_once($shipping); ?>
        </div>
    </div>
</div>
<?php get_footer() ?>
