<aside id="secondary" class="col-12 col-md-3 offset-md-1 scp-sidebar" role="complementary">
  <div id="recent-posts-2" class="sidebar-widget widget widget_recent_entries">
    <div class="widget-heading">
      <h3 class="widget-title">Privata Sidor</h3>
    </div>

    <?php
    $private_page_args = array(
      'order' => 'ASC',
      'post_type' => 'page',
      'post_status' => array('published', 'private'),
    );

    $private_pages = new WP_Query($private_page_args);
    ?>

    <?php if ($private_pages->have_posts()) : ?>
    <ul>
      <li>
        <a href="http://norjebatklubb-wp.test/medlemssida/">Medlemssida</a>
      </li>
      <?php while ($private_pages->have_posts()) : ?>
      <!-- <?php $private_pages->the_post(); ?> -->
      <li>
        <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
      </li>
      <?php endwhile; ?>
    </ul>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>

  </div>
</aside>