<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sample_Agency
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<style>
		body {
			display: flex;
			flex-direction: column;
			min-height: 100vh;
		}

		.site-main {
			flex-grow: 1;
		}

		header.masthead {
			background-image: url("<?php the_field('intro_bg_image') ?>");
		}

		.form-group.is--error>.invalid-feedback {
			display: initial;
		}

		<?php if (is_front_page()) : ?>@media (max-width: 991.9998px) {
			#mainNav {
				background-color: #212529;
			}
		}

		.relative {
			position: relative;
		}

		<?php endif; ?>
	</style>
</head>

<body id="page-top" <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark <?php echo is_front_page() ? ' fixed-top' : '' ?>" id="mainNav">
		<div class="container">

			<?php if (!empty(get_field('header_logo_desc_1', 'option'))) : ?>

				<a href="<?php echo home_url() ?>" class="navbar-brand" href="#page-top">
					<img src="<?php echo esc_url(get_field('header_logo_desc_1', 'option')['url']) ?>" alt="<?php echo esc_attr(get_field('header_logo_desc_1', 'option')['alt']) ?>">
				</a>

			<?php endif ?>

			<?php if (is_front_page()) : ?>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					Меню
					<i class="fas fa-bars ms-1"></i>
				</button>

				<?php if (get_field('header_menu', 'option')) : ?>

					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">

							<?php foreach (get_field('header_menu', 'option') as $item) : ?>
								<li class="nav-item"><a class="nav-link" href="#<?php echo esc_html($item['id']) ?>"><?php echo esc_html($item['title']) ?></a></li>
							<?php endforeach ?>

						</ul>
					</div>

				<?php endif ?>

			<?php endif ?>

		</div>
	</nav>

	<?php if (is_front_page()) : ?>

		<header class="masthead">
			<div class="container">
				<div class="masthead-subheading"><?php the_field('intro_subheading') ?></div>
				<div class="masthead-heading text-uppercase"><?php the_field('intro_heading') ?></div>
				<a class="btn btn-primary btn-xl text-uppercase" href="#services"><?php the_field('intro_btn_text') ?></a>
			</div>
		</header>

	<?php endif ?>