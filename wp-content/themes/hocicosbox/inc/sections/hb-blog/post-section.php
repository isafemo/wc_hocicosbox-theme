<div class="container">
    <div class="row">
        <div class="col">
            <?php
            $argsPost = array(
                'post_type' => 'post',
                'post_per_page' => 3,
            );
            $featured_image = get_children( $argsPost );
            $blog_post = new WP_Query ( $argsPost );
            if($blog_post->have_posts()):
                while( $blog_post->have_posts()): $blog_post->the_post();
                    ?>
                    <div class="col">
                        <div class="img-blog-home" style="background-image: url('<?= get_the_post_thumbnail_url(); ?>');"></div>
                        <p class="home-blog-categories"><?= the_tags('', ' - ','') ?></p>
                        <p class="home-title-blog"><?= the_title() ?></p>
                        <p class="home-date-blog"><?= the_date() ?></p>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
