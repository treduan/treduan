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

## Demotehtävä 1

1. Luo uusi HTML-sivu tai käytä edellisessä demossa tehtyä pohjaa (lomake, jolla rekisteröidytään).
2. Lisätään lomakkeelle validointia eli sisällön tarkistusta. Nimen pituuden täytyy olla vähintään kaksi merkkiä. Jotta lomake ei ota tyhjiä välilyöntejä merkeiksi, tee syötteelle ensin *trim()* (eli sijoita funktion sisään annettu syöte). Tämä poistaa mahdolliset välilyönnit syötteen alusta ja lopusta. Jos tämän jälkeen nimen pituus on lyhyempi kuin kaksi merkkiä, luo virheilmoitus, että nimi on liian lyhyt.
3. Salasana pitää kirjoittaa kaksi kertaa. Jos salasanat eivät täsmää, luodaan virheilmoitus, että salasanat eivät täsmää. 
4. Vasta kun syöte on kunnossa, lähetetään ilmoitus, jossa henkilö toivotetaan tervetulleeksi ja hänen sähköpostiinsa on lähetetty vahvistuslinkki. Varsinainen validointi kannattaa laittaa omaan funktioonsa, joka palauttaa booleanin. Jos se palauttaa *true*, näytetään viesti tietoineen, muuten näytetään virheet.


# Error-luokan käyttäminen

Vaikka virheilmoituksille voidaan antaa monia eri arvoja, on suositeltua, että siihen käytetään varsinaista virheluokkaa. Oman virheluokan voi luoda myös itse. Siihen käytetään olio-ohjelmointia, jota opiskelemme tarkemmin myöhemmin. Scriptiin voimme luoda seuraavaa koodia mukaillen oman luokan. Luonnollisesti voimme nimetä sen haluamallamme tavalla.

````js
  class ValidationError extends Error {
    constructor(message) {
      super(message);
      this.name = "ValidationError";
    }
}
````

Oleellista on huomata ensimmäisen rivin *extends Error*, mikä tarkoittaa, että se saa ominaisuuksia JavaScriptin yleiseltä *Error*-oliolta. Sitä voidaan käyttää seuraavalla tavalla scriptin sisällä (oletuksena on, että kyseisellä HTML-sivulla on lomake sekä elementti, jonka id on *demo* eli koko tiedosto ei ole näkyvissä).

````js
const showInput = () => {
  try {        
    let input = document.getElementById("name").value;
      if (input === "") {
        throw new ValidationError("The name cannot be empty.");
          }
            document.getElementById("demo").innerHTML = "Hello, " + input + "!";
  }
    catch(error) {
      document.getElementById("demo").innerHTML = error.message;
    }
}
````

# Virheilmoitsten lukeminen

Kun koodiin tulee virheitä, luonnollisesti ensin katsomme erilaisia virheilmoituksia. Koodieditori näyttää useimmat syntaksivirheet sekä kirjoitusvirheet, joten niiden paikantaminen on suhteellisen yksinkertaista. Silloin on tarpeen tarkistaa kyseisen koodin käyttö eli ovatko esimerkiksi sulut oikeanlaiset, sillä kaarisulkujen ja aaltosulkujen välillä on eronsa ja kaikille pitää aina löytää pari. Myös pilkut tai puolipisteet voivat joissakin tilanteissa olla tärkeitä.

Virheilmoitukset konsolissa tai selaimessa kertovat myös siitä, minkä tyyppinen virhe on kyseessä, ja usein se kertoo myös, missä kohtaa virhe ilmenee. On hyvä opetella lukemaan näitä virheilmoituksia, mutta nekään eivät aina kerro kaikkea ja joskus johtavat harhaan. Lisää JavaScriptin virheilmoituksista voi lukea [täältä](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Errors)<base target="_blanck">. Täältä löytyy vielä yksityiskohtaisemmin [lisää virheistä](https://kinsta.com/blog/errors-in-javascript/)<base target="_blanck">.

## Demotehtävä 2

1. Käy yllä olevista linkeistä jälkimmäisessä. Hakeudu kohtaan, jossa kerrotaan kymmenestä yleisimmästä JavaScriptin virheviestistä.
2. Laadi Word-tiedostoon listaus siitä, mitä ne kymmenen yleisintä virhettä ovat ja mistä ne useimmiten johtuvat.
3. Mieti myös, oletko itse kohdannut kyseistä virhettä koodatessasi.

# Virheiden etsiminen

Joskus kuitenkin koodissa ei itsessään ole virheitä, joita editori tai konsoli nappaisi, vaan koodi vain ei toimi halutulla tavalla. Silloin ohjelmoijan on lähdettävä testaamaan itse sitä, missä ongelma on.

*console.log*in käyttäminen on usein hyvä tapa tarkistaa esimerkiksi, meneekö koodi jonkin loopin sisään, esimerkiksi *if*-lausekkeeseen. Silloin toimiva tieto voi olla vaikka "Inside if", jotta tiedetään, mistä kohti koodia teksti tulee. Samoin *console.log*ia voi käyttää siihen, että tulostaa eri tietoja, joihin koodin pitäisi päästä käsiksi. Samoin voi tulostaa tietojen tietotyyppejä, jos vaikka laskutoimitukset eivät toimi. JavaScriptin yksi heikkouksista on se, että tietotyyppi voi vaihtua, joten joskus on tarpeen tehdä tietotyyppitarkistuksia.

Koodissa voi käyttää myös sanaa *debugger;*. Sillä kohdalla koodin suorittaminen loppuu. Sen hyöty on siinä, että voi tarkistaa, toimiiko koodi siihen asti, joten on mahdollista löytää se kohta koodista, jossa vika ilmenee.

## Demotehtävä 3

1. Kopioi alla oleva koodi omaksi HTML-tiedostoksi. Siinä on virheitä/ongelmia!
2. Lisää siihen *console.log*illa tarkistuksia. Tarkista, että saat kaikki käyttäjän antamat syötteet.
3. Jos käyttäjä antaa negatiivisia arvoja, tutki, missä kohtaa tulee virhe ja miten saisit ne helpoiten estettyä.
4. Käytä jossakin kohtaa *debugger;*ia.



````html
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matkalaskuri</title>
    <script>
        const countPrice = () => {
            let people = document.getElementById("people").value;
            let distance = document.getElementById("distance").value;
            let startTime = document.getElementById("startTime").value;
            let total = 0;
            if (startTime <= 6 || startTime >= 22) {
                total = 7.40;
            } else {
                total = 5.40;
            }
            if (people == 1 && people == 2) {
                total = total + 1.6*distance;
            }
            if (people == 3, people == 4) {
                total = total + 1.7*distance;
            }
            if (people == 5 || people == 6) {
                total = total + 1.8*distance;
            }
            if (people >= 6) {
                total = total + 1.9*distance;
            }
            document.getElementById("output").innerHTML = "Matkasi hinnaksi tulee " + total + " €.";
        }
    </script>
</head>
<body>
    <h1>Matkalaskuri</h1>
    <form>
        <label for="people">Matkustajien määrä</label>
        <input id="people" name="people" type="number">
        <label for="distance">Matkan pituus</label>
        <input id="distance" name="distance" type="number">
        <label for="startTime">Matkan aloitusaika</label>
        <input id="startTime" name="startTime" type="number">
        <input type="button" name="submit" onclick="countPrice()" value ="Katso hinta">
    </form>
    <p id="output"></p>
</body>
</html>
````