<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

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
