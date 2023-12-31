# Tapahtumat (Events)

Tapahtumat viittaavat erilaisiin muutoksiin, mitä verkkosivulla voi tapahtua joko käyttäjän tai sivuston puolelta. Tyypillisiä tapahtumia ovat hiiren painallukset, hiiren meneminen elementin yli, käyttäjä kirjoittaa syötettä tai jokin latautuu valmiiksi. Joitakin olemme jo käyttäneet (onclick) ja joitakin olemme huomioineet CSS:n puolella (hover).

Alla esimerkissä on hiiren painallus kirjoitettuna suoraan elementtiin, vaikka useammin kirjoitamme erillisen funktion, jossa muutos on.

````js
<!DOCTYPE html>
<html>
<body>

<h1 onclick="this.innerHTML = 'Ooops!'">Click on this text!</h1>

</body>
</html>
````

## Tapahtumien tyyppejä

*onload* ja *onunload* -tapahtumat tapahtuvat silloin, kun käyttäjä tulee sivulle ja poistuu sivulta.

*onload* -tapahtumaa voi käyttää tarkistamaan käyttäjän selaimen tyypin ja version, jotta silloin on mahdollista ladata sopiva versio verkkosivusta. *onload*ia voi käyttää myös evästeiden käsittelyyn.

*oninput* ja *onchange* ovat hyvin samanlaisia eli reagoivat, kun käyttäjä antaa jotain syötettä, tosin *oninput* ei reagoi esimerkiksi *select*in valintaan toisin kuin *onchange*. 

````js
<input type="text" id="fname" oninput="upperCase()">

<script>
function upperCase() {
  const x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}
</script>
````

*onmouseover* ja *onmouseout* vastaavat *hover*ia ja sen loppumista. Joskus halutaan tehdä muutakin kuin vain ulkoasun muutoksia, jolloin tarvitaan JavaScriptiä.

Alla on esimerkki, jossa teksti muuttuu, kun hiiri on sen päällä, ja muuttuu takaisin, kun hiiri poistuu.

````js
<html>
<body>
<h1>JavaScript HTML Events</h1>
<h2>The onmouseover Attribute</h2>

<div onmouseover="mouseOver(this)" onmouseout="mouseOut(this)" 
style="background-color:#D94A38;width:120px;height:20px;padding:40px;">
Mouse Over Me!</div>

<script>
function mouseOver(obj) {
  obj.innerHTML = "Thank You!"
}

function mouseOut(obj) {
  obj.innerHTML = "Mouse Over Me!"
}
</script>

</body>
</html> 
````

*onmousedown*, *onmouseup* ja *onclick* ovat kaikki hiireen liittyviä tapahtumia. *onmousedown* tapahtuu, kun hiiri painetaan pohjaan, *onmouseup* kun hiiren painallus poistuu, ja *onclick*, kun painallustapahtuma on ohi. Useimmiten käytetään vain *onclick*iä.

## Demotehtävä 1

1. Luo uusi HTML-sivu.
2. Luo sivulle nappi, jossa lukee: "Press". 
3. Kun hiiri on napin päällä, napin teksti muuttuu ja siinä lukee: "Come on, press me!". Kun hiiri siirtyy pois, teksti on jälleen "Press".
4. Kun nappia pidetään pohjassa, näkyy sen alla teksti: "Button is being pressed." Kun se vapautetaan, teksti vaihtuu ja siinä lukee: "Button was pressed."

## Event Listener

Tapahtumia voi seurata myös käyttämällä *event listener*iä ylläolevien sijaan. Silloin on mahdollista ottaa käyttöön paljon enemmän toiminnallisuuksia. Silloin myös pitää kirjoittaa funktio, joka hoitaa muutokset. HTML-koodiin ei silloin tarvitse tehdä mitään muutoksia, kunhan siinä on id tai class, jolla valita elementti. 

````html 
<button id="btn">Press me</button>
<script>
let button = getElementById("btn");
button.addEventListener("click", myFunction);

const myFunction = () => {
  console.log("Hello!");
}
</script>
````
w3schoolsissa on [lista](https://www.w3schools.com/jsref/dom_obj_event.asp)<base target="_blank"> kaikista DOM-eventeistä.

*event listener*in hyvä puoli on se, että niitä voi olla useita eli esimerkiksi yhtä nappia painamalla voi saada aikaan monta eri asiaa.

## Demotehtävä 2

1. Voit jatkaa edelliseen tehtävään tai luoda uuden HTML-sivun.
2. Luo sinne *input*-kenttä, joka ottaa vastaan numeroita.
3. Luo sille event listener, joka seuraa muutoksia. 
4. Linkitä event listeneriin funktio, jossa annettu numero kerrotaan kolmella. Inputin alla pitäisi lopulta näkyä teksti, jossa lukee "You gave number 5. Three times 5 is 15." Luonnolisesti vitosen tilalla annettu numero ja lopputuloksena laskutoimituksen tulos.