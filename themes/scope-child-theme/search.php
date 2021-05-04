<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Scope
 */

get_header(); ?>
<div class="container-full space blog-post-index content-area">
  <div class="container">
    <div class="row justify-content-center">
      <main id="main" class="<?php echo esc_attr(scope_blog_layout()); ?> col-12 blog-left blog-posts-wrap site-main">
        <?php if (have_posts()) : ?>
        <header class="page-header">
          <h1 class="page-title"><?php
                                    /* translators: %s: search query. */
                                    printf(esc_html__('Sökresultat för: %s', 'scope'), '<span>' . get_search_query() . '</span>');
                                    ?></h1>
        </header><!-- .page-header -->
        <div id="blog-content" class="row blog-gallery scp-posts">
          <?php
            while (have_posts()) : the_post();
              get_template_part('template-parts/content', 'search');
            endwhile;
            ?>
        </div>
        <div class="clearfix"></div>
        <div class="scp-pagination">
          <?php
            $args = array(
              'prev_text' => __('Tidigare', 'textdomain'),
              'next_text' => __('Nästa', 'textdomain'),
            );
            the_posts_pagination($args);
            ?>
        </div>
        <?php
        else :
          get_template_part('template-parts/content', 'none');
        endif; ?>
      </main><!-- #main -->
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php
get_footer();