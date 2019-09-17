<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>

<div class="logo">
  <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cc-logo-sm-orange.png" alt="crispy chicken small logo"/></a>
</div>
<section class="page-404-container">
  <h1>404</h1>
  <h2>Oops, page not found!</h2>
  <a href="<?php echo get_site_url(); ?>"><button class="btn-primary">go back home</button></a>
</section>

<?php get_footer(); ?>
