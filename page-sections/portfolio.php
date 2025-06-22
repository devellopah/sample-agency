<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase"><?php the_field('portfolio_heading') ?></h2>
      <h3 class="section-subheading text-muted"><?php the_field('portfolio_subheading') ?></h3>
    </div>

    <?php if (get_field('portfolio_projects')) :
      $count = count(get_field('portfolio_projects'));
    ?>

      <div class="row">

        <?php foreach (get_field('portfolio_projects') as $i => $item) :
          $iteration = $i + 1;
        ?>

          <div class="col-lg-4 col-sm-6 <?php echo $count < $iteration ? ' mb-4 ' : '' ?> <?php echo ($count - 1) === $iteration ? ' mb-sm-0 ' : '' ?> <?php echo ($count - 2) === $iteration ? ' mb-lg-0 ' : '' ?>">
            <div class="portfolio-item">
              <a class="portfolio-link" data-bs-toggle="modal"
                href="#portfolioModal<?php echo $iteration ?>">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content"><i
                      class="fas fa-plus fa-3x"></i></div>
                </div>
                <img src="<?php echo esc_url($item['image']['url']) ?>" alt="<?php echo esc_attr($item['image']['alt']) ?>" class="img-fluid">
              </a>
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading"><?php echo esc_html($item['client']) ?></div>
                <div
                  class="portfolio-caption-subheading text-muted"><?php echo esc_html($item['category']) ?></div>
              </div>
            </div>
          </div>

        <?php endforeach ?>

      </div>

    <?php endif ?>

  </div>
</section>