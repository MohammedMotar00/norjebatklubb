<?php
/*
Template Name: Kontakter
*/

get_header();
?>



<?php
$args = array(
  'post_type' => 'kontakter',
  'post_status' => 'publish',
  'numberposts' => -1,
  'orderby' => 'menu_order',
  'order' => 'ASC',
  'posts_per_page' => -1,
);

$loop = new WP_Query($args);
?>

<div class="container d-flex text-center mt-5">
  <div class="row d-flex">
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

    <div class="col-md-4 col-sm-6 mb-5">
      <div class="card " style="">
        <?php if (has_post_thumbnail()) : ?>
        <div class="img-kontakter">
          <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>"
            class="img-fluid img-thumbnail img-responsive">
        </div>
        <?php endif; ?>

        <div class="card-body d-flex flex-column justify-content-center" style="height: 230px">
          <?php if (!empty($post->post_title)) :  ?>
          <h3 class="mb-4"><?php the_title(); ?></h3>
          <?php endif;  ?>

          <?php if (!empty(get_field('skill'))) : ?>
          <h5 class="mb-4"><?php echo the_field('skill'); ?></h5>
          <?php endif; ?>

          <?php if (get_field('email')) : ?>
          <a href="mailto:<?php echo the_field('email'); ?>">
            <p><?php echo the_field('email'); ?></p>
          </a>
          <?php endif; ?>

          <?php if (get_field('phone_number')) : ?>
          <a href="tel:<?php echo the_field('phone_number'); ?>">
            <p><?php echo the_field('phone_number'); ?></p>
          </a>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <?php endwhile; ?>

    <div class="container text-left">
      <?php get_template_part("template-parts/content", "share") ?>
    </div>
  </div>
</div>

<?php
wp_reset_postdata();
?>



<?php get_footer(); ?>