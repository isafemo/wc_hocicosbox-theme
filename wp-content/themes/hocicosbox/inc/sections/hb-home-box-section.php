<?php
    $dogImg = get_theme_mod('home_month_image_1', '');
    $catImg = get_theme_mod('home_month_image_2', '');
?>
<div class="container-fluid home-section text-center">
    <div class="row">
        <div class="col">
            <p class="title-box">Hocicosbox de <?php setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish');
            echo strftime("%B", strtotime((string)date("F")));?></p>
        </div>
    </div>
    <div class="row align-items-center align-self-center">
        <div class="col-1"></div>
        <div class="col">
            <img class="img-thumbnail home-box-img" src="<?php echo $dogImg ?>'" alt="">
        </div>
        <div class="col home-box">
            <img class="img-thumbnail home-box-img" src="<?php echo $catImg ?>'" alt="">
        </div>
        <div class="col-1"></div>
    </div>
</div>