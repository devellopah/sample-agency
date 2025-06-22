<section class="page-section" id="about">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase"><?php the_field('about_heading') ?></h2>
      <h3 class="section-subheading text-muted"><?php the_field('about_subheading') ?></h3>
    </div>

    <?php if (get_field('about_timeline')) : ?>

      <ul class="timeline">

        <?php foreach (get_field('about_timeline') as $i => $item) : $iteration = $i + 1 ?>

          <li class="<?php echo $iteration % 2 === 0 ? ' timeline-inverted' : '' ?>">
            <div class="timeline-image">
              <img src="<?php echo esc_url($item['image']['url']) ?>" alt="<?php echo esc_attr($item['image']['alt']) ?>" class="rounded-circle img-fluid">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4><?php echo esc_html($item['heading']) ?></h4>
                <h4 class="subheading"><?php echo esc_html($item['subheading']) ?></h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted"><?php echo esc_html($item['description']) ?></p>
              </div>
            </div>
          </li>

        <?php endforeach ?>

        <li class="timeline-inverted">
          <div class="timeline-image">
            <h4><?php the_field('about_timeline_call') ?></h4>
          </div>
        </li>
      </ul>

    <?php endif ?>

  </div>
</section>