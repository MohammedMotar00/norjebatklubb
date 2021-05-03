<?php
/*
Template Name: Private Pages
*/

get_header();
?>

<div class="container">
  <?php
  $private_page_args = array(
    'order' => 'ASC',
    'post_type' => 'page',
    'post_status' => array('published', 'private'),
    'post__not_in' => array('221', '263')
  );

  $private_pages = new WP_Query($private_page_args);
  ?>

  <div class="container-full space blog-post-index content-area">
    <div class="private-pages row justify-content-center">
      <main class="col-md-8 col-12 blog-left blog-posts-wrap site-main">
        <div class="column blog-gallery scp-posts">
          <?php
          if ($private_pages->have_posts()) {
            while ($private_pages->have_posts()) {
              $private_pages->the_post();
              get_template_part('template-parts/content', 'privatepages');
            }
            wp_reset_postdata();
          }
          ?>
        </div>
      </main>
      <?php get_template_part('template-parts/content', 'sidebar-private'); ?>
    </div>
  </div>
  <?php get_footer(); ?>