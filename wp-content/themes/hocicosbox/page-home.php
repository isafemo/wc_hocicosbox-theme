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
        $carousel_section = get_template_directory() . '/inc/sections/hb-home/carousel-section.php';
        require_once( $carousel_section );
//        $box_section = get_template_directory() . '/inc/sections/hb-home/box-section.php';
//        require_once( $box_section );
//        $shop_section = get_template_directory() . '/inc/sections/hb-home/our-shop-section.php';
//        require_once( $shop_section );
//        $news_section = get_template_directory() . '/inc/sections/hb-home/news-section.php';
//        require_once( $news_section );
//        $recomendations_section = get_template_directory() . '/inc/sections/hb-home/recomendations-section.php';
//        require_once( $recomendations_section );
//        $trades_section = get_template_directory() . '/inc/sections/hb-home/our-trades-section.php';
//        require_once( $trades_section );
//        $solidary_section = get_template_directory() . '/inc/sections/hb-home/solidary-section.php';
//        require_once( $solidary_section );
//        $blog_section = get_template_directory() . '/inc/sections/hb-home/blog-section.php';
//        require_once( $blog_section );
//        $newsletter_section = get_template_directory() . '/inc/sections/hb-home/newsletter-section.php';
//        require_once( $newsletter_section );
        ?>
    </div>
<?php get_footer() ?>