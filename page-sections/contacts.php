<section class="page-section" id="contact" style="background-image: url('<?php echo THEME_URI ?>/assets/img/map-image.png'); ">
  <div class=" container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Contact Us</h2>
      <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
    </div>

    <form id="contactForm">
      <div class="row align-items-stretch mb-5">
        <div class="col-md-6">
          <div class="form-group">
            <!-- Name input-->
            <input class="form-control" id="name"
              type="text" placeholder="Your Name *" />
            <div class="invalid-feedback">A name is required.</div>
          </div>
          <div class="form-group">
            <!-- Email address input-->
            <input class="form-control" id="email"
              type="email" placeholder="Your Email *" />
            <div class="invalid-feedback">An email is required.</div>
            <div class="invalid-feedback">Email is not valid.</div>
          </div>
          <div class="form-group mb-md-0">
            <!-- Phone number input-->
            <input class="form-control" id="phone"
              type="tel" placeholder="Your Phone *"
              data-sb-validations="required" />
            <div class="invalid-feedback">A phone number is required.</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group form-group-textarea mb-md-0">
            <!-- Message input-->
            <textarea class="form-control" id="message"
              placeholder="Your Message *"></textarea>
            <div class="invalid-feedback">A message is required.</div>
          </div>
        </div>
      </div>
      <!-- Submit success message-->
      <!---->
      <!-- This is what your users will see when the form-->
      <!-- has successfully submitted-->
      <div class="d-none" id="submitSuccessMessage">
        <div class="text-center text-white mb-3">
          <div class="fw-bolder">Form submission successful!</div>
        </div>
      </div>
      <!-- Submit error message-->
      <!---->
      <!-- This is what your users will see when there is-->
      <!-- an error submitting the form-->
      <div class="d-none" id="submitErrorMessage">
        <div class="text-center text-danger mb-3">Error sending message!</div>
      </div>
      <!-- Submit Button-->
      <div class="text-center">
        <button type="submit" id="submitButton" class="btn btn-primary btn-xl text-uppercase">Send Message</button>
      </div>
    </form>
  </div>
</section>