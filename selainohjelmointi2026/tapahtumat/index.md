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
const button = document.querySelector("#colorButton");

button.addEventListener("click", changeColor)

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

## Demotehtävä 1
1. Luo uusi HTML-tiedosto. Lisää siihen yksi nappi ja yksi tekstikappale. Anna molemmille eri id.
2. Lisää ja linkitä JavaScript-tiedosto.
3. Tee koodi JavaScript-tiedostoon, että kun nappia painetaan, vaihtuu tekstin väri punaiseksi.
4. Muokkaa koodia niin, että painamalla nappia saat värin vaihtumaan edestakaisin punaisen ja mustan välillä.

## Sama tapahtuma useammalle elementille

Kuvitellaan, että meillä on tilanne, jossa HTML-dokumentissa on useampi nappi, joiden haluamme vaihtavan väriä. Silloin meidän pitää laittaa kaikkiin nappeihin sama *class*, jotta voimme valita ne kaikki *querySelectorAll*n avulla. Saman id:n voi laittaa vain yhteen elementtiin.

````html
<button class="colorButton">Nappi 1</button>
<button class="colorButton">Nappi 2</button>
````
````js
const buttons = document.querySelectorAll(".colorButton");

buttons.forEach((button) => {
  button.addEventListener("click", function () {
    button.style.backgroundColor = "violet";
  });
});
````

## Luokkien lisääminen ja poistaminen

Voimme valita yksittäisiä elementtejä tai useita perustuen elementtien nimiin tai luokkiin. Sillä tavalla voimme muokata yksittäisiä CSS-ominaisuuksia melko helposti, mutta monissa tapauksissa haluamme muokata useampaa ominaisuutta. Silloin tehokkaampaa on muokata JavaScriptillä luokkia eikä yksittäisiä ominaisuuksia. Muokkaamme siis *classList*ia.

Tässä meillä on jälleen nappi, mutta nyt lisäämme sille luokan koodilla niin, että useampi ominaisuus vaihtuu kerralla.

````html
<button id="toggleButton">Vaihda tyyli</button>
````
````css
.redButton {
    background-color: red;
    color: white;
    width: 200px;
}
.redButton:hover {
    background-color: pink;
    color: black;
}
````
````js
const button = document.querySelector("#toggleButton");

button.addEventListener("click", function () {
  button.classList.toggle("redButton");
});
````

## Elementin piilottaminen ja tuominen näkyviin

JavaScriptillä voimme tehdä elementtejä näkyviksi tai piilottaa niitä. Tässä on esimerkkikoodi, miten tekstiä klikkaamalla voi näyttää lisätiedot ja saada ne pois näkyvistä. Infoteksti ei aluksi ole näkyvissä, sillä luokka *hidden* on heti käytössä.

````html
<p id="toggleInfo">Näytä lisätiedot</p>
<p id="info" class="hidden">Tässä ovat ne lisätiedot, jotka halutaan näyttää.</p>
````
````css
.hidden {
  display: none;
}
````
````js
const show = document.querySelector("#toggleInfo");
const info = document.querySelector("#info");

show.addEventListener("click", function () {
  info.classList.toggle("hidden");
});
````