# JavaScript ja HTML

Tähän asti olemme käyttäneet JavaScriptiä erillisinä tiedostoina ja ajaneet koodia konsolissa. Selaimessa JavaScriptin rooli on laajempi: sen avulla voidaan vaikuttaa verkkosivun sisältöön, ulkoasuun ja toimintaan käyttäjän selaimessa. JavaScript liitetään HTML-sivuun joko suoraan HTML-tiedoston sisälle tai erillisenä tiedostona. Kun sivu ladataan, selain lukee HTML:n, CSS:n ja JavaScriptin yhdessä ja suorittaa JavaScript-koodin, joka voi reagoida käyttäjän toimintaan, muuttaa sivun rakennetta tai käsitellä tietoa. Tässä osiossa keskitymme siihen, miten JavaScript lisätään verkkosivulle ja milloin koodi suoritetaan, ennen kuin siirrymme varsinaiseen sivun käsittelyyn.

## Esimerkki 1

JavaScriptiä voi lisätä HTML-koodin sisään. Kopioi seuraava HTML-tiedostoksi ja testaa sitä painamalla nappia.

````html
<!DOCTYPE html>
<html>
<head>
  <title>JavaScript alkeita</title>
</head>
<body>
    <h1>Demo 1</h1>
    <button onClick="alert('Toimii')">Testinappi</button>
</body>
</html>
````

Tässä esimerkissä käytetään siis JavaScriptin *alert()*-funktiota, joka on liitetty suoraan nappiin. Näin voi tehdä, jos koodi on erittäin lyhyt.

## Esimerkki 2

Jos meidän on tarpeen kirjoittaa hieman pidempi määrä koodia, se kirjoitetaan *script*-tagien väliin.

````html
<!DOCTYPE html>
<html>
<head>
  <title>JavaScript alkeita</title>
</head>
<body>
  <script>
  const kysely = function() {
    let name = prompt('Mikä on nimesi');
    alert('Hei ' + name + ', kiva nähdä!');
    }
  </script>
  <h1>Demo 2</h1>
  <button onClick="kysely()">Kyselynappi</button>
</body>
</html>
````

Eli kun Kysely-nappia painetaan, kutsutaan *kysely()*-nimistä JavaScript-funktiota, joka on määritelty *script*-tagissa. Tällä funktiolla ei ole parametrejä tai palautusarvoa, vaan se avaa *prompt*-ikkunan, johon käyttäjä voi kirjoittaa vastauksen esitettyyn kysymykseen (toimii samoin kuin Pythonissa *input*). Käyttäjän antama tieto tallennetaan muuttujaan name ja alert()-ikkunan avulla voidaan tervehtiä käyttäjää hänen omalla nimellään.

## Demotehtävä 1

1. Muokkaa yllä olevaa koodia niin, että se kysyy myös käyttäjän ikää, ja tervehtimisen lisäksi kertoo kuinka vanha hän on.


## Esimerkki 3

JavaScriptin voi kirjoittaa myös erilliseen tiedostoon, mikä on järkevää varsinkin, jos koodia on runsaasti, sillä se helpottaa koodin luettavuutta. Myös sivun lataus on nopeampaa, jos JavaScript on erillisessä tiedostossa. Silloin tiedosto on linkitettävä HTML-tiedostoon seuraavalla tyylillä: ``<script src="myScript.js"></script>``. Linkin voi laittaa joko ``<head>``iin tai ``<body>``in.

## Demotehtävä 2

1. Luo tiedosto nimeltään *scripts.js*. Siirrä *kysely()*-funktio sen sisään. Sitten aiemman HTML-tiedoston *script*-osiossa liität JavaScript-tiedoston esimerkin mukaisesti. 
2. Testaa, että nappi toimii yhä.