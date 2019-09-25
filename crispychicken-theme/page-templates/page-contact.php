
<?php
/* Template Name: Contact Template */
get_header();
?>

<div class="logo">
  <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cc-logo-sm-orange.png" alt="crispy chicken small logo"/></a>
</div>

<section class="page--contact-container">
  <div class="page--contact-box">
    <div class="page--title">
      <p class="page--title-sm"><span>contact</span></p>
      <h1>Let's Chat<span>!</span></h1>
      <div class="client--line"></div>
      <p>6060 Center Drive, 10th Floor<br>Los Angeles, CA 90045</p>
    </div>
    <div class="page--contact-form">
      <h3>Tell us about your upcoming project!<br>
      <span>Or just say hello!</span></h3>
      <?php
        // Start the loop
        if(have_posts()) {
          while(have_posts()) {
            the_post();
            the_content();
          }
        }
      ?>
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.6445110088844!2d-118.39307638478704!3d33.97597548062677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b74c92e7a8f7%3A0xc2b10b9cfe89947!2s6060%20Center%20Dr%2010th%20Floor%2C%20Los%20Angeles%2C%20CA%2090045!5e0!3m2!1sen!2sus!4v1568067478394!5m2!1sen!2sus" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </div>
</section>


<?php get_footer(); ?>
