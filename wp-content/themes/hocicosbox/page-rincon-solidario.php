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
            <div class="row">
                <div class="col rs-title">
                    <h2>Rincón solidario</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4 rs-desc">
                    <p>Familia Hocicosbox, ¿y si unimos las patas por los peludos que nos necesitan? ¡Ayúdanos a colaborar!</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row rs-tarjeta" style="background-color: #0a4b78; background-image: url('assets/images/imagenes-test/imagen-1-solidary.png') ">
                <div class="col">
                    <div class="row">
                        <div class="col-6">
                            <h2>Donación a protectoras</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn-rs">VER PRODUCTO</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row rs-tarjeta" style="background-color: #0a4b78; background-image: url('assets/images/imagenes-test/imagen-2-solidary.png')">
                <div class="col">
                    <div class="row">
                        <div class="col-6">
                            <h2>Tarjeta regalo solidaria</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn-rs">VER PRODUCTO</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer() ?>