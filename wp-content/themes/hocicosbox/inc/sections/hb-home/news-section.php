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
                    <p class="title-news">Novedades</p>
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
        foreach ($products as $key => $product){
        ?>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="row">
                <div class="col"><div class="shop-item-image" style="background-image: url('<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>')"></div></div>
            </div>
            <div class="row">
                <div class="col text-center"><h4 class="new-product-title"><a href="#"><?= $product->name ?></a></h4></div>
            </div>
            <div class="row">
                <div class="col"><p class="new-product-price"><?= $product->price ?>€</p></div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>