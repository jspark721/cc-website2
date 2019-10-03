<?php
/* Template for Work Index Page */

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
      <h1><?php echo get_the_title( $post = 312 ); ?><span>.</span></h1>
      <?php echo get_post_field('post_content', get_post(16)); ?>
    </div>
  </div>
</section>
<section class="page--work-grid-container">
  <div class="page--work-grid">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="page--client-item">
        <a href="<?php the_permalink(); ?>">
          <?php if (has_post_thumbnail()) : ?>
            <div class="item-text">
              <?php the_post_thumbnail('full', array('class' => 'client-logo-sm')); ?>
            </div>
          <?php endif; ?>
        </a>
      </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<section class="about--cta-container">
  <h1>get in touch!</h1>
  <a href="<?php echo get_site_url(); ?>/contact"><button class="btn-white">contact</button></a>
</section>

<?php get_footer(); ?>
