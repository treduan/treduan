# Merkkijonot (String)

Merkkijonot ovat tekstiä, joka vois sisältää kirjaimia, numeroita, välilyöntejä ja erikoismerkkejä. 

````js
let city = "Tampere";
let zipcode = '33720';
let password = `!JXiu77%G`;
````

## Lainausmerkit merkkijonoissa

JavaScriptissä merkkijonon voi kirjoittaa kolmella eri tavalla eli kaksoislainausmerkeillä, yksittäisillä lainausmerkeillä tai takakenoviivoilla. Kaksoislainausmerkit ja yksittäislainausmerkit toimivat keskenään samalla tavalla, mutta alussa ja lopussa on oltava samat merkit.

````js
let name = "Anna";
let city = 'Tampere';
let message = `Hei maailma`;
````

Kaksoislainausmerkit ja yksittäislainausmerkit toimivat keskenään samalla tavalla, mutta alussa ja lopussa on oltava samat merkit. Jos merkkijonossa tarvitaan kyseistä lainausmerkkiä, on parempi käyttää alussa ja lopussa toista niistä. Myös backspace-merkin ("\") käyttäminen mahdollistaa lainausmerkin käyttämisen merkkijonossa.

Sen sijaan jos käyttää takakenoviivoja ( template literals ), voi merkkijonossa käyttää muita lainausmerkkejä, muuttujia sekä jakaa merkkijonoja useammalle riville, mitä ei voi tehdä tavallisten lainausmerkkien kanssa. Takakenoviivat saa tehtyä painamalla SHIFT pohjassa takakenoviivaa, joka löytyy BACKSPACE-napin vasemmalta puolelta.

````js
let name = "Anna";
let greeting = `Hei ${name}`;
let info = `Nimi: Anna
Kaupunki: Tampere`;
````

## Merkkijonon pituus ja indeksi

Merkkijonoilla on ominaisuus *length*, jolla voidaan saada selville merkkijonon pituus.

````js
let word = "JavaScript";
console.log(word.length); // 10
````

Merkkijonon merkit on indeksoitu numerolla, mutta numerointi alkaa nollasta eikä ykkösestä.

````js
let word = "kissa";

console.log(word[0]); // k
console.log(word[1]); // i
console.log(word[4]); // a
````
Tästä syystä merkkijonon viimeinen merkki ei ole ``word[word.length]`` vaan ``word[word.length -1]``.

## Merkkijonojen yhdistäminen

Merkkijonoja voi yhdistää plusmerkillä.

````js
let name = "Anna";
let message = "Hei " + name + !;
````

Kuitenkin nykyään koko ajan suositummaksi tulee takakenoviivojen käyttö.

````js
let name = "Anna";
let message = `Hei ${name}!`;
````

## Yleisimpiä merkkijonometodeja

JavaScriptiin on sisäänrakennettuna useita metodeja, joilla merkkijonoja voi käsitellä helposti.

### toUpperCase() ja toLowerCase()

Näillä saa merkkijonon merkit joko kaikki isoiksi kirjaimiksi tai pieniksi kirjaimiksi (ei luonnollisesti vaikuta numeroihin tai erikoismerkkeihin, joita merkkijonossa saattaa olla).

````js
let text = "Hei";

console.log(text.toUpperCase()); // HEI
console.log(text.toLowerCase()); // hei
````

### trim()

Poistaa merkkijonon alusta ja lopusta välilyönnit. Tämä TÄYTYY TEHDÄ, kun käsitellään oikeissa tilanteissa käyttäjien syötteitä.

````js
let name = "  Anna  ";
console.log(name.trim()); // "Anna"
````

### includes()

Tarkistaa, löytyykö merkkijono toisesta merkkijonosta. Palauttaa totuusarvon (true/false).

````js
let sentence = "JavaScript on kivaa";

console.log(sentence.includes("kivaa")); // true
````

### indexOf()

Palauttaa merkin tai merkkien ensimmäisen indeksin.

````js
let text = "kissa";

console.log(text.indexOf("s")); // 2
`````

Jos merkkiä ei löydy:

````js
console.log(text.indexOf("x")); // -1
````

### slice()

Ottaa osan merkkijonosta.

````js
let text = "JavaScript";

console.log(text.slice(0, 4)); // Java
````

## Demoharjoitus
1. Luo muuttuja, jossa on käyttäjän nimi. Tulosta se konsoliin isoilla kirjaimilla.
2. Alla olevassa muuttujassa on ylimääräisiä välilyöntejä alussa ja lopussa. Poista ne ja tulosta lopputulos konsoliin.
````js
let text = "   JavaScript on hauskaa   ";
````
3. Tarkista, sisältääkö merkkijono sanan "koodi".
````js
let sentence = "Rakastan kirjoittaa koodia JavaScriptillä";
````
4. Tulosta merkkijonon ensimmäinen ja viimeinen merkki.
````js
let word = "ohjelmointi";
````
5. Tulosta sanasta "JavaScript" vain osa "Script".
````js
let language = "JavaScript";
````