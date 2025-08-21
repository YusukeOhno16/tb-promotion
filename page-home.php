<?php /* Template Name: home-template */ ?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<!-- HOMEの動画部分 -->
<div id="begining">
  <div class="top-movie">
    <div class="video-container">
      <video
        src="<?php echo get_stylesheet_directory_uri();?>/assets/mov/top-sp.mp4"
        preload="auto" loop autoplay muted playsinline class="root"></video>
    </div>
  </div>
  <!-- 試合告知 -->
  <!-- <div class="banner">
    <h2>FEATURED MATCH</h2>
    <a href="<?php echo home_url(); ?>/events/415">
      <img
        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner/poster20250520.jpeg">
    </a>
  </div> -->
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if (! is_front_page()) : ?>
  <header class="entry-header">
    <h1><?php echo the_title(); ?></h1>
    <div class="h1-bottom"></div>
  </header>
  <?php endif; ?>

  <div class="entry-content">
    <?php the_content(); ?>
  </div>

</article>

<?php endwhile; ?>

<?php get_footer(); ?>
