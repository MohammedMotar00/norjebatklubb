<article id="post-<?php the_ID(); ?>" <?php post_class("col-12 content-index"); ?>>
  <div class="content-index-inner">
    <div class="post-thumbnail">
      <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('scope-thumb', array('class' => 'img-responsive blog-photo')); ?>
      <?php endif; ?>
    </div>
    <div class="post-content">
      <?php the_title('<h2 class="entry-title post-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
      <div class="post-meta">
        <?php scope_posted_on(); ?>
      </div>
      <div class="entry-summary post-description"><?php the_excerpt(); ?></div>
      <div class="clearfix"></div>
      <div class="blog-btn">
        <a class="btn btn-read-more" href="<?php the_permalink(); ?>"><?php esc_html_e('LÄS MER', 'scope'); ?></a>
      </div>
    </div>
  </div>
</article>