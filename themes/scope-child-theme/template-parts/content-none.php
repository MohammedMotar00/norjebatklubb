<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Scope
 */

?>

<section class="no-results not-found">
  <header class="page-header">
    <h1 class="page-title"><?php esc_html_e('Inget hittat', 'scope'); ?></h1>
  </header><!-- .page-header -->

  <div class="page-content">
    <?php
    if (is_home() && current_user_can('publish_posts')) : ?>

    <p><?php
          printf(
            wp_kses(
              /* translators: 1: link to WP admin new post page. */
              __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'scope'),
              array(
                'a' => array(
                  'href' => array(),
                ),
              )
            ),
            esc_url(admin_url('post-new.php'))
          );
          ?></p>

    <?php elseif (is_search()) : ?>

    <p>
      <?php esc_html_e('Tyvärr, men ingenting matchade dina söktermer. Försök igen med några olika nyckelord.', 'scope'); ?>
    </p>
    <?php
      get_search_form();

    else : ?>

    <p>
      <?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'scope'); ?>
    </p>
    <?php
      get_search_form();

    endif; ?>
  </div><!-- .page-content -->
</section><!-- .no-results -->