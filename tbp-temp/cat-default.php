<a class="post-item" href="<?php echo the_permalink(); ?>">
  <?php if (has_post_thumbnail()) : ?>
  <?php the_post_thumbnail('medium'); ?>
  <?php endif; ?>

  <div class="post-info">
    <p class="date">
      <?php echo get_the_date(); ?>
      <?php the_time(); ?>
    </p>
    <h2 class="title">
      <?php the_title(); ?>
    </h2>
    <p class="description">
      <?php if (mb_strlen($post->post_content, 'UTF-8') > 60) : ?>
      <?php
              $content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 50, 'UTF-8'));
          echo $content.'……';?>
      <?php else : ?>
      <?php echo str_replace('\n', '', strip_tags($post->post_content)); ?>
      <?php endif; ?>
    </p>
  </div>
</a>
