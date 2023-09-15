# Virheiden käsittely

Ohjelmaa suorittaessa tulee välillä ongelmia tai virheitä, varsinkin kun käytetään käyttäjäsyötteitä tai otetaan yhteyttä toisiin verkkosivuihin tai palvelimelle. Silloin on hyvä, jos ongelmista tulee jokin ilmoitus käyttäjälle.

## *try - catch*

Jos meillä on koodipalanen, jonka kanssa saatamme olettaa tulevan joitakin ongelmia, se laitetaan *try* -blokin sisään. Sen jälkeen tulee *catch* -blokki, joka määrittelee, miten virhe käsitellään. 

````js
const testFunction = (input) => {
    try {
        cnsole.log("Printing " + input);
    }
    catch(error) {
        console.log("There is an error in printing input: " + error.message);
    }
}
````

## *throw*

On mahdollista määritellä itse, millaisia virheviestejä koodi tuottaa. *throw* on kirjaimellisesti sitä, että koodi heittää virheilmoituksen annetussa kohdassa. On mahdollista käyttää valmiita, olemassaolevia virhetyyppejä, mutta myös tehdä omia virheilmoituksia.

````js
const testFunction = (input) => {
    if (input < 10) {
        throw "input is too small";
    }
    console.log(input);
}
````

*throw*lle voi antaa arvoksi merkkijonon, numeron, booleanin tai olion.

Kun *throw* tehdään *try*n sisällä, siitä luodaan *error*-olio, joka saa *message*ksi antamasi arvon. Alla on esimerkki, jossa on *input*, jonka on tarkoitus ottaa vastaan numero välillä 5-10. Se antaa eri virheitä riippuen, mitä sille syötetään.

````html
<!DOCTYPE html>
<html>
<body>

<h2>JavaScript try catch</h2>

<p>Please input a number between 5 and 10:</p>

<input id="demo" type="text">
<button type="button" onclick="myFunction()">Test Input</button>

<p id="p01"></p>

<script>
const myFunction = () => {
  const message = document.getElementById("p01");
  message.innerHTML = "";
  let x = document.getElementById("demo").value;
  try { 
    if(x.trim() == "")  throw "is empty";
    if(isNaN(x)) throw "is not a number";
    x = Number(x);
    if(x > 10)   throw "is too high";
    if(x < 5)  throw "is too low";
  }
  catch(err) {
    message.innerHTML = "Input " + err;
  }
  finally {
    document.getElementById("demo").value = "";
  }
}
</script>

</body>
</html>
````

## Demotehtävä

1. Luo uusi HTML-sivu tai käytä edellisessä demossa tehtyä pohjaa (lomake, jolla rekisteröidytään).
2. Lisätään lomakkeelle validointia eli sisällön tarkistusta. Nimen pituuden täytyy olla vähintään kaksi merkkiä. Jotta lomake ei ota tyhjiä välilyöntejä merkeiksi, tee syötteelle ensin *trim()* (eli sijoita funktion sisään annettu syöte). Tämä poistaa mahdolliset välilyönnit syötteen alusta ja lopusta. Jos tämän jälkeen nimen pituus on lyhyempi kuin kaksi merkkiä, luo virheilmoitus, että nimi on liian lyhyt.
3. Salasana pitää kirjoittaa kaksi kertaa. Jos salasanat eivät täsmää, luodaan virheilmoitus, että salasanat eivät täsmää. 
4. Vasta kun syöte on kunnossa, lähetetään ilmoitus, jossa henkilö toivotetaan tervetulleeksi ja hänen sähköpostiinsa on lähetetty vahvistuslinkki. Varsinainen validointi kannattaa laittaa omaan funktioonsa, joka palauttaa booleanin. Jos se palauttaa *true*, näytetään viesti tietoineen, muuten näytetään virheet.