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
$start_section = get_template_directory() . '/inc/sections/hb-hocicosbox/start-section.php';
require_once( $start_section );
$what_is = get_template_directory() . '/inc/sections/hb-hocicosbox/what-is-section.php';
require_once( $what_is );
$subscribe = get_template_directory() . '/inc/sections/hb-hocicosbox/subscribe-section.php';
require_once( $subscribe );
$other_months = get_template_directory() . '/inc/sections/hb-hocicosbox/other-months-section.php';
require_once( $other_months );
?>
</div>
<?php get_footer() ?>
