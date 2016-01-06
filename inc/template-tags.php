<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package jewelry
 */

if ( ! function_exists( 'jewelry_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function jewelry_posted_on() {
	if ( 'post' === get_post_type() ){
		/*categories*/
	$categories_list = get_the_category_list( __( ', ', 'jewelry' ) );
	if ( $categories_list /*&& jewelry_categorized_blog()*/ ) {
		echo '<span class="categories-links"><i class="fa fa-bookmark">&nbsp;</i>' . $categories_list . '</span>';
	}
	/*user and time*/
	printf( '<span class="entry-date"><i class="fa fa-calendar">&nbsp;</i><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s">%3$s</time></a></span> <span class="byline"><i class="fa fa-user">&nbsp;</i><span class="author vcard"><a class="url fn n" href="%4$s" rel="author">%5$s</a></span></span>',
		esc_url( get_permalink() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date('F j, Y') ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		get_the_author()
	);

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link"><i class="fa fa-comments">&nbsp;</i>';
			comments_popup_link( esc_html__( '0', 'jewelry' ), esc_html__( '1 Comment', 'jewelry' ), esc_html__( '% Comments', 'jewelry' ) );
			echo '</span>';
		}

		edit_post_link(
		/* translators: %s: Name of current post */
			esc_html__( 'Edit', 'jewelry' )

			,
			'<span class="edit-link">',
			'</span>'
		);
}




}
endif;

if ( ! function_exists( 'jewelry_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function jewelry_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'jewelry' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'jewelry' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}



}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function jewelry_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'jewelry_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'jewelry_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so jewelry_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so jewelry_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in jewelry_categorized_blog.
 */
function jewelry_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'jewelry_categories' );
}
add_action( 'edit_category', 'jewelry_category_transient_flusher' );
add_action( 'save_post',     'jewelry_category_transient_flusher' );
