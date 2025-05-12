const text = document.getElementById("text");
const button = document.getElementById("btn");

// console.log(text);
// console.log(button);
button.addEventListener("click", () => {
  //   console.log("クリックしました");
  text.textContent = "ボタンをクリックしました";
});
