<?php
/* Template Name: About Template */
get_header();
?>
<div class="logo">
  <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cc-logo-sm-orange.png" alt="crispy chicken small logo"/></a>
</div>

<section class="page--hero-container">
  <div id="about-text" class="page--hero-textarea">
    <p class="page--title-sm"><span><?php echo get_the_title(); ?></span></p>
    <div class="page--title">
      <h1>we are <br>crispy chicken<span>.</span></h1>
      <p>Don’t view us as an agency. We’re an extension of <em>your</em> team.</p>
    </div>
  </div>
</section>
<section class="page--about-container">
  <div class="page--about-text">
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

<section class="page--about-grid-container">
  <div class="about--grid">
    <div class="about--grid-item1"></div>
    <div class="about--grid-item2">
      <p class="page--title-sm"><span>Chief Creative Officer</span></p>
      <h3>Mina Park</h3>
      <p class="grid-item--text"><span>Previously:</span><br>
      Digital Media Manager - Los Angeles Rams<br>
      Digital Content Producer - FOX Sports<br>
      Digital Content Producer - MLB</p>
    </div>
    <div class="about--grid-item3">
      <p class="page--title-sm"><span>Chief Development Officer</span></p>
      <h3>Ricardo Marquez</h3>
      <p class="grid-item--text"><span>Previously:</span><br>
      Digital Consultant - LOL Network<br>
      Director of Audience Development - Jukin Media<br>
      Digital Content Producer - MLB</p>
    </div>
    <div class="about--grid-item4"></div>
  </div>
</section>


<section class="about--cta-container">
  <h1>get in touch!</h1>
  <a href="<?php echo get_site_url(); ?>/contact"><button class="btn-white">contact</button></a>
</section>

<?php get_footer(); ?>
