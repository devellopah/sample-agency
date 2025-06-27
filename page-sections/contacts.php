<section class="page-section" id="contact" style="background-image: url('<?php the_field('contacts_bg_image') ?>">
  <div class=" container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase"><?php the_field('contacts_heading') ?></h2>
      <h3 class="section-subheading text-muted"><?php the_field('contacts_subheading') ?></h3>
    </div>

    <form action="#" id="contactForm" class="js-form" data-action="application_form" novalidate>
      <div class="row align-items-stretch mb-5">
        <div class="col-md-6">
          <div class="form-group relative js-field">
            <input class="form-control" name="name" type="text" placeholder="<?php echo esc_html(get_field('form_name_placeholder', 'option')) ?>" required />
            <div class="invalid-feedback js-field-error"><?php echo esc_html(get_field('form_name_error', 'option')) ?></div>
          </div>
          <div class="form-group relative js-field">
            <input class="form-control" name="email" type="email" placeholder="<?php echo esc_html(get_field('form_email_placeholder', 'option')) ?>" required />
            <div class="invalid-feedback js-field-error"><?php echo esc_html(get_field('form_tel_error', 'option')) ?></div>
          </div>
          <div class="form-group mb-md-0 relative js-field">
            <input class="form-control" name="tel" type="tel" placeholder="<?php echo esc_html(get_field('form_tel_placeholder', 'option')) ?>" required />
            <div class="invalid-feedback js-field-error"><?php echo esc_html(get_field('form_tel_error', 'option')) ?></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group form-group-textarea mb-md-0 relative js-field">
            <textarea class="form-control" name="message" placeholder="<?php echo esc_html(get_field('form_message_placeholder', 'option')) ?>" required></textarea>
            <div class="invalid-feedback js-field-error"><?php echo esc_html(get_field('form_message_error', 'option')) ?></div>
          </div>
        </div>
      </div>

      <div style="display: none;" data-submit="success">
        <div class="text-center text-white mb-3">
          <div class="fw-bolder"><?php echo esc_html(get_field('form_submission_success', 'option')['heading']) ?></div>
        </div>
      </div>

      <div style="display: none;" data-submit="fail">
        <div class="text-center text-danger mb-3"><?php echo esc_html(get_field('form_submission_fail', 'option')['heading']) ?></div>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-xl text-uppercase"><?php echo esc_html(get_field('form_submit_text', 'option')) ?></button>
      </div>
    </form>
  </div>
</section>