<?php
/* Template Name: Work Template */
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
      <a href="<?php echo get_site_url(); ?>/work/mtv">
        <div class="item-text">
          <img class="client-logo-sm" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/mtv-logo.png" />
        </div>
      </a>
    </div>
    <div class="page--client-item">
      <a href="<?php echo get_site_url(); ?>/work/vh1">
        <div class="item-text">
          <img class="client-logo-sm" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/vh1-logo.png" />
        </div>
      </a>
    </div>
    <div class="page--client-item">
      <a href="<?php echo get_site_url(); ?>/work/lol-network">
      <div class="item-text">
        <img class="client-logo-sm" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/kevinhart.png" />
      </div>
    </a>
    </div>
    <div class="page--client-item">
      <a href="<?php echo get_site_url(); ?>/work/immortals">
        <div class="item-text">
          <img class="client-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/immortals-logo.png" />
        </div>
      </a>
    </div>
    <div class="page--client-item">
      <a href="<?php echo get_site_url(); ?>/work/jukin">
        <div class="item-text">
          <img class="client-logo-sm" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/jukin-logo.png" />
        </div>
      </a>
    </div>
    <div class="page--client-item">
      <a href="<?php echo get_site_url(); ?>/work/fathom">
        <div class="item-text">
          <img class="client-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/fathom-logo.png" />
        </div>
      </a>
    </div>
    <div class="page--client-item">
      <a href="<?php echo get_site_url(); ?>/work/leatherhead">
        <div class="item-text">
          <img class="client-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/leatherhead-logo.png" />
        </div>
      </a>
    </div>
    <div class="page--client-item">
      <a href="<?php echo get_site_url(); ?>/work/arielle-vandenberg">
        <div class="item-text">
          <img class="client-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/arielle.png" />
        </div>
      </a>
    </div>
  </div>
</section>

<section class="about--cta-container">
  <h1>get in touch!</h1>
  <a href="<?php echo get_site_url(); ?>/contact"><button class="btn-white">contact</button></a>
</section>

<?php get_footer(); ?>
