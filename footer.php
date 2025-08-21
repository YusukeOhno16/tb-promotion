<?php
/**
 * footer
 */
?>

<?php if (! is_front_page() && ! is_single()) : ?>
<!-- 共通パーツ ホームヘ戻るボタン -->
<div class="return-home">
  <div class="btn-center">
    <button>
      <a href="<?php echo home_url(); ?>">ホームへ戻る</a>
    </button>
  </div>
</div>
<?php else : ?>
<div class="home-bottom"></div>
<?php endif; ?>

</div><!-- .container end -->

</main><!-- .main end -->

<!-- <div class="ticket">
  <a href="https://shop.tb-promotion.com/products/2023-10-12-fedelta-presents-treasure-boxing-promotion-4" target="_blank">
    <img src="">
  </a>
</div> -->

<footer id="root">
  <div class="footer-frame">
    <copy>2024 © TREASURE BOXING PROMOTION.</copy>
  </div>

</footer>

</div><!-- #page end -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript"
  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"
  id="mhc-main">
</script>

<?php wp_footer();?>

</body>

</html>
