# Näkyvyys (scope)

Kaikki koodi ei näy kaikkialle muualle. Sitä kutsutaan nimellä *scope*. Esimerkiksi funktion sisällä luotua muuttujaa ei voi käyttää funktion ulkopuolella, ellei sitä palauteta funktiosta *return*illa. 

Alla oleva koodi ei toimi, koska *name* ei näy siinä kohtaa, missä sitä yritetään tulostaa.

````js
const myFunction = () => {
    let name = "Anna";
    return "Moi";
}

console.log(name);
````

Samoin alla oleva koodi ei toimi, koska funktio ei näe muuttujaa.

````js
const myFunction = (item) => {
    console.log(name);
}

let name = "Anna";
myFunction("Something");
````

Täytyy myös muistaa, että koodin järjestyksellä on merkitystä JavaScriptissä (tämä ei välttämättä pidä paikkaansa kaikissa ohjelmointikielissä).