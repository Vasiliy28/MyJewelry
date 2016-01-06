<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jewelry
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>



	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content( sprintf(
		/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'jewelry' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );
		?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jewelry' ),
			'after'  => '</div>',
		) );
		?>



	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="entry-meta">
			<?php jewelry_posted_on(); ?>

		</div><!-- .entry-meta -->
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->


