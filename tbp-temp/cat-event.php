<div class="post-item">
  <div class="trapezoid-box">
    <div class="trapezoid-right"></div>
    <div class="trapezoid-left"></div>
    <div class="event-inner">
      <div class="event-header">
        <p class="date">
          <?php echo get_post_meta(get_the_ID(), 'match_date', true); ?>
        </p>
        <p class="venue">
          <?php echo get_post_meta(get_the_ID(), 'match_venue', true); ?>
        </p>
      </div>
      <?php the_post_thumbnail(); ?>
      <div class="btn-right">
        <button>
          <a href="<?php echo the_permalink(); ?>">詳しく見る</a>
        </button>
      </div>
    </div>
  </div>

</div>
