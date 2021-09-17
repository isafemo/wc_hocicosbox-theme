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
    $first_section = get_template_directory() . '/inc/sections/hb-quienes-somos/first-section.php';
    require_once( $first_section );
    $second_section = get_template_directory() . '/inc/sections/hb-quienes-somos/second-section.php';
    require_once( $second_section );
    $third_section = get_template_directory() . '/inc/sections/hb-quienes-somos/third-section.php';
    require_once( $third_section );
    $photos_section = get_template_directory() . '/inc/sections/hb-quienes-somos/photos-section.php';
    require_once( $photos_section );
    $box_section = get_template_directory() . '/inc/sections/hb-quienes-somos/box-section.php';
    require_once( $box_section );
    ?>
</div>
<?php get_footer() ?>
