<?php get_header(); ?>

<section class="page-wrap">
  <div class="container">



    <?php if (has_post_thumbnail()) : ?>
    <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>"
      class="img-fluid mb-4 img-thumbnail">
    <?php endif; ?>


    <div class="row">
      <div class="col-lg-6">

        <?php get_template_part('includes/content', 'kontakter'); ?>

        <?php wp_link_pages(); ?>
      </div>

      <?php if (!empty($post->post_title)) :  ?>
      <h5><?php the_title(); ?></h5>
      <?php endif;  ?>

      <?php if (!empty(get_field('skill'))) : ?>
      <p><?php echo the_field('skill'); ?></p>
      <?php endif; ?>

      <?php if (get_field('email')) : ?>
      <p><?php echo the_field('email'); ?></p>
      <?php endif; ?>

      <?php if (get_field('phone_number')) : ?>
      <p><?php echo the_field('phone_number'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>