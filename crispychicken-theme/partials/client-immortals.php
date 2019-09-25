<?php
/**
 * Template part for displaying immortals projects in page-client.php
 *
 */

?>

<section class="client-video-container">
  <div class="client-video--grid">
    <div class="client-video--item">
      <div class="client-video--thumbnail thumbnail-bg">
        <video autoplay muted loop class="work-video work-video-horizontal">
          <source src="<?php echo get_site_url(); ?>/wp-content/uploads/immortals-project1.mp4" type="video/mp4">
        </video>
      </div>
      <div class="client-video--textarea">
        <div class="client-video-text">
          <p class="sm-cap"><span>project</span></p>
          <h3>Splash Tank Video</h3>
        </div>
        <div class="client--item-overlay">
          <p>Ideation & Strategy</p>
        </div>
      </div>
    </div>
    <div class="client-video--item">
      <div class="client-video--thumbnail thumbnail-bg">
        <img class="work-video" src="<?php echo get_site_url(); ?>/wp-content/uploads/immortals-project2.jpg">
      </div>
      <div class="client-video--textarea">
        <div class="client-video-text">
          <p class="sm-cap"><span>project</span></p>
          <h3>Duos Partner Graphic</h3>
        </div>
        <div class="client--item-overlay">
          <p>Ideation & Audience Development</p>
        </div>
      </div>
    </div>
    <div class="client-video--item">
      <div class="client-video--thumbnail thumbnail-bg">
        <video autoplay muted loop class="work-video">
          <source src="<?php echo get_site_url(); ?>/wp-content/uploads/immortals-project3.mp4" type="video/mp4">
        </video>
      </div>
      <div class="client-video--textarea">
        <div class="client-video-text">
          <p class="sm-cap"><span>project</span></p>
          <h3>Paid Ad Campaign</h3>
        </div>
        <div class="client--item-overlay">
          <p>Editing & Paid Ad Management</p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="work-container--main-btn">
  <a href="<?php echo get_site_url(); ?>/work"><button class="btn-light">back to all clients</button></a>
</div>

<section class="about--cta-container">
  <h1>get in touch!</h1>
  <button class="btn-white">contact us</button>
</section>
