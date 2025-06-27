<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sample_Agency
 */
?>

<?php if (!is_404()) : ?>
	<!-- Footer-->
	<footer class="footer py-4">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4 text-lg-start"><?php the_field('footer_copyright', 'option') ?></div>
				<div class="col-lg-4 my-3 my-lg-0">

					<?php if (get_field('footer_socials_twitter', 'option')) : ?>
						<a class="btn btn-dark btn-social mx-2" href="<?php echo esc_url(get_field('footer_socials_twitter', 'option')) ?>" target="_blank" rel="noreferrer noopener">
							<i class="fab fa-twitter"></i>
						</a>
					<?php endif ?>
					<?php if (get_field('footer_socials_facebook', 'option')) : ?>
						<a class="btn btn-dark btn-social mx-2" href="<?php echo esc_url(get_field('footer_socials_facebook', 'option')) ?>" target="_blank" rel="noreferrer noopener">
							<i class="fab fa-facebook-f"></i>
						</a>
					<?php endif ?>

					<?php if (get_field('footer_socials_linkedin', 'option')) : ?>
						<a class="btn btn-dark btn-social mx-2" href="<?php echo esc_url(get_field('footer_socials_linkedin', 'option')) ?>" target="_blank" rel="noreferrer noopener">
							<i class="fab fa-linkedin-in"></i>
						</a>
					<?php endif ?>

				</div>
				<div class="col-lg-4 text-lg-end">
					<a class="link-dark text-decoration-none me-3" href="<?php echo esc_url(get_field('footer_link_1', 'option')['url']) ?>"><?php echo esc_html(get_field('footer_link_1', 'option')['text']) ?></a>
					<a class="link-dark text-decoration-none" href="<?php echo esc_url(get_field('footer_link_2', 'option')['url']) ?>"><?php echo esc_html(get_field('footer_link_2', 'option')['text']) ?></a>
				</div>
			</div>
		</div>
	</footer>

<?php endif; ?>

</div>

<?php if (get_field('portfolio_projects')) :
	foreach (get_field('portfolio_projects') as $i => $item) :
?>

		<div class="portfolio-modal modal fade" id="portfolioModal<?php echo $i + 1 ?>"
			tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-bs-dismiss="modal"><img
							src="<?php echo THEME_URI ?>/assets/img/close-icon.svg" alt="Close modal" />
					</div>
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="modal-body">
									<!-- Project details-->
									<h2 class="text-uppercase"><?php echo esc_html($item['heading']) ?></h2>
									<p class="item-intro text-muted"><?php echo esc_html($item['subheading']) ?></p>
									<img src="<?php echo esc_url($item['image']['url']) ?>" alt="<?php echo esc_attr($item['image']['alt']) ?>" class="img-fluid d-block mx-auto">

									<p><?php echo esc_html($item['description']) ?></p>
									<ul class="list-inline">
										<li>
											<strong><?php the_field('portfolio_project_client_label') ?></strong>
											<?php echo esc_html($item['client']) ?>
										</li>
										<li>
											<strong><?php the_field('portfolio_project_category_label') ?></strong>
											<?php echo esc_html($item['category']) ?>
										</li>
									</ul>
									<button
										class="btn btn-primary btn-xl text-uppercase"
										data-bs-dismiss="modal" type="button">
										<i class="fas fa-times me-1"></i>
										<?php the_field('portfolio_popup_closer_text') ?>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	endforeach;
endif;
?>

<?php wp_footer(); ?>

</body>

</html>