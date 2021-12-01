<?php
$box_sus1 = get_theme_mod('hocicosbox_sn_box_1', '');
$box_sus2 = get_theme_mod('hocicosbox_sn_box_2', '');
$box_sus3 = get_theme_mod('hocicosbox_sn_box_3', '');
?>
<div class="container-fluid hbox-sub-background">
    <div class="row">
        <div class="col">
            <p class="hbox-title">¡Suscríbete ya!</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="hbox-subtitle">Por favor, selecciona en primer lugar para quién es la cajita mensual.</p>
        </div>
    </div>
    <div class="row align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="hbox-image" style="background-image: url(<?= $box_sus1 ?>)">
                        <a type="button" class="btn btn-primary hbox-btn-dca" href="#">PERRETE</a>
                    </div>
                </div>
                <div class="col">
                    <div class="hbox-image" style="background-image: url(<?= $box_sus2 ?>)">
                        <a type="button" class="btn btn-primary hbox-btn-dca" href="#">GATETE</a>
                    </div>
                </div>
                <div class="col">
                    <div class="hbox-image" style="background-image: url(<?= $box_sus3 ?>)">
                        <a type="button" class="btn btn-primary hbox-btn-dca" href="#">AMBOS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row align-items-center justify-content-center">
        <div class="col text-center">
            <a type="button" class="btn btn-primary hbox-btn-sub" href="#">COMENZAR SUSCRIPCIÓN</a>
        </div>
    </div>
</div>
