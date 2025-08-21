<?php get_header(); ?>

<?php if (have_posts()) : ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="category-header">
    <img
      src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/vi.svg">
    <div class="header-text">
      <?php the_archive_title('<h1>', '</h1>'); ?>
      <?php echo category_description(); ?>
    </div>
  </header>

  <div class="category-content <?php echo the_slug(); ?>">

    <?php while (have_posts()) : the_post(); ?>

    <?php if (get_the_archive_title() == "MEDIA") : ?>

    <?php get_template_part('tbp-temp/cat-media'); ?>

    <?php elseif (get_the_archive_title() == "EVENT ARCHIVES" || get_the_archive_title() == "NEXT EVENTS") : ?>

    <?php get_template_part('tbp-temp/cat-event'); ?>

    <?php else : ?>

    <?php get_template_part('tbp-temp/cat-default'); ?>

    <?php endif; ?>

    <?php endwhile; ?>
    <?php
    $args = array(
      'mid_size' => 1,
      'prev_text' => '<i class="fa-solid fa-chevron-left"></i>',
      'next_text' => '<i class="fa-solid fa-chevron-right"></i>',
      'screen_reader_text' => ' ',
    );
the_posts_pagination($args); ?>

  </div>

</article>

<?php endif; ?>

<?php get_footer(); ?>
