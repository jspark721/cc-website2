
<?php
/* Template Name: Contact Template */
get_header();
?>

<div class="logo">
  <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cc-logo-sm-orange.png" alt="crispy chicken small logo"/></a>
</div>

<section class="page--contact-container">
  <div class="page--contact-textarea">
    <div class="page--title">
      <p class="page--title-sm"><span>contact</span></p>
      <h1>get in<br>touch<span>.</span></h1>
      <p>6060 Center Drive, 10th Floor<br>Los Angeles, CA 90045</p>
    </div>
  </div>
  <div class="page--contact-form">
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



<?php get_footer(); ?>
