<div class="container-fluid carousel-home-container">
    <div class="row">
        <div class="col carousel-home">
           <?php
               $title1 = get_theme_mod('carousel_custom_title_1', '');
               $title2 = get_theme_mod('carousel_custom_title_2', '');
               $uri = get_theme_mod('carousel_custom_url', '');
               $uriText = get_theme_mod('carousel_custom_url_text', '');
               $img = get_theme_mod('carousel_custom_image', '');
           ?>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="" src="<?php echo $img ?>'" alt="">
                        <div class="carousel-caption d-none d-md-block home-caption-carousel">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6"></div>
                                    <div class="col-6">
                                        <h4><?= $title1 ?></h4>
                                        <h5><?= $title2 ?></h5>
                                        <a class="carousel-shop-button btn" href="<?= $uri ?>"><?= $uriText ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="" src="<?php echo $img ?>'" alt="">
                        <div class="carousel-caption d-none d-md-block home-caption-carousel">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6"></div>
                                    <div class="col-6">
                                        <h4><?= $title1 ?></h4>
                                        <h5><?= $title2 ?></h5>
                                        <a class="carousel-shop-button btn" href="<?= $uri ?>"><?= $uriText ?>></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>