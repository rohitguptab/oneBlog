<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oneBlog
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('items'); ?>>
	<div class="inner <?php echo wp_get_attachment_url(get_post_thumbnail_id($book_item->ID)) ? '' :  'no-image' ?>">
		<a class="post-link" href="<?php echo esc_url(get_permalink()) ?>"></a>
		<?php oneBlog_post_thumbnail(); ?>
		<div class="details">
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

</div><!-- #post-<?php the_ID(); ?> -->