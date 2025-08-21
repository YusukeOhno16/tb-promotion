<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <h2><?php echo the_title(); ?></h2>
  </header>

  <div class="entry-content">
    <?php the_content(); ?>

    <?php
    $uri = $_SERVER['REQUEST_URI'];
    $cat = explode("/", $uri);
    ?>
    <div class="btn-center">
      <button>
        <a
          href="<?php echo home_url() . '/' . $cat[1]; ?>/">一覧へ戻る</a>
      </button>
    </div>
  </div>

</article>

<?php endwhile; ?>

<?php get_footer(); ?>
