<div class="container-fluid carousel-home-container">
    <div class="row">
        <div class="col carousel-home">
            <div id="hbcarousel" class="carousel slide" data-ride="carousel">
                <?php
                $customizer_repeater_example = get_theme_mod('customizer_repeater_example', json_encode(array(/*The content from your default parameter or delete this argument if you don't want a default*/)));
                $customizer_repeater_example_decoded = json_decode($customizer_repeater_example);
                ?>
                <ol class="carousel-indicators">
                    <?php
                    foreach ($customizer_repeater_example_decoded as $key => $repeater_item) {
                        ?>
                    <li data-target="#hbcarousel" data-slide-to="<?= $key ?>" <?php if ($key == 0) { ?> class="active" <?php } ?> ></li>
                    <?php } ?>
                </ol>
                <div class="carousel-inner">
                    <?php
                    foreach ($customizer_repeater_example_decoded as $key => $repeater_item) {
                        ?>
                        <div class="carousel-item <?php if ($key == 0) { ?> active <?php } ?>">
                            <div class="carousel-img"
                                 style="background-image: url('<?= !empty($repeater_item->image_url) ? $repeater_item->image_url : "" ?>');"></div>
                            <div class="carousel-caption home-caption-carousel">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6 d-none d-md-block"></div>
                                        <div class="col-6">
                                            <h4><?= !empty($repeater_item->title) ? $repeater_item->title : "" ?></h4>
                                            <h5><?= !empty($repeater_item->subtitle) ? $repeater_item->subtitle : "" ?></h5>
                                            <a class="carousel-shop-button btn" href="
                                                    <?= !empty($repeater_item->link) ? $repeater_item->link : "#" ?>">
                                                <?= !empty($repeater_item->shortcode) ? $repeater_item->shortcode : "" ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>