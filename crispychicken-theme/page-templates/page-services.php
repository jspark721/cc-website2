<?php
/* Template Name: Services Template */
get_header();
?>

<div class="logo">
  <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cc-logo-sm-orange.png" alt="crispy chicken small logo"/></a>
</div>

<img class="services--hero-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/<?php echo get_the_title(); ?>.jpg" />
<section class="page--services-container">
  <div class="page--services-textarea">
    <p class="page--title-sm"><span>services</span></p>
    <div class="page--title">
      <h1><?php echo get_the_title(); ?><span>.</span></h1>
      <div class="services--line"></div>
      <?php
        // Start the loop
        if(have_posts()) {
          while(have_posts()) {
            the_post();
            the_content();
          }
        }
      ?>
    </div>
  </div>
</section>

<?php
while ( have_posts() ) :
  the_post();
  if ( is_page('audience-development') ) {
    get_template_part( 'partials/service-audience');
  } elseif ( is_page('content-creation')) {
    get_template_part( 'partials/service-content');
  } elseif ( is_page('social-strategy')) {
    get_template_part( 'partials/service-social');
  } elseif ( is_page('paid-media')) {
    get_template_part( 'partials/service-media');
  } else {
    echo '<div class="work-container--main-btn">
      <a href="<?php echo get_site_url(); ?>/work"><button class="btn-light">back to all work</button></a></div>';
  }

endwhile; // End of the loop.
?>

<section class="about--cta-container">
  <h1>get in touch!</h1>
  <a href="<?php echo get_site_url(); ?>/contact"><button class="btn-white">contact</button></a>
</section>


<?php get_footer(); ?>
