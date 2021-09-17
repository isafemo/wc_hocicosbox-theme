<?php
$args = array(
//    'category' => array( 'Accessories' ),
    'status' => 'publish',
    'orderby'  => 'date',
    'posts_per_page' => 8,
);
$products = wc_get_products( $args );
?>
<div class="container-fluid home-section">
    <div class="row">
        <div class="col-2"></div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <p class="title-news">Nuestras marcas</p>
                </div>
                <div class="col text-right align-self-center">
                    <a class="link-news" href="">Ver todas</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <hr class="header-hr">
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>
<div class="container home-section">
    <div class="row multi-columns-row">
        <?php
        $customizer_trades_repeater = get_theme_mod('customizer_trades_repeater', json_encode( array(
            /*The content from your default parameter or delete this argument if you don't want a default*/)) );
        $customizer_trades_repeater_decoded = json_decode($customizer_trades_repeater);
        foreach($customizer_trades_repeater_decoded as $key => $repeater_item){
        ?>
            <div class="col">
                <a href="<?= !empty($repeater_item->link) ? $repeater_item->link : "#" ?>">
                    <img class="img-fluid img-home-trades" src="<?= !empty($repeater_item->image_url) ? $repeater_item->image_url : "" ?>">
                </a>
            </div>
        <?php } ?>
    </div>
</div>