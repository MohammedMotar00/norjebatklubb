<aside id="secondary" class="col-12 col-md-3 offset-md-1 scp-sidebar" role="complementary">
  <!-- <div id="search-2" class="sidebar-widget widget widget_search">
    <form role="search" method="get" class="search-form scope-search all-search" action="http://norjebatklubb-wp.test/">
      <div class="form-group">
        <label class="search-label">
          <span class="screen-reader-text">Search for:</span>
          <input type="search" class="blog-search input-search" placeholder="Search " value="" name="s"
            title="Search for:">
        </label>
        <input type="submit" class="search-submit" value="Search ">
      </div>
    </form>
  </div> -->
  <div id="recent-posts-2" class="sidebar-widget widget widget_recent_entries">
    <div class="widget-heading">
      <h3 class="widget-title">Privata Sidor</h3>
    </div>

    <?php
    $private_page_args = array(
      'order' => 'ASC',
      'post_type' => 'page',
      // 'post_status' => 'private',
      'post_status' => array('published', 'private'),
      // 'post__in' => array('221', '263'),
      // 'post__not_in' => array('221', '263')
    );

    $private_pages = new WP_Query($private_page_args);

    // if ($private_pages->have_posts()) :
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