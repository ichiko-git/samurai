// カルーセル
$(document).ready(function () {
  $(".mainvisual").slick({
    autoplay: true,
    autoplaySpeed: 5000,
    dots: true,
    fade: true,
    speed: 1000,
    infinite: true,
    arrows: false,
  });
});
// リンクホバー
$("a").on("mouseenter", function () {
  $(this).css("opacity", "0.5");
});
$("a").on("mouseout", function () {
  $(this).css("opacity", "1");
});
// スクロール時
$(window).on("scroll", function () {
  // TOPボタン表示
  if ($(window).scrollTop() >= 100) {
    $("#back-btn").css("opacity", "1");
  } else {
    $("#back-btn").css("opacity", "0");
  }

  // セクションをフェードイン
  const wHeight = $(window).height();
  const wScroll = $(window).scrollTop();
  const aboutPosition = $("#about").offset().top;
  const worksPosition = $("#works").offset().top;
  if (wScroll >= aboutPosition - wHeight + 200) {
    $("#about").css("opacity", "1");
  }
  if (wScroll >= worksPosition - wHeight + 200) {
    $("#works").css("opacity", "1");
  }
});
// スムーススクロール
$('a[href^="#"]').on("click", function () {
  var href = $(this).attr("href");
  var target = $("html");
  if (href === "#") {
    target = $("html");
  } else {
    target = $(href);
  }
  var position = target.offset().top;
  var speed = 500;
  $("html, body").animate({ scrollTop: position }, speed, "swing");
});

// モーダルウィンドウ表示
$("#work1").on("click", function () {
  var src = $(this).attr("src");
  $(".modal-image").attr("src", src);
  $(".modal").fadeIn();
});
$("#work2").on("click", function () {
  var src = $(this).attr("src");
  $(".modal-image").attr("src", src);
  $(".modal").fadeIn();
});
$("#work3").on("click", function () {
  var src = $(this).attr("src");
  $(".modal-image").attr("src", src);
  $(".modal").fadeIn();
});

$("#close-btn").on("click", function () {
  $(".modal").fadeOut();
});
