<?php
if( !function_exists( 'imperial_search_form' ) ) {
    function imperial_search_form( $form )
    {
        $form = sprintf( '<form action="%s" method="get" class="search-form">
			<input type="text" class="form-control" value="%s" required name="s" placeholder="%s">
			<button type="submit"><span><i class="fa fa-search" aria-hidden="true"></i></span></button>
		</form>', esc_url( home_url( '/' ) ), esc_attr( get_search_query() ), esc_html__( 'Type and Hit Enter', 'imperial' ) );
        return $form;
    }

    add_filter( 'get_search_form', 'imperial_search_form' );
}

if( !function_exists( 'imperial_readmore_btn' ) ) {
    function imperial_readmore_btn() { ?>
        <div class="read-more-btn">
            <a class="btn btn-readmore hvr-sweep-to-right" href="<?php print the_permalink(); ?>"><?php print __( 'Read more...', 'imperial' ); ?></a>
        </div>
    <?php
    }
}

function imperial_excerpt_more( $excerpt ) {
    return ' ...';
}
add_filter( 'excerpt_more', 'imperial_excerpt_more' );

