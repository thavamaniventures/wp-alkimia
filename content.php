<?php
/* The default template for displaying content */
?>
<header>
  <?php
  if (is_single()):
      the_title('<h1>', '</h1>');
  else:
      the_title('<h1><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>');
  endif;
  ?>
  <div>
    <i class="icon ion-android-clock"></i>&nbsp;<?php the_time(get_option('date_format')); ?>&nbsp;&nbsp;
    <i class="icon ion-person"></i>&nbsp;<?php the_author_posts_link(); ?>&nbsp;&nbsp;
    <?php if (has_category()): ?>
    <i class="icon ion-folder"></i>&nbsp;
    <?php $category = get_the_category();
    echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
    endif; ?>
  </div>
</header>
<section>
  <?php
  if (is_single()):
      the_content();
  else:
      the_excerpt();
  endif;
  ?>
</section>
<footer>
  <?php
  if (!post_password_required() && (comments_open() || get_comments_number())): ?>
    <i class="icon ion-chatbox"></i>&nbsp;
    <?php comments_popup_link(__('Leave a comment'), __('1 Comment'), __('% Comments'));
  endif;
  ?>
  <?php
  if (is_user_logged_in()): ?>
      &nbsp;&nbsp;<i class="icon ion-edit"></i>&nbsp;
  <?php edit_post_link(__('Edit'));
  endif;
  ?>
</footer>
