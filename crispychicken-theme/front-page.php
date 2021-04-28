<?php get_header();
/*main homepage template*/
?>

<section class="hero-container">
  <!-- video background -->
  <video autoplay muted loop id="hero-video">
    <source src="<?php echo the_header_video_url() ?>" type="video/mp4">
  </video>
  <div class="hero-video--overlay"></div>
  <div id="hero" class="hero--textarea">
    <img id="logo-main" src="/wp-content/uploads/cc-logo-stacked-o.png" alt="crispy chicken logo" />
    <img id="logo-mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cc-logo-mobile-o.png" alt="crispy chicken mobile logo" />
  </div>
  <a class="swipe-up" href="#work">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SwipeUp.gif" alt="swipe up sticker" />
  </a>
  <!-- Use a button to pause/play the video with JavaScript -->
  <button id="video-btn" onclick="playPause()">pause <i class="fas fa-pause"></i></button>
    <div class="fixed-contact">
      <div class="blaze-logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/blaze-logo.png" />
      </div>
      <a href="/contact"><div id="contact-btn">contact us!</div>
      <div class="contact-btn-triangle"></div>
      </a>
    </div>
</section>

<!-- <section class="break-container"></section> -->
<div id="work"></a>
<section class="work-container">
  <div class="work-container--title">
    <h1>a taste of our work</h1>
  </div>
  <div class="work-video--grid">
    <a href="<?php echo get_site_url(); ?>/vh1">
      <div class="work-video--item">
        <div class="work-video--thumbnail">
          <video autoplay muted loop class="work-video-full-height">
            <source src="/wp-content/uploads/CC_Homepage-VH1.mp4" type="video/mp4">
          </video>
        </div>
        <div class="work-video--textarea">
          <p class="sm-cap"><span>VH1</span></p>
          <h3>Content Creation</h3>
          <button class="work-video--btn">details</button>
        </div>
      </div>
    </a>

    <a href="<?php echo get_site_url(); ?>/tiny-meat-gang">
      <div class="work-video--item">
        <div class="work-video--thumbnail">
          <video autoplay muted loop class="work-video-full-height">
            <source src="/wp-content/uploads/CC_Homepage_TMG2.mp4" type="video/mp4">
          </video>
        </div>
        <div class="work-video--textarea">
          <p class="sm-cap"><span>Tiny Meat Gang</span></p>
          <h3>Social Management</h3>
          <button class="work-video--btn">details</button>
        </div>
      </div>
    </a>
	<a href="<?php echo get_site_url(); ?>/cameo">
      <div class="work-video--item">
        <div class="work-video--thumbnail">
          <video autoplay muted loop class="work-video">
            <source src="/wp-content/uploads/CC_Homepage_Cameo.mp4" type="video/mp4">
          </video>
        </div>
        <div class="work-video--textarea">
          <p class="sm-cap"><span>Cameo</span></p>
          <h3>Paid Media Ads</h3>
          <button class="work-video--btn">details</button>
        </div>
      </div>
    </a>
  </div>
  <div class="work-container--main-btn">
    <a class="a-margin-top" href="<?php echo get_site_url(); ?>/work"><button class="btn-white">view all work</button></a>
  </div>
</section>

<section class="services-container">
  <div class="services--header">
    <h1>what's on the menu</h1>
    <h2>An <span>overview</span> of our services<span>:</span></h2>
  </div>
  <div class="services--grid">
    <div class="services--item item1">
      <a href="<?php echo get_site_url(); ?>/service/social-strategy">
        <div class="item-text">
          <h3>social <br>strategy</h3>
        </div>
        <div class="services--item-overlay overlay-bg1">
          <p>Consult on actionable insights and best practices</p>
        </div>
      </a>
    </div>
    <div class="services--item item2">
      <a href="<?php echo get_site_url(); ?>/service/content-creation">
        <div class="item-text">
          <h3>content <br>creation</h3>
        </div>
        <div class="services--item-overlay overlay-bg2">
          <p>Produce and edit videos and graphics</p>
        </div>
      </a>
    </div>
    <div class="services--item item3">
      <a href="<?php echo get_site_url(); ?>/service/social-management">
        <div class="item-text">
          <h3>social <br>management</h3>
        </div>
        <div class="services--item-overlay overlay-bg3">
          <p>Cultivate an engaged community</p>
        </div>
      </a>
    </div>
    <div class="services--item item4">
      <a href="<?php echo get_site_url(); ?>/contact">
        <div class="item-text">
          <h3>other</h3>
        </div>
        <div class="services--item-overlay overlay-bg4">
          <p>Paid Media, Branded Integrations, <br>Digital Series Development & More</p>
        </div>
      </a>
    </div>
  </div>
</section>

<section class="about-container">
  <img class="logo-bg" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cc-logo-sm.png" />
  <div class="about--textarea">
    <h1>why <br>crispy chicken<span>?</span></h1>
    <div class="hero-title-line"></div>
    <?php echo get_post_field('post_content', 310); ?>
    <div class="hero-title-line"></div>
    <h3 class="about--bigtitle">ALL WE DO IS SOCIAL<span>.</span></h3>
  </div>
  <div class="about--bg"></div>
</section>


<section class="contact-container">
  <div class="overlay"></div>
  <div class="contact--text">
    <h1>Let's start cookin<span>'</span></h1><br>
    <a href="<?php echo get_site_url(); ?>/contact"><button class="btn-primary">get in touch</button></a>
  </div>
</section>

<?php get_footer(); ?>
