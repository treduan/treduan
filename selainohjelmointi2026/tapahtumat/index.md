# Tapahtumat (events)

*event* on tapahtuma sivulla. Yleinen esimerkki on napin tai tekstin painaminen.

Lähdetään katsomaan, miten napin painalluksella voimme vaihtaa sen väriä.

````html
<button id="colorButton">Vaihda väri</button>
````
````js
const button = document.querySelector("#colorButton");

button.addEventListener("click", function () {
  button.style.backgroundColor = "violet";
  button.style.color = "white";
});
````

Tässä nyt on oletuksena, että käytämme erillistä JavaScript-tiedostoa, joka on linkitetty ``<script>``-tagilla HTML-tiedostoon.

Jos haluaisimme tehdä napin, jota painamalla voimme vaihtaa väriä edestakaisin, se toimisi seuraavasti:

````js
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
````