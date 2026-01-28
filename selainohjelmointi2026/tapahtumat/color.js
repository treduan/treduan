const button = document.querySelector("#colorButton");

button.addEventListener("click", changeColor);
let isPurple = false;

function changeColor() {
  if (isPurple) {
    button.style.backgroundColor = "";
    button.style.color = "";
    isPurple = false;
  } else {
    button.style.backgroundColor = "violet";
    button.style.color = "white";
    isPurple = true;
  }
}
const button2 = document.querySelector("#toggleButton");

button2.addEventListener("click", function () {
  button2.classList.toggle("redButton");
});

const show = document.querySelector("#toggleInfo");
const info = document.querySelector("#info");

show.addEventListener("click", function () {
  info.classList.toggle("hidden");
});