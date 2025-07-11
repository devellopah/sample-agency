<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Sample_Agency
 */

get_header();
?>

<main id="primary" class="site-main">
	<!-- not found -->
	<div class="not-found" id="not-found">
		<div class="container">
			<div class="not-found__wrap">
				<span class="not-found__heading"><?php the_field('404_heading', 'option') ?></span>
				<p class="not-found__description"><?php the_field('404_description', 'option') ?></p>
				<a href="<?php echo esc_url(get_field('404_link', 'option')['url']) ?>" target="<?php echo esc_attr(get_field('404_link', 'option')['target']) ?>" class="not-found__btn btn"><?php echo esc_html(get_field('404_link', 'option')['title']) ?></a>
			</div>
			<?php if (get_field('404_bg_image', 'option')) : ?>
				<picture class="not-found__bg">
					<img src="<?php echo esc_url(get_field('404_bg_image', 'option')['url']) ?>" alt="<?php echo esc_attr(get_field('404_bg_image', 'option')['alt']) ?>">
				</picture>
			<?php endif ?>
		</div>
	</div>
	<!-- end of not found -->

</main><!-- #main -->

<?php
get_footer();
