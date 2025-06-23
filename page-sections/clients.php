<div class="py-5">
  <div class="container">
    <div class="row align-items-center">

      <?php foreach (get_field('clients_list') as $client) : ?>

        <div class="col-md-3 col-sm-6 my-3">
          <a href="<?php echo esc_url($client['url']) ?>">
            <img src="<?php echo esc_url($client['logo']['url']) ?>" alt="<?php echo esc_attr($client['logo']['alt']) ?>" class="img-fluid img-brand d-block mx-auto">
          </a>
        </div>

      <?php endforeach ?>

    </div>
  </div>
</div>