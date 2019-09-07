<?php
/* Template Name: Work Page Template */
get_header();
?>
<div class="logo">
  <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cc-logo-sm-orange.png" alt="crispy chicken small logo"/></a>
</div>

<section class="page--work-hero-container">
  <video autoplay muted loop id="hero-work-video">
    <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cc-workpage-vid.mp4" type="video/mp4">
  </video>
  <div class="hero-video--overlay"></div>
  <div class="page--hero-textarea">
    <div class="page--title">
      <h1>our<br>work<span>.</span></h1>
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
<section class="page--work-grid-container">
  <div class="page--work-grid">
    <div class="page--client-item">
      <a href="/work/mtv">
        <div class="item-text">
          <img class="client-logo-sm" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/mtv-logo.png" />
        </div>
      </a>
    </div>
    <div class="page--client-item">
      <div class="item-text">
        <img class="client-logo-sm" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/vh1-logo.png" />
      </div>
    </div>
    <div class="page--client-item">
      <div class="item-text">
        <img class="client-logo-sm" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/kevinhart.png" />
      </div>
    </div>
    <div class="page--client-item">
      <div class="item-text">
        <img class="client-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/immortals-logo.png" />
      </div>
    </div>
    <div class="page--client-item">
      <div class="item-text">
        <img class="client-logo-sm" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/jukin-logo.png" />
      </div>
    </div>
    <div class="page--client-item">
      <div class="item-text">
        <img class="client-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/fathom-logo.png" />
      </div>
    </div>
    <div class="page--client-item">
      <div class="item-text">
        <img class="client-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/leatherhead-logo.png" />
      </div>
    </div>
    <div class="page--client-item">
      <div class="item-text">
        <img class="client-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/arielle.png" />
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
