<?php
/*
Template Name: All Info
*/

get_header();
?>

<div class="container-full space blog-post-index content-area">
  <!-- Our Blog Start-->
  <?php $bg_image = get_theme_mod('scope_home_blog_background'); ?>
  <div class="container">
    <div class="section-heading <?php echo (!empty($bg_image)) ? 'heading-light' : ''; ?>">
      <h2 class="section-title"><?php echo esc_html(get_theme_mod('themefarmer_home_blog_heading')); ?></h2>
      <p class="section-description"><?php echo esc_html(get_theme_mod('themefarmer_home_blog_desc')); ?></p>
    </div>
    <div class="allinfo-page row justify-content-center">

      <main class="col-md-8 col-12 blog-left blog-posts-wrap site-main">
        <div class="row blog-gallery scp-posts">
          <?php
          $post_count = absint(get_theme_mod('themefarmer_home_blog_count', 10));
          $args = array('post_type' => 'post');
          $query = new WP_Query($args);
          while ($query->have_posts()) {
            $query->the_post();
            get_template_part('template-parts/content', 'allinfo');
          }
          ?>
        </div>
      </main>
      <?php get_template_part('template-parts/content', 'sidebar-private'); ?>
    </div>
  </div>
</div>
<!-- Our Blog End -->

<?php get_footer(); ?>