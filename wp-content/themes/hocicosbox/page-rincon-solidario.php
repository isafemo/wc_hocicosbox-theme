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
    <div class="content-area">
        <div class="container-fluid">
            <div class="row justify-content-center align-self-center">
                <div class="col rs-title">
                    <h2>Rincón solidario</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 rs-desc">
                    <p>Familia Hocicosbox, ¿y si unimos las patas por los peludos que nos necesitan? ¡Ayúdanos a colaborar!</p>
                </div>
            </div>
        </div>
        <div class="container">
<?php
$customizer_rincon_solidario_repeater = get_theme_mod('customizer_rincon_solidario_repeater', json_encode( array(
    /*The content from your default parameter or delete this argument if you don't want a default*/)) );
$customizer_rincon_solidario_repeater_decoded = json_decode($customizer_rincon_solidario_repeater);
foreach($customizer_rincon_solidario_repeater_decoded as $key => $repeater_item){
    if($repeater_item->title != '' && $repeater_item->subtitle != '' && $repeater_item->image_url != '' && $repeater_item->shortcode != ''){
    ?>
    <div class="row rs-tarjeta" style="background-color: #0a4b78; background-image: url(<?= $repeater_item->image_url ?>) ">
        <div class="col">
            <div class="row">
                <div class="col-12 col-md-6 col-xs-8">
                    <h2><?= $repeater_item->title ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-7 col-xs-9">
                    <p><?= $repeater_item->subtitle ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a type="button" class="btn btn-primary btn-rs" href="<?= $repeater_item->link ?>"><?= strtoupper($repeater_item->shortcode) ?></a>
                </div>
            </div>
        </div>
    </div>
<?php } } ?>
        </div>
    </div>
<?php get_footer() ?>