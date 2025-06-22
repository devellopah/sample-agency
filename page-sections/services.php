  <!-- Services-->
  <section class="page-section" id="services">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase"><?php the_field('services_heading') ?></h2>
        <h3 class="section-subheading text-muted"><?php the_field('services_subheading') ?></h3>
      </div>

      <?php if (get_field('services_list')) : ?>

        <div class="row text-center">

          <?php foreach (get_field('services_list') as $item) : ?>

            <div class="col-md-4">

              <?php if ($item['icon']) : ?>

                <span class="fa-stack fa-4x">
                  <i class="fas fa-circle fa-stack-2x text-primary"></i>
                  <i class="fas <?php echo $item['icon'] ?> fa-stack-1x fa-inverse"></i>
                </span>

              <?php endif ?>

              <h4 class="my-3"><?php echo esc_html($item['title']) ?></h4>
              <p class="text-muted"><?php echo esc_html($item['description']) ?></p>
            </div>

        <?php endforeach;
        endif; ?>
        </div>
    </div>
  </section>