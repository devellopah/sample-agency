<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sample_Agency
 */

get_header();
?>

<main id="primary" class="site-main">
  <?php
  echo get_template_part('page-sections/services');
  echo get_template_part('page-sections/portfolio');
  echo get_template_part('page-sections/about');
  echo get_template_part('page-sections/team');
  echo get_template_part('page-sections/clients');
  echo get_template_part('page-sections/contacts');
  ?>
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
