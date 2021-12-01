<?php
$box_wis1 = get_theme_mod('hocicosbox_wis_box_1', '');
$box_wis2 = get_theme_mod('hocicosbox_wis_box_2', '');
$box_wis3 = get_theme_mod('hocicosbox_wis_box_3', '');
?>
<div class="container-fluid hb-background">
    <div class="row align-items-center justify-content-center">
        <div class="col">
            <p class="wis-what">¿Qué es la Hocicosbox?</p>
        </div>
    </div>
    <div class="row align-items-center justify-content-center">
        <div class="col-7">
            <p class="wis-desc">Hocicosbox es una cajita mensual que te hará llegar una selección de productos pensados y elegidos para tu mascota en base a sus preferencias y características.</p>
        </div>
    </div>
    <div class="row justify-content-center align-items-center wis-boxes">
        <div class="col">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <center><div class="img-wis" style="background-image: url(<?= $box_wis1 ?>)"></div></center>
                        <p class="wis-title-box">Recibirás juguetes, snacks, productos de higiene y accesorios</p>
                        <p class="wis-desc-box">Recibirás en casa productos de calidad, probados por nosotras y con un envío gratuito. ¡Aprovéchalo!</p>
                    </div>
                    <div class="col">
                        <center><div class="img-wis" style="background-image: url(<?= $box_wis2 ?>)"></div></center>
                        <p class="wis-title-box">Cada mes una temática personalizada para tu peludo</p>
                        <p class="wis-desc-box">Harry Potter, unicornios, alpacas, … ¡Cada mes una temática elegida con la ayuda de nuestros seguidores en las redes!</p>
                    </div>
                    <div class="col">
                        <center><div class="img-wis" style="background-image: url(<?= $box_wis3 ?>)"></div></center>
                        <p class="wis-title-box">Tú mismo nos contarás cuáles son tus preferencias</p>
                        <p class="wis-desc-box">Durante la suscripción, completarás un formulario para indicarnos tus alergias, gustos, preferencias, etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
