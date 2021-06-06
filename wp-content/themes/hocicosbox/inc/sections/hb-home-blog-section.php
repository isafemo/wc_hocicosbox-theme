<div class="container-fluid home-section">
    <div class="row">
        <div class="col">
            <p class="title-news">¿Has leído nuestro blog?</p>
            <div class="container">
                <div class="row">
                    <?php
                    if ( have_posts() ):

                        while ( have_posts() ): the_post();
                            ?>
                            <article>
                                <h2><?= the_title() ?></h2>
                                <div><?=  the_content() ?></div>
                            </article>
                        <?php
                        endwhile;
                    else:
                        ?>
                        <p>Nothing to display</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>