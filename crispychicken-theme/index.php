<?php
/**
 * The blog template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage crispychicken
 * @since 1.0.0
 */

get_header();
?>

<div class="logo">
  <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cc-logo-sm-orange.png" alt="crispy chicken small logo"/></a>
</div>

<section class="page--client-hero-container2">
  <div class="page--hero-textarea">
    <div class="page--title">
      <p class="page--title-sm"><span>client</span></p>
      <h1><?php echo get_the_title(); ?><span>.</span></h1>
    </div>
  </div>
</section>

<?php
  // Start the loop
  if(have_posts()) {
    while(have_posts()) {
      the_post();
      the_content();
    }
  }
?>
<div class="work-container--main-btn">
  <a href="<?php echo get_site_url(); ?>/work"><button class="btn-light">back to all clients</button></a>
</div>

<section class="about--cta-container">
  <h1>get in touch!</h1>
  <a href="<?php echo get_site_url(); ?>/contact"><button class="btn-white">contact</button></a>
</section>

<?php
get_footer();
