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
<?php
$first_contact_section = get_template_directory() . '/inc/sections/hb-contact/first-contact-section.php';
require_once($first_contact_section);
$instagram_section = get_template_directory() . '/inc/sections/hb-contact/instagram-section.php';
require_once($instagram_section);
?>
<?php get_footer() ?><?php
