<div class="share d-inline-flex flex-column my-5">
  <p>Dela det här:</p>
  <div class=" d-flex flex-column">
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="d-flex"
      onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=800,width=600');return false;">
      <span class="dashicons dashicons-facebook"></span>
      <span>Facebook</span>
    </a>

    <a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons"
      class="d-flex "
      onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=800,width=600');return false;">
      <span class="dashicons dashicons-twitter"></span>
      <span>Twitter</span>
    </a>

    <a href="javascript:;" onclick="window.print()" class="d-flex">
      <span class="dashicons dashicons-printer"></span>
      <span>Skriv ut</span>
    </a>
  </div>
</div>