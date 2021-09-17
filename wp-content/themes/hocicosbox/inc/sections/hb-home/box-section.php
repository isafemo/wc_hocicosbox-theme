<?php
    $dogImg = get_theme_mod('home_box_image_1', '');
    $catImg = get_theme_mod('home_box_image_2', '');
?>
<div class="container-fluid home-section text-center">
    <div class="row">
        <div class="col">
            <p class="title-box">Hocicosbox de <?php setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish');
            echo strftime("%B", strtotime((string)date("F")));?></p>
        </div>
    </div>
    <div class="row align-items-center align-self-center">
        <div class="col-2"></div>
        <div class="col home-box">
            <p class="home-box-text">Guau?</p>
            <img class="img-home-box-dog" src="<?php echo get_template_directory_uri(); ?>/assets/images/home-imgs/group-26.png">
            <img class="img-thumbnail home-box-img" src="<?php echo $dogImg ?>'" alt="">
            <a class="home-box-button btn" href="#">¡CONSÍGUELA YA!</a>
        </div>
        <div class="col home-box">
            <p class="home-box-text">Meow!</p>
            <img class="img-home-box-cat" src="<?php echo get_template_directory_uri(); ?>/assets/images/home-imgs/group-55.png">
            <img class="img-thumbnail home-box-img" src="<?php echo $catImg ?>'" alt="">
            <a class="home-box-button btn" href="#">¡CONSÍGUELA YA!</a>
        </div>
        <div class="col-2"></div>
    </div>
</div>