<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Scope
 */

?>
<article class="w-100" id="post-<?php the_ID(); ?>" <?php post_class("col-12 scp-post"); ?>>
  <div class="post-content">
    <?php if ('post' === get_post_type()) : ?>
    <div class="entry-meta">
      <?php scope_posted_on(); ?>
    </div><!-- .entry-meta -->
    <?php endif; ?>
    <div class="entry-content">
      <?php
      the_content();
      wp_link_pages(array(
        'before' => '<div class="page-links">' . esc_html__('Pages:', 'scope'),
        'after'  => '</div>',
      ));
      ?>
      <div class="clearfix"></div>
    </div><!-- .entry-content -->
    <div class="clearfix"></div>
  </div>
</article>