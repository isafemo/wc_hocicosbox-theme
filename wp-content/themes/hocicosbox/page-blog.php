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
        $first_post_section = get_template_directory() . '/inc/sections/hb-blog/first-post-section.php';
        require_once( $first_post_section );
        $post_section = get_template_directory() . '/inc/sections/hb-blog/post-section.php';
        require_once( $post_section );
        $instagram_section = get_template_directory() . '/inc/sections/hb-blog/instagram-section.php';
        require_once( $instagram_section );
        ?>
    </div>
<?php get_footer() ?>