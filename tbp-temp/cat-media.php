<a class="post-item"
  href="<?php echo get_post_meta(get_the_ID(), 'media_link', true); ?>"
  target="_blank">
  <div class="post-header">
    <p class="date">
      <?php echo get_the_date(); ?>
      <?php the_time(); ?>
    </p>
    <?php if (get_the_title()) : ?>
    <p class="media-name">
      <?php the_title(); ?>
    </p>
    <?php endif; ?>
  </div>

  <p class="media-text">
    <?php if (mb_strlen($post->post_content, 'UTF-8') > 42) : ?>
    <?php
              $content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 42, 'UTF-8'));
        echo $content.'……';?>
    <?php else : ?>
    <?php echo str_replace('\n', '', strip_tags($post->post_content)); ?>
    <?php endif; ?>
  </p>
</a>
