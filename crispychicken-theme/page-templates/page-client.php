<?php
/* Template Name: Client Template */
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

<section class="page--client-desc2">
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
</section>

<!-- the 3 client grid project area -->

<?php
while ( have_posts() ) :
  the_post();
  if ( is_page('mtv') ) {
    get_template_part( 'partials/client-mtv');
  } elseif ( is_page('vh1')) {
    get_template_part( 'partials/client-vh1');
  } elseif ( is_page('lol-network')) {
    get_template_part( 'partials/client-lol');
  } elseif ( is_page('immortals')) {
    get_template_part( 'partials/client-immortals');
  } elseif ( is_page('fathom-events')) {
    get_template_part( 'partials/client-fathom');
  } elseif ( is_page('jukin-media')) {
    get_template_part( 'partials/client-jukin');
  } elseif ( is_page('leatherhead')) {
    get_template_part( 'partials/client-leatherhead');
  } elseif ( is_page('arielle-vandenberg')) {
    get_template_part( 'partials/client-arielle');
  } else {
    echo '<div class="work-container--main-btn">
      <a href="https://crispychicken.co/work"><button class="btn-light">back to all clients</button></a></div>';
  }

endwhile; // End of the loop.
?>

<section class="about--cta-container">
  <h1>get in touch!</h1>
  <a href="<?php echo get_site_url(); ?>/contact"><button class="btn-white">contact</button></a>
</section>

<?php get_footer(); ?>
