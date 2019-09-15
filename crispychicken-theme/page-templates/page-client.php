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
  } else {
    echo 'not a client page';
  }

endwhile; // End of the loop.
?>



<?php get_footer(); ?>