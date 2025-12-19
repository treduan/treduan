# Merkkijonot (strings) JavaScriptissä

Merkkijonot sisältävät tekstiä, mutta teksti voi sisältää kirjaimia, numeroita, välilyöntejä ja erikoismerkkejä. Merkkijonot merkitään aina jollakin lainausmerkkiparilla.

## Lainausmerkit

JavaScriptissä merkkijonot voi merkitä monella erilaisella lainausmerkillä.

Nämä kaikki toimivat:

````js
let name = "Anna";
let city = 'Tampere';
let message = `Hei maailma`;
````

Ensimmäiset kaksi eivät eroa toiminnaltaan toisistaan, mutta mikäli tarvitset tekstin sisällä toisen laista lainausmerkkiä (esimerkiksi englannissa heittomerkkiä eli yksinkertaista lainausmerkkiä), valitse tyypiltään eri lainausmerkit merkitsemään merkkijonoa. Alun ja lopun lainausmerkin pitää olla samanlainen eli et voi aloittaa merkkijonoa kakinkertaisilla heittomerkeillä ja lopettaa yksinkertaisiin ja toisin päin.

Takakenoviivat (template literals) toimivat eri tavalla paikoitellen. Takakenoviivojen väliin voi lisätä muuttujia dollarimerkin ja aaltosulkeiden sisään. Samoin sisällä voi käyttää lainausmerkkejä.

````js
let name = "Anna";
let greeting = `Hello ${name}`;
let reply = `Tell ${name}'s friend: "You are right".`
````

Takakenoviivalla merkitty merkkijono voidaan myös jakaa useammalle riville, mitä ei tavallisten merkkijonojen kanssa voi tehdä. Rivinvaihto on siis osa merkkijonoa ja tulostettuna rivinvaihto pysyy.

````js
let info = `Name: Anna
City: Tampere`;
````

## Merkkijonon pituus ja indeksi

Merkkijonon pituuden saa selville *length*-ominaisuutta tarkastelemalla. Huomiona, että myös välilyönnit ovat merkkejä.

````js
let word = "JavaScript";
console.log(word.length); // 10
````

Merkkijonon ideksi alkaa kuitenkin nollasta. Indeksi merkitään merkkijonomuuttujan perään hakasulkeilla.

````js
let word = "kissa";

console.log(word[0]); // k
console.log(word[1]); // i
console.log(word[4]); // a
````

Merkkijonon viimeinen merkki ei kuitenkaan ole ``word[word.length];``, vaan ``word[word.length - 1];``. ``word[word.length];`` menee yhden yli indeksin viimeisen merkin, mikä aiheuttaa virheilmoituksen.

## Yleisimmät merkkijonometodit

Metodiksi kutsutaan ohjelmointikielen sisäisiä funktioita, jotka suuntautuvat johonkin olioon (olioista opettelemme enemmän myöhemmin). Merkkijonoilla on joukko omia metodeja, joilla merkkijonoja voidaan käsitellä. Huomiona, että metodin perässä on aina sulkumerkit. 

**``toUpperCase()`` ja ``toLowerCase()``**

Nimensä mukaisesti nämä muokkaavat merkkijonoa niin, että kirjaimet ovat koko kaikki suuria tai pieniä.

````js
let text = "Hello";

console.log(text.toUpperCase()); // HELLO
console.log(text.toLowerCase()); // hello
````