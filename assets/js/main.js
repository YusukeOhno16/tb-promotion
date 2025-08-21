(function ($) {
  var rwdPoint = 965;
  console.log(rwdPoint);
  function slideImgChange() {
    if ($(window).width() < rwdPoint) {
      $("video.root, img.frame-top, img.frame-bottom").each(function () {
        var changeImg = $(this).attr("src").replace("-pc.", "-sp.");
        $(this).attr("src", changeImg);
      });
    } else {
      $("video.root, img.frame-top, img.frame-bottom").each(function () {
        var changeImg = $(this).attr("src").replace("-sp.", "-pc.");
        $(this).attr("src", changeImg);
      });
    }
  }

  //読み込み時の処理
  slideImgChange();

  //リサイズ時の処理
  $(window).on("resize", function (event) {
    event.preventDefault();
    slideImgChange();
  });

  if (location.href.match("archives/61/")) {
    $("#page").addClass("lp2023-0415");
  } else if (location.href.match("events/177/")) {
    $("#page").addClass("lp2023-0513");
  }
  /* spメニューを一旦消す*/
  // $("nav#menu-screen").hide();
  /* ページ最上部へ戻る */
  $(".return-top").hide();
  /* メニューボタン */
  $(".menu-btn, .sub").on("click", function () {
    $("body").toggleClass("active");
    $(".menu-text").toggleClass("active");
    $(".menu-btn").toggleClass("active");
    $("#menu-screen").toggleClass("active");
  });

  /* スクロール */
  $(window).scroll(function () {
    /* ページ最上部へ戻る */
    if ($(this).scrollTop() > 100) {
      $(".return-top").fadeIn("fast");
    } else {
      $(".return-top").fadeOut("fast");
    }
  });

  /* カルーセル */
  $(".slider").slick({
    autoplay: true,
    arrows: false,
    fade: true,
    asNavFor: ".thumbnail",
  });
  $(".thumbnail").slick({
    slidesToShow: 4,
    asNavFor: ".slider",
    focusOnSelect: true,
  });
})(jQuery);
