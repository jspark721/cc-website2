<?php
/* main header template*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Crispy Chicken - A Full Service Social Media Agency</title>
  <meta name="author" content="Julie Loves Co.">
  <meta name="description" content="Crispy Chicken Website">
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
  <header>
    <div id="page-load"></div>
    <div id="page-border-top"></div>
    <div id="page-border-right"></div>
    <div id="page-border-bottom"></div>
    <div id="page-border-left"></div>
    <div id="nav--main" class="nav--open">
      <div class="nav--main-content">
        <div class="logo">
          <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cc-logo-sm.png" alt="crispy chicken small logo"/></a>
        </div>
        <ul class="nav--main-list">
          <!-- <?php
            wp_nav_menu( $arg = array (
              'theme_location' => 'primary'
            ));
           ?> -->
          <li><span class="nav--number">01</span><a href="<?php echo get_site_url(); ?>/about">about</a></li>
          <li><span class="nav--number">02</span><a href="<?php echo get_site_url(); ?>/work">our work</a></li>
          <li class="nav--special">
            <span class="nav--number">03</span>services <i class="fas fa-angle-down icon-sm"></i>
            <ul id="services--dropdown">
              <li>social strategy</li>
              <li>content creation</li>
              <li>audience development</li>
              <li>paid media</li>
              <li>other</li>
            </ul>
          </li>
          <li><span class="nav--number">04</span><a>merch</a></li>
          <li><span class="nav--number">05</span><a>contact</a></li>

        </ul>
      </div>
    </div>
    <nav class="navbox">
      <div id="menu--box" onclick="openMenu()">
        <div class="menu--icon"></div>
        <div class="menu--icon"></div>
        <div class="menu--icon"></div>
        <p>menu</p>
      </div>
      <div id="menu--close" onclick="closeMenu()">
        <div class="menu--line"></div>
        <div class="menu--line2"></div>
        <p>close</p>
      </div>
    </nav>
      <!-- <div class="nav--open-menu">
        ?php
          wp_nav_menu( $arg = array (
            'theme_location' => 'primary'
          ));
         ?>
       </div> -->

  </header>
