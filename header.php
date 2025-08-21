<?php
/**
 * header.
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

  <head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/website#">
    <meta
      charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="email=no,telephone=no,address=no">

    <?php if (is_front_page()) : ?>
    <meta name="description" content="-TREASURE BOXING PROMOTION- 公式WEBサイト。最新情報や公式発表、伊藤雅雪代表のブログなどここでしか見れないボクシング情報が満載。">
    <?php else : ?>
    <meta name="description"
      content="<?php echo strip_tags(get_the_excerpt()); ?>">
    <?php endif; ?>
    <?php
        if (is_single() || is_page()):
            if (get_post_meta(get_the_ID(), 'noindex', true)) :
                echo'<meta name="robots" content="noindex"/>';
            endif;
        endif; ?>
    <!-- OGP -->
    <meta property="og:url" content="https://tb-promotion.com">
    <meta property="og:site_name"
      content="<?php echo bloginfo('name'); ?>">
    <meta property="og:image"
      content="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ogp.jpg" />
    <?php if (is_front_page()) : ?>
    <meta property="og:title" content="TREASURE BOXING PROMOTION">
    <meta property="og:description"
      content="-TREASURE BOXING PROMOTION- 公式WEBサイト。最新情報や公式発表、伊藤雅雪代表のブログなどここでしか見れないボクシング情報が満載。">
    <meta property="og:type" content="website">
    <?php else : ?>
    <meta property="og:title" content="<?php echo the_title(); ?>">
    <meta property="og:description"
      content="<?php echo strip_tags(get_the_excerpt()); ?>">
    <meta property="og:type" content="article">
    <?php endif; ?>
    <link rel="SHORTCUT ICON"
      href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fav/fav.ico">
    <link rel="apple-touch-icon" type="image/png"
      href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fav/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png"
      href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fav/icon-192x192.png">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	  
	 <!-- // FontAwsome //-->
	  <script src="https://kit.fontawesome.com/223176a33b.js" crossorigin="anonymous"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RCRBZMC257"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'G-RCRBZMC257');

    </script>
	  <style>
		  .snsFixed{
				position: fixed;
				bottom: 4%;
				left: 2%;
				display: flex;
				align-items: center;
				color: #fff;
				z-index: 999;
			  background: rgba(0,0,0,.25);
			  padding: 0 1rem;
			}
			.snsFixed ul{
				display: flex;
				list-style: none;
			}
			.snsFixed ul li{
				margin-left: 1rem;
				font-weight: bold;
				font-size: 1.6rem;
			}
			.snsFixed ul li a{
				color: #fff;
				text-decoration: none;
			}
			.snsFixed ul li a:hover{
				transition: .3s;
				color: #d0b162;
			}
		  .ticket{
			  bottom: 10%!important;
		  }
		  @media (min-width: 767px) {
			  .snsFixed{
				  background: none;
				  bottom: 2%;
				  padding: 0;
			  }
		  }
	  </style>

    <?php wp_head(); ?>
    <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-BVJVJR6B2P"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-BVJVJR6B2P');
      </script>

      <!-- Meta Pixel Code -->
        <script>
          !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '688353426501550');
          fbq('track', 'PageView');
        </script>
        <noscript>
          <img height="1" width="1" style="display:none"　src="https://www.facebook.com/tr?id=688353426501550&ev=PageView&noscript=1"/>
        </noscript>
      <!-- End Meta Pixel Code -->
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page">
		
    <div class="snsFixed">
        Follow us：
        <ul>
            <li><a href="https://twitter.com/TB_PROMOTION" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter"></i></a></li>
            <li><a href="https://www.tiktok.com/@tbpromotion?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener"><i class="fa-brands fa-tiktok"></i></a></li>
            <li><a href="https://youtube.com/@TreasureBoxingPromotion?si=dANf0-wmvW1Ivh0Q" target="_blank" rel="noopener"><i class="fa-brands fa-youtube"></i></a></li>
            <li><a href="https://www.instagram.com/treasureboxingpromotion/" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a></li>
        </ul>
    </div>

      <header id="root">
        <div class="header-frame">
          <!--
          <img class="frame-top"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/frame-top-sp.svg">
          -->
        </div>
        <div class="header-ui">
          <div class="header-logo">
            <a href="<?php echo home_url(); ?>">
              <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logo.svg">
            </a>
          </div>
          <!-- pc menu bar -->
          <nav id="menu-bar">
            <div class="pc-menu">
              <?php if(!is_front_page()) : ?>
              <a class="header-text"
                href="<?php echo home_url(); ?>">
                <h1>HOME</h1>
                <p>ホーム</p>
              </a>
              <?php endif; ?>

              <a class="header-text"
                href="<?php echo home_url(); ?>/events">
                <h1>NEXT EVENTS</h1>
                <p>最新のイベント</p>
              </a>

              <a class="header-text"
                href="<?php echo home_url(); ?>/archives">
                <h1>EVENT ARCHIVES</h1>
                <p>過去のイベント</p>
              </a>

              <a class="header-text"
                href="<?php echo home_url(); ?>/press">
                <h1>TBP PRESS</h1>
                <p>TBP公式プレス</p>
              </a>

              <a class="header-text"
                href="<?php echo home_url(); ?>/media">
                <h1>MEDIA</h1>
                <p>メディア掲載情報</p>
              </a>

              <a class="header-text"
                href="<?php echo home_url(); ?>/about">
                <h1>ABOUT TBP</h1>
                <p>TBPについて</p>
              </a>

              <!--
              <a class="header-text"
                href="<?php echo home_url(); ?>/sandp">
              <h1>SPONSOR & PARTNER</h1>
              <p>スポンサー & パートナー</p>
              </a>
              -->
            </div>
          </nav>
        </div>


      </header>

      <!-- sp tb menu button -->
      <div class="menu-btn">
        <div class="bars">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <!-- sp tb menu screen -->
      <nav id="menu-screen">
        <div class="sp-menu">
          <a class="header-text" href="<?php echo home_url(); ?>">
            <h1>HOME</h1>
            <p>TBPホームページ</p>
          </a>

          <a class="header-text"
            href="<?php echo home_url(); ?>/events">
            <h1>NEXT EVENTS</h1>
            <p>最新のイベント</p>
          </a>

          <a class="header-text"
            href="<?php echo home_url(); ?>/archives">
            <h1>EVENT ARCHIVES</h1>
            <p>過去のイベント</p>
          </a>

          <a class="header-text"
            href="<?php echo home_url(); ?>/press">
            <h1>TBP PRESS</h1>
            <p>TBP公式プレス</p>
          </a>

          <a class="header-text"
            href="<?php echo home_url(); ?>/media">
            <h1>MEDIA</h1>
            <p>メディア掲載情報</p>
          </a>

          <a class="header-text"
            href="<?php echo home_url(); ?>/about">
            <h1>ABOUT TBP</h1>
            <p>TBPについて</p>
          </a>

          <!--
          <a class="header-text"
            href="<?php echo home_url(); ?>/sandp">
          <h1>SPONSOR & PARTNER</h1>
          <p>スポンサー & パートナー</p>
          </a>
          -->
        </div>
      </nav>

      <?php if (is_front_page()): ?>
      <?php $classname = 'nashi'; ?>
      <?php else : ?>
      <?php $classname = 'ari'; ?>
      <?php endif; ?>

      <main id="top" class="<?php echo $classname; ?>">

        <div class="container">
          <?php if (! is_front_page()): ?>
          <!-- パンくず -->
          <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            }?>
          </div>
          <?php endif; ?>
