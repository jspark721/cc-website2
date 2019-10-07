<?php

defined('ABSPATH') ?: die;

get_header('wpshopify');

global $post;

$Products = WP_Shopify\Factories\Render\Products\Products_Factory::build();
$DB_Products = WP_Shopify\Factories\DB\Products_Factory::build();

$Products->products([
   'product_id' => $DB_Products->get_product_ids_from_post_ids($post->ID),
   'dropzone_product_buy_button' => '#product_buy_button',
   'dropzone_product_title' => '#product_title',
   'dropzone_product_description' => '#product_description',
   'dropzone_product_pricing' => '#product_pricing',
   'dropzone_product_gallery' => '#product_gallery',
   'hide_wrapper' => true,
   'limit' => 1
]);

?>
<div class="logo">
  <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cc-logo-sm-orange.png" alt="crispy chicken small logo"/></a>
</div>

<section style="height:100px">
</section>

<div class="single-product-container">
  <section class="wps-container">

     <?= do_action('wps_breadcrumbs') ?>

     <div class="wps-product-single row">

        <div class="wps-product-single-gallery col">
           <div id="product_gallery"></div>
        </div>

        <div class="wps-product-single-content col">

           <div id="product_title">
              <?php

              // Renders title server-side for SEO
              $Products->title([
                 'post_id' => $post->ID,
                 'render_from_server' => true
              ]);

              ?>
           </div>

           <div id="product_pricing"></div>

           <div id="product_description">

              <?php

              // Renders description server-side for SEO
              $Products->description([
                 'post_id' => $post->ID,
                 'render_from_server' => true
              ]);

              ?>

           </div>

           <div id="product_buy_button"></div>

        </div>

     </div>

  </section>
</div>
<div class="work-container--main-btn">
  <a href="<?php echo get_site_url(); ?>/merch"><button class="btn-light">back to all products</button></a>
</div>

<?php


get_footer('wpshopify');
