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