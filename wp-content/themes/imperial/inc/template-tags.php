<?php

if ( !function_exists( 'imperial_postlist_meta_header ' ) ) :
    function imperial_posts_meta_header() {
        // hide meta in pages
        if ('post' === get_post_type()) {
            echo '<span class="date"><i class="far fa-clock"></i>' . get_the_date() . '</span>';
            echo '<span class="author"><i class="fas fa-user"></i>' . get_the_author() . '</span>';
            if( !is_single() ) {
                echo '<span class="categories"><i class="fas fa-folder"></i>' . get_the_category_list(esc_html__(', ', 'imperial')) . '</span>';
            }
        }
    }
endif;

if ( !function_exists( 'imperial_post_meta_footer ' ) ) :
    function imperial_post_meta_footer() {
        // hide meta in pages
        if ('post' === get_post_type()) {
            if( is_single() ) {
                echo '<span class="categories"><i class="fas fa-folder"></i>' . get_the_category_list(esc_html__(', ', 'imperial')) . '</span>';
            }
            $tags_list = get_the_tag_list( '', esc_html__(', ', 'imperial') );
            if ($tags_list) {
                echo '<span class="tags"><i class="fa fa-tags"></i>' . $tags_list . '</span>';
            }
        }
    }
endif;

if (!function_exists('imperial_posted_on')) :
    /**
     * Prints HTML with meta information for the current post-date/time and author.
     */
    function imperial_posted_on()
    {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf($time_string,
            esc_attr(get_the_date('c')),
            esc_html(get_the_date()),
            esc_attr(get_the_modified_date('c')),
            esc_html(get_the_modified_date())
        );

        $posted_on = sprintf(
            esc_html_x('Posted on %s', 'post date', 'imperial'),
            '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
        );

        $byline = sprintf(
            esc_html_x('by %s', 'post author', 'imperial'),
            '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
        );

        echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

    }
endif;

if (!function_exists('imperial_entry_footer')) :
    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function imperial_entry_footer()
    {
        // Hide category and tag text for pages.
        if ('post' === get_post_type()) {
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list(esc_html__(', ', 'imperial'));
            if ($categories_list && imperial_categorized_blog()) {
                printf('<span class="cat-links">' . esc_html__('Posted in %1$s', 'imperial') . '</span>', $categories_list); // WPCS: XSS OK.
            }

            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list('', esc_html__(', ', 'imperial'));
            if ($tags_list) {
                printf('<span class="tags-links">' . esc_html__('Tagged %1$s', 'imperial') . '</span>', $tags_list); // WPCS: XSS OK.
            }
        }

        if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
            echo '<span class="comments-link">';
            /* translators: %s: post title */
            comments_popup_link(sprintf(wp_kses(__('Leave a Comment <span class="screen-reader-text"> on %s</span>', 'imperial'), array('span' => array('class' => array()))), get_the_title()));
            echo '</span>';
        }

        edit_post_link(
            sprintf(
            /* translators: %s: Name of current post */
                esc_html__('Edit %s', 'imperial'),
                the_title('<span class="screen-reader-text">"', '"</span>', false)
            ),
            '<span class="edit-link">',
            '</span>'
        );
    }
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function imperial_categorized_blog()
{
    if (false === ($all_the_cool_cats = get_transient('imperial_categories'))) {
        // Create an array of all the categories that are attached to posts.
        $all_the_cool_cats = get_categories(array(
            'fields' => 'ids',
            'hide_empty' => 1,
            // We only need to know if there is more than one category.
            'number' => 2,
        ));

        // Count the number of categories that are attached to the posts.
        $all_the_cool_cats = count($all_the_cool_cats);

        set_transient('imperial_categories', $all_the_cool_cats);
    }

    if ($all_the_cool_cats > 1) {
        // This blog has more than 1 category so imperial_categorized_blog should return true.
        return true;
    } else {
        // This blog has only 1 category so imperial_categorized_blog should return false.
        return false;
    }
}

/**
 * Flush out the transients used in imperial_categorized_blog.
 */
function imperial_category_transient_flusher()
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    // Like, beat it. Dig?
    delete_transient('imperial_categories');
}

add_action('edit_category', 'imperial_category_transient_flusher');
add_action('save_post', 'imperial_category_transient_flusher');
