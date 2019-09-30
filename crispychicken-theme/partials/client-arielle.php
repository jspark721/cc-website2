<?php
/**
 * Template part for displaying arielle projects in page-client.php
 *
 */

?>

<?php
  $my_postid = 247;
  $content = get_post($my_postid)->post_content;
  echo $content;
 ?>

<div class="work-container--main-btn">
  <a href="<?php echo get_site_url(); ?>/work"><button class="btn-light">back to all clients</button></a>
</div>
