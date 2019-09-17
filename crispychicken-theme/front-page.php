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
    <img id="logo-main" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cc-logo-main-o.png" alt="crispy chicken main logo" />
  </div>
  <a class="swipe-up" href="#work">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/SwipeUp.gif" alt="swipe up sticker" />
  </a>
  <!-- Use a button to pause/play the video with JavaScript -->
  <button id="video-btn" onclick="playPause()">pause <i class="fas fa-pause"></i></button>
</section>

<!-- <section class="break-container"></section> -->
<div id="work"></a>
<section class="work-container">
  <div class="work-container--title">
    <h1>a taste of our work</h1>
  </div>
  <div class="work-video--grid">
    <div class="work-video--item">
      <div class="work-video--thumbnail">
        <video autoplay muted loop class="work-video">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/work-mtvvid.mp4" type="video/mp4">
        </video>
      </div>
      <div class="work-video--textarea">
        <p class="sm-cap"><span>MTV</span></p>
        <h3>Wild 'N Out Content Creation</h3>
        <a href="<?php echo get_site_url(); ?>/work/mtv"><button class="work-video--btn">details</button></a>
      </div>
    </div>
    <div class="work-video--item">
      <div class="work-video--thumbnail">
        <video autoplay muted loop class="work-video">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/work-immortalsvid.mp4" type="video/mp4">
        </video>
      </div>
      <div class="work-video--textarea">
        <p class="sm-cap"><span>Immortals</span></p>
        <h3>LA Valiant Social Event Promotion</h3>
        <a href="<?php echo get_site_url(); ?>/work/immortals"><button class="work-video--btn">details</button></a>
      </div>
    </div>
    <div class="work-video--item">
      <div class="work-video--thumbnail">
        <video autoplay muted loop class="work-video">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/work-fathomvid.mp4" type="video/mp4">
        </video>
      </div>
      <div class="work-video--textarea">
        <p class="sm-cap"><span>Fathom Events</span></p>
        <h3>Batman Content Creation</h3>
        <a href="<?php echo get_site_url(); ?>/work/fathom-events"><button class="work-video--btn">details</button></a>
      </div>
    </div>
  </div>
  <div class="work-container--main-btn">
    <button class="btn-white">view all work</button>
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
      <a href="<?php echo get_site_url(); ?>/service/audience-development">
        <div class="item-text">
          <h3>audience <br>development</h3>
        </div>
        <div class="services--item-overlay overlay-bg3">
          <p>Cultivate an engaged community</p>
        </div>
      </a>
    </div>
    <div class="services--item item4">
      <a href="<?php echo get_site_url(); ?>/service/paid-media">
        <div class="item-text">
          <h3>paid media</h3>
        </div>
        <div class="services--item-overlay overlay-bg4">
          <p>Target your consumer</p>
        </div>
      </a>
    </div>
    <div class="services--item item5">
      <div class="item-text">
        <h3>other</h3>
      </div>
      <div class="services--item-overlay  overlay-bg5">
        <p>Social Management, Influencer Marketing, Branded Integrations, Digital Series Development, Linear/AVOD Programming</p>
      </div>
    </div>
  </div>
</section>

<section class="about-container">
  <img class="logo-bg" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cc-logo-sm.png" />
  <div class="about--textarea">
    <h1>why <br>crispy chicken<span>?</span></h1>
    <div class="hero-title-line"></div>
    <h2>Social media is all we do. It’s never an after-thought.</h2>
    <br>
    <h2>We’ve built online communities from the ground up, produced content engaged by billions, while creating new revenue streams in the process.</h2>
    <br>
    <h2>We pride ourselves on being an extension of your team by providing incredible value on a fair budget.</h2>
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
