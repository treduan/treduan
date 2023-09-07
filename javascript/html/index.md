# JavaScript ja HTML

JavaScriptiä voi käyttää moniin asioihin, mutta sen yleisin käyttökohde on vaikuttaa jollakin tavalla HTML-sivujen toimintaan. Sillä voidaan muuttaa elementtien sisältöä tai muotoilua ja esimerkiksi poistaa tai lisätä elementtejä näkyville. Parhaiten tämä toimii, kun muokattavaan elementtiin lisätään *id*, jonka JavaScript voi valita.

Alla olevassa esimerkissä tekstielementille on annettu *id* "demo". Lisäksi sivulla on kaksi nappia, joista ensimmäinen tekee tekstielementistä näkymättömän ja jälkimmäinen jälleen näkyvän.

````html
<!DOCTYPE html>
<html>
<body>

<h2>What Can JavaScript Do?</h2>

<p id="demo">JavaScript can hide HTML elements.</p>

<button type="button" onclick="document.getElementById('demo').style.display='none'">Invisible</button>
<button type="button" onclick="document.getElementById('demo').style.display='block'">Visible</button>

</body>
</html> 
````

## JavaScriptin lisääminen HTML:ään

JavaScriptiä voi kirjoittaa osin elementteihin, kuten aiemmassa esimerkissä, mutta usein sitä lisätään ``<script>`` -tagien väliin. Sitä on mahdollista lisätä niin HTML-dokumentin ``<head>``in kuin myös ``<body>``n sisään.

Tässä esimerkissä JavaScript-funktio on kirjoitettu ``<head>``in sisään. Se etsii elementin, jonka *id* on "demo", ja muuttaa sen, kun nappia painetaan. Funktion kutsu on kirjoitettu napin *onClick*-tapahtumaan.

````html
<!DOCTYPE html>
<html>
<head>
<script>
const myFunction = () => {
  document.getElementById("demo").innerHTML = "Paragraph changed.";
}
</script>
</head>
<body>
<h2>Demo JavaScript in Head</h2>

<p id="demo">A Paragraph</p>
<button type="button" onclick="myFunction()">Try it</button>

</body>
</html>
````

JavaScriptin voi kirjoittaa myös erilliseen tiedostoon, mikä on järkevää varsinkin, jos koodia on runsaasti, sillä se helpottaa koodin luettavuutta. Myös sivun lataus on nopeampaa, jos JavaScript on erillisessä tiedostossa. Silloin tiedosto on linkitettävä HTML-tiedostoon seuraavalla tyylillä: ``<script src="myScript.js"></script>``. Linkin voi laittaa joko ``<head>``iin tai ``<body>``in.