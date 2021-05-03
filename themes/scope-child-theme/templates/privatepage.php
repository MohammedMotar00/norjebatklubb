<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Scope
 */

/*
Template Name: Private Page
*/

$content_layout = get_post_meta(get_the_ID(), 'themefarmer-page-content-layout', true);
$editing = apply_filters('themefarmer_page_builder_editing', false);
get_header();

?>

<div class="container-full space blog-post-index content-area">
  <div class="container d-flex private-single-page">
    <div class="row justify-content-center mb-3">
      <main id="main"
        class="<?php echo esc_attr(scope_blog_layout()); ?> col-sm-12 col-xs-12 blog-left blog-posts-wrap site-main">
        <div id="blog-content" class="row scp-page">
          <?php
          while (have_posts()) : the_post();

            get_template_part('template-parts/content', 'privatepage');

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
              comments_template();
            endif;

          endwhile; // End of the loop.
          ?>
        </div>
        <div class="clearfix"></div>
      </main><!-- #main -->
    </div>
    <?php get_template_part('template-parts/content', 'sidebar-private'); ?>
  </div>
</div>
<?php
get_footer();