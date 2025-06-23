<section class="page-section bg-light" id="team">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase"><?php the_field('team_heading') ?></h2>
      <h3 class="section-subheading text-muted"><?php the_field('team_subheading') ?></h3>
    </div>
    <?php if (get_field('team_list')) : ?>

      <div class="row">

        <?php foreach (get_field('team_list') as $member) : ?>

          <div class="col-lg-4">
            <div class="team-member">
              <img src="<?php echo esc_url($member['photo']['url']) ?>" alt="<?php echo esc_attr($member['photo']['alt']) ?>" class="mx-auto rounded-circle">
              <h4><?php echo esc_html($member['name']) ?></h4>
              <p class="text-muted"><?php echo esc_html($member['occupation']) ?></p>
              <a class="btn btn-dark btn-social mx-2" href="#!"><i
                  class="fab fa-twitter"></i></a>
              <a class="btn btn-dark btn-social mx-2" href="#!"><i
                  class="fab fa-facebook-f"></i></a>
              <a class="btn btn-dark btn-social mx-2" href="#!"><i
                  class="fab fa-linkedin-in"></i></a>
            </div>
          </div>

        <?php endforeach ?>

      </div>

    <?php endif ?>

    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <p class="large text-muted"><?php the_field('team_text') ?></p>
      </div>
    </div>
  </div>
</section>