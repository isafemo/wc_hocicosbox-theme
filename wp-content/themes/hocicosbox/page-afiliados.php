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
        <?php
        $start_section = get_template_directory() . '/inc/sections/hb-afiliados/start-section.php';
        require_once( $start_section );
        ?>
        <center><div class="purple-line"></div></center>
        <?php
        $register_section = get_template_directory() . '/inc/sections/hb-afiliados/register-section.php';
        require_once( $register_section );
        $recomendations_section = get_template_directory() . '/inc/sections/hb-afiliados/recomendation-section.php';
        require_once( $recomendations_section );
        ?>
    </div>
<?php get_footer() ?>