<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Scope
 */
get_header(); ?>
<div class="container-full space blog-post-index content-area">
  <div class="container">
    <div class="row justify-content-center">
      <main id="main"
        class="<?php echo esc_attr(scope_blog_layout()); ?> col-sm-12 col-xs-12 blog-left blog-posts-wrap site-main">
        <div id="blog-content" class="row scp-singuler">
          <?php
          while (have_posts()) : the_post();

            get_template_part('template-parts/content', 'single');

          endwhile; // End of the loop.
          ?>
        </div>
        <div class="clearfix"></div>
      </main><!-- #main -->
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<div class="container text-left">
  <?php
  if (get_post_status(get_the_ID()) !== "private") get_template_part("template-parts/content", "share");
  ?>
</div>
<?php
get_footer();