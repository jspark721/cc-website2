<?php
/* Template Name: Merch Template */
get_header();
?>

<div class="logo">
  <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cc-logo-sm-orange.png" alt="crispy chicken small logo"/></a>
</div>

<section class="page--client-hero-container2">
  <div class="page--hero-textarea">
    <div class="page--title">
      <p class="page--title-sm"><span>shop</span></p>
      <h1><?php echo get_the_title(); ?><span>.</span></h1>
    </div>
  </div>
</section>

<section class="page--merch-container">

  <?php
    // Start the loop
    if(have_posts()) {
      while(have_posts()) {
        the_post();
        the_content();
      }
    }
  ?>
</section>


<section class="about--cta-container">
  <h1>get in touch!</h1>
  <a href="<?php echo get_site_url(); ?>/contact"><button class="btn-white">contact</button></a>
</section>

<?php
get_footer();
