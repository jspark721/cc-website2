<?php
/**
 * Template part for displaying fathom projects in page-client.php
 *
 */

?>

<section class="client-video-container">
  <div class="client-video--grid">
    <div class="client-video--item">
      <div class="client-video--thumbnail thumbnail-bg">
        <video autoplay muted loop class="work-video work-video-horizontal">
          <source src="<?php echo get_site_url(); ?>/wp-content/uploads/fathom-project1.mp4" type="video/mp4">
        </video>
      </div>
      <div class="client-video--textarea">
        <div class="client-video-text">
          <p class="sm-cap"><span>project</span></p>
          <h3>Who'd You Rather</h3>
        </div>
        <div class="client--item-overlay">
          <p>Ideation & Editing</p>
        </div>
      </div>
    </div>
    <div class="client-video--item">
      <div class="client-video--thumbnail thumbnail-bg">
        <video autoplay muted loop class="work-video">
          <source src="<?php echo get_site_url(); ?>/wp-content/uploads/fathom-project2.mp4" type="video/mp4">
        </video>
      </div>
      <div class="client-video--textarea">
        <div class="client-video-text">
          <p class="sm-cap"><span>project</span></p>
          <h3>Villians Meme</h3>
        </div>
        <div class="client--item-overlay">
          <p>Ideation & Editing</p>
        </div>
      </div>
    </div>
    <div class="client-video--item">
      <div class="client-video--thumbnail thumbnail-bg">
        <video autoplay muted loop class="work-video work-video-horizontal">
          <source src="<?php echo get_site_url(); ?>/wp-content/uploads/fathom-project3.mp4" type="video/mp4">
        </video>
      </div>
      <div class="client-video--textarea">
        <div class="client-video-text">
          <p class="sm-cap"><span>project</span></p>
          <h3>Bat Facts</h3>
        </div>
        <div class="client--item-overlay">
          <p>Ideation & Editing</p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="work-container--main-btn">
  <a href="<?php echo get_site_url(); ?>/work"><button class="btn-light">back to all clients</button></a>
</div>
