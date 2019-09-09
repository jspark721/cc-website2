<?php
/* Template Name: Client Page Template */
get_header();
?>

<div class="logo">
  <a href="/"><img src="../../assets/cc-logo-sm-orange.png" alt="crispy chicken small logo"/></a>
</div>
<section class="page--client-hero-container2">
  <div class="page--hero-textarea">
    <div class="page--title">
      <p class="page--title-sm"><span>client</span></p>
      <h1>MTV<?php echo get_the_title(); ?><span>.</span></h1>
    </div>
  </div>
</section>

<section class="page--client-desc2">
  <div class="client--desc-iphone">
    <video autoplay loop id="iphone-video">
      <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/iphone.mp4" type="video/mp4">
    </video>
    <div class="iphone-overlay">
      <button onclick="pauseIphone()" id="pauseBtn">
        <i class='fas fa-pause'></i>
      </button>
    </div>
  </div>
  <div class="client--desc-textarea2">
    <p class="page--title-sm"><span>service</span></p>
    <h4>Content Creation</h4>
    <div class="client--line"></div>
    <p class="page--title-sm"><span>projects</span></p>
    <h4>Wild N Out, Jersey Shore, Floribama Shore, The Challenge, Ridiculousness, Fear Factor, Lindsay Lohan’s Beach Club</h4>
    <div class="client--line"></div>
    <p class="page--title-sm"><span>description</span></p>
    <h4>With a full linear slate of content, Crispy Chicken was tasked to repurpose MTV show clips for a social media audience. Everything from creating 60 second graphic-filled videos, long-form compilations for YouTube to meme copy ideation, we use creative edits to give pre-existing content new life.</h4>
  </div>

</section>
<section class="client-video-container">
  <div class="client-video--grid">
    <div class="client-video--item">
      <div class="client-video--thumbnail thumbnail-bg">
        <video autoplay muted loop class="work-video">
          <!-- <source src="../../assets/work-mtvvid.mp4" type="video/mp4"> -->
        </video>
      </div>
      <div class="client-video--textarea">
        <div class="client-video-text">
          <p class="sm-cap"><span>project</span></p>
          <h3>Jersey Shore White Ass Guidos</h3>
        </div>
        <div class="client--item-overlay">
          <p>Ideation & Editing</p>
        </div>
      </div>
    </div>
    <div class="client-video--item">
      <div class="client-video--thumbnail thumbnail-bg">
        <video autoplay muted loop class="work-video">
          <!-- <source src="../../assets/work-immortalsvid.mp4" type="video/mp4"> -->
        </video>
      </div>
      <div class="client-video--textarea">
        <div class="client-video-text">
          <p class="sm-cap"><span>project</span></p>
          <h3>The Challenge Spinning Ball</h3>
        </div>
        <div class="client--item-overlay">
          <p>Motion GFX & Editing</p>
        </div>
      </div>
    </div>
    <div class="client-video--item">
      <div class="client-video--thumbnail thumbnail-bg">
        <video autoplay muted loop class="work-video">
          <!-- <source src="../../assets/work-fathomvid.mp4" type="video/mp4"> -->
        </video>
      </div>
      <div class="client-video--textarea">
        <div class="client-video-text">
          <p class="sm-cap"><span>project</span></p>
          <h3>Wild 'N Out TikTok</h3>
        </div>
        <div class="client--item-overlay">
          <p>Ideation & Editing</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
