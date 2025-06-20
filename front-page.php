<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sample_Agency
 */

get_header();
mw_log(get_fields());
?>

<main id="primary" class="site-main">
  <?php
  echo get_template_part('page-sections/services');
  echo get_template_part('page-sections/portfolio');
  ?>
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
