<?php

if( ! function_exists ('crispychicken_setup')) :

    function crispychicken_setup() {
      // let WordPress handle the title tags
      add_theme_support( 'title-tag' );
      add_theme_support( 'post-thumbnails' );
      add_theme_support( 'custom-header', array(
        'video' => true
      ));
    }

endif;
add_action('after_setup_theme', 'crispychicken_setup');

/* register menus */

function register_crispychicken_menus() {
    register_nav_menus(
      array(
        'primary' => __('Primary Menu')
      )
    );
}
add_action('init', 'register_crispychicken_menus');

/* add stylesheets */

function crispychicken_scripts() {
    // enqueue the main stylesheet
    wp_enqueue_style('crispychicken_styles', get_stylesheet_uri());
    // enqueue google fonts Lora & Garamound
    wp_enqueue_style('crispychicken_google_fonts', 'https://fonts.googleapis.com/css?family=Oswald&display=swap');
}

add_action('wp_enqueue_scripts', 'crispychicken_scripts');

function wpb_adding_scripts() {
  wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', array('jquery'),'1.1', true);
  wp_enqueue_script('customjs');
}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );
