<!-- top -->
<!-- <section>
  <div class="top">
    <div class="tweet-container">
      <a class="twitter-timeline" data-width="500" data-height="480" data-dnt="true" data-theme="dark"
        href="https://twitter.com/TB_PROMOTION?ref_src=twsrc%5Etfw">Tweets by TB_PROMOTION</a>
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <div class="btn-follow">
      <a href="https://twitter.com/TB_PROMOTION?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large"
        data-dnt="true" data-show-count="false">Follow @TB_PROMOTION</a>
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  </div>
</section> -->

<!-- events cat_ID:5 -->
<section>
  <header class="category-header">
    <img
      src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/vi.svg">
    <div class="header-text">
      <h1>NEXT EVENTS</h1>
      <p>最新のイベント</p>
    </div>
  </header>
  <div class="category-content events">
    <?php
      global $post;
      $tmp_post = $post;
      $category_ids = array('5');
      $numberposts = '3';
      ?>
    <?php foreach ($category_ids as $category_id) : ?>
    <div class="post">
      <?php $postslist = get_posts("category=$category_id&numberposts=$numberposts&order=DESC&orderby=date"); ?>
      <?php foreach ($postslist as $post) : ?>

      <?php get_template_part('tbp-temp/cat-event'); ?>

      <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
    <?php $post = $tmp_post; ?>
  </div>
</section>

<!-- archives cat_ID:6 -->
<section>
  <header class="category-header">
    <img
      src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/vi.svg">
    <div class="header-text">
      <h1>EVENT ARCHIVES</h1>
      <p>過去のイベント記録</p>
    </div>
  </header>
  <div class="category-content archives">
    <?php
      global $post;
      $tmp_post = $post;
      $category_ids = array('6');
      $numberposts = '3';
      ?>
    <?php foreach ($category_ids as $category_id) : ?>
    <div class="post">
      <?php $postslist = get_posts("category=$category_id&numberposts=$numberposts&order=DESC&orderby=date"); ?>
      <?php foreach ($postslist as $post) : ?>

      <?php get_template_part('tbp-temp/cat-event'); ?>

      <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
    <?php $post = $tmp_post; ?>
  </div>
</section>

<!-- press cat_ID:3 -->
<section>
  <header class="category-header">
    <img
      src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/vi.svg">
    <div class="header-text">
      <h1>TBP PRESS</h1>
      <p>TBP 公式プレス</p>
    </div>
  </header>
  <div class="category-content press">
    <?php
      global $post;
      $tmp_post = $post;
      $category_ids = array('3');
      $numberposts = '3';
      ?>
    <?php foreach ($category_ids as $category_id) : ?>
    <div class="post">
      <?php $postslist = get_posts("category=$category_id&numberposts=$numberposts&order=DESC&orderby=date"); ?>
      <?php foreach ($postslist as $post) : ?>

      <?php get_template_part('tbp-temp/cat-default'); ?>

      <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
    <?php $post = $tmp_post; ?>
    <div class="btn-center p-top">
      <button>
        <a href="<?php echo home_url(); ?>/press">すべて見る</a>
      </button>
    </div>
  </div>
</section>

<!-- media cat_ID:4 -->
<section>
  <header class="category-header">
    <img
      src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/vi.svg">
    <div class="header-text">
      <h1>MEDIA</h1>
      <p>メディア掲載情報</p>
    </div>
  </header>
  <div class="category-content media">
    <?php
      global $post;
      $tmp_post = $post;
      $category_ids = array('4');
      $numberposts = '5';
      ?>
    <?php foreach ($category_ids as $category_id) : ?>
    <div class="post">
      <?php $postslist = get_posts("category=$category_id&numberposts=$numberposts&order=DESC&orderby=date"); ?>
      <?php foreach ($postslist as $post) : ?>

      <?php get_template_part('tbp-temp/cat-media'); ?>

      <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
    <?php $post = $tmp_post; ?>
    <div class="btn-center p-top">
      <button>
        <a href="<?php echo home_url(); ?>/media">すべて見る</a>
      </button>
    </div>
  </div>
</section>

<!-- judge cat_ID:7 -->
<section>
  <header class="category-header">
    <img
      src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/vi.svg">
    <div class="header-text">
      <h1>THE JUDGE's EYE</h1>
      <p>TBP 代表 伊藤雅雪のブログ</p>
    </div>
  </header>
  <div class="category-content judge">
    <div class="tweet-container">
      <a class="twitter-timeline" data-width="350" data-height="480" data-dnt="true" data-theme="dark"
        href="https://twitter.com/masayukiito0630?ref_src=twsrc%5Etfw">Tweets by masayukiito0630</a>
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <div class="btn-follow">
      <a href="https://twitter.com/masayukiito0630?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large"
        data-dnt="true" data-show-count="false">Follow @masayukiito0630</a>
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  </div>
</section>

<!-- girls cat_ID:8 -->

<!-- about -->
<section>
  <header class="category-header">
    <img
      src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/vi.svg">
    <div class="header-text">
      <h1>ABOUT TBP</h1>
      <p>TBP について</p>
    </div>
  </header>
  <div class="page-content about">
    <div class="post">
      <p>TREASURE BOXING PROMOTION（以下TBP）代表の伊藤雅雪です。</p>
      <img
        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/masayuki_ito.jpg">
      <p>この度、私伊藤雅雪は、国際的なボクシング興行に携わってゆくべく、TBPを設立するに至りました。去る2022年10月に引退式を終え、今後はプロモーターとして大きな夢をTBPの中で実現できればと考えています。
      </p>

      <p>
        私はボクシング興行に携わるうえで、さまざまな「つくり方」や「見せ方」があると思っています。また、ボクシングを楽しむ皆様の中にもさまざまな「見方」や「楽しみ方」があると思います。私は、ボクシングが好きだ、ボクシングを楽しみたい、という気持ちに立脚していれば、全てが正解だと思っています。しかし...
      </p>
    </div>
    <div class="btn-center p-top">
      <button>
        <a href="<?php echo home_url(); ?>/about">続きを読む</a>
      </button>
    </div>
  </div>
</section>

<!-- sandp -->
<section>
  <header class="category-header">
    <img
      src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/vi.svg">
    <div class="header-text">
      <h1>SPONSOR & PARTNER</h1>
      <p>スポンサー & パートナー</p>
    </div>
  </header>
  <div class="sandp">
    <?php get_template_part('tbp-temp/sandp'); ?>

  </div>
</section>
