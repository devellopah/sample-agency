<div class="not-found" id="not-found">
  <div class="container">
    <div class="not-found__wrap">

      <?php if (get_field('icon')) : ?>

        <picture class="not-found__icon">
          <img src="<?php echo esc_url(get_field('icon')['url']) ?>" alt="<?php echo esc_attr(get_field('icon')['alt']) ?>">
        </picture>

      <?php endif ?>

      <span class="not-found__heading"><?php the_field('heading') ?></span>
      <p class="not-found__description"><?php the_field('description') ?></p>
      <a href="<?php echo esc_url(get_field('link')['url']) ?>" class="not-found__btn btn"><?php echo esc_html(get_field('link')['text']) ?></a>
    </div>

    <?php if (get_field('404', 'option') && get_field('404', 'option')['bg_image']) : ?>

      <picture class="not-found__bg">
        <img src="<?php echo esc_url(get_field('404', 'option')['bg_image']['url']) ?>" alt="<?php echo esc_attr(get_field('404', 'option')['bg_image']['alt']) ?>">
      </picture>

    <?php endif ?>

  </div>
</div>