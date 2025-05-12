// 文字色変化ボタンを押した時
$("#change-color").on("click", () => {
  $("#target").css("color", "red");
});

// 文字内容変化ボタンを押した時
$("#change-text").on("click", () => {
  $("#target").text("Hello!");
});

// フェードアウトボタンを押した時
$("#fade-out").on("click", () => {
  $("#target").fadeOut();
});

// フェードインボタンを押した時
$("#fade-in").on("click", () => {
  $("#target").fadeIn();
});
