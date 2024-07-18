<?php
/**
 * Template Name: Landing Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ninesquares
 */

get_header('landing');
?>

  <main id="primary" class="site-main">

      <?php the_content(); ?>

  </main>

<?php
get_footer('landing');
