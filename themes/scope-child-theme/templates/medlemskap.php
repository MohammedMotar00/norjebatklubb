<?php
/*
Template Name: Medlemskap
*/

get_header();
?>

<div class="container my-5">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; endif; ?>
</div>

<div class="container text-left">
  <?php get_template_part("template-parts/content", "share") ?>
</div>
</div>


<?php get_footer();?>