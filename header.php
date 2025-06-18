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
$options = get_fields('options');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<style>
		header.masthead {
			background-image: url("<?php the_field('intro_bg_image') ?>");
		}
	</style>
</head>

<body id="page-top" <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">
			<?php if (!empty($options['header_logo_desc_1'])) : ?>
				<a href="<?= home_url() ?>" class="navbar-brand" href="#page-top">
					<img src="<?= esc_url($options['header_logo_desc_1']['url']) ?>" alt="<?= esc_attr($options['header_logo_desc_1']['alt']) ?>">
				</a>
			<?php endif ?>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars ms-1"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
					<li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
					<li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
					<li class="nav-item"><a class="nav-link" href="#about">About</a></li>
					<li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
					<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Masthead-->
	<header class="masthead">
		<div class="container">
			<div class="masthead-subheading"><?php the_field('intro_subheading') ?></div>
			<div class="masthead-heading text-uppercase"><?php the_field('intro_heading') ?></div>
			<a class="btn btn-primary btn-xl text-uppercase" href="#services"><?php the_field('intro_btn_text') ?></a>
		</div>
	</header>