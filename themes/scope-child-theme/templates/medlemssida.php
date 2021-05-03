<?php
/*
Template Name: Medlemssida
*/

get_header();
?>

<div class="container medlemssida my-5 d-flex w-100 justify-content-between">
  <?php echo do_shortcode('[ultimatemember form_id="205"]'); ?>

  <?php if (is_user_logged_in()) : ?>

  <div id="recent-posts-2" class="sidebar-widget widget widget_recent_entries w-50">
    <div class="widget-heading">
      <h3 class="widget-title">Privata sidor</h3>
    </div>
    <ul>

      <?php
        $private_page_args = array(
          'order' => 'ASC',
          'post_type' => 'page',
          // 'post_status' => 'private',
          'post_status' => array('published', 'private'),
          'post__in' => array('221', '263'),
          // 'post__not_in' => array('221')
        );

        $private_pages = new WP_Query($private_page_args);

        // if ($private_pages->have_posts()) :
        ?>

      <?php if ($private_pages->have_posts()) : ?>

      <ul>
        <?php while ($private_pages->have_posts()) : ?>
        <!-- <?php $private_pages->the_post(); ?> -->
        <li>
          <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
        </li>
        <?php endwhile; ?>
      </ul>
      <!-- <?php wp_reset_postdata(); ?> -->
      <?php endif; ?>
      </li>
    </ul>

  </div>


  <?php endif; ?>


</div>

<!-- <div class="container text-left">
  <?php get_template_part("template-parts/content", "share") ?>
</div> -->
</div>


<?php get_footer(); ?>