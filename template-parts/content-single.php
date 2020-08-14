<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oneBlog
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="banner <?php echo wp_get_attachment_url(get_post_thumbnail_id($book_item->ID)) ? '' :  'no-image' ?>">

		<?php oneBlog_post_thumbnail(); ?>
		<div class="banner-contain">
			<div class="container">
				<?php
				if (is_singular()) :
					the_title('<h1 class="entry-title">', '</h1>');
				else :
					the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
				endif;

				if ('post' === get_post_type()) :
				?>
					<div class="entry-meta">
						<?php
						oneBlog_posted_on();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'oneBlog'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'oneBlog'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php oneBlog_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</div><!-- #post-<?php the_ID(); ?> -->