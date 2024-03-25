# Filtteröinti

Filtteröinnillä tarkoitetaan sitä, että saatua syötettä esimerkiksi lomakkeista suodatetaan jollakin tavalla. Siinä on oikeastaan kaksi osaa eli validointi, jolla tarkastetaan osaltaan, vastaako syöte annettuja ehtoja (esimerkiksi pituusrajoitukset ovat tällaisia ehtoja), ja sanitointi, jolla poistetaan mahdolliset haitalliset merkit tulevasta syötteestä. Molempia olemme tehneet jonkin verran. Validoinnin olemme tehneet pääosin HTML:ää käyttäen ja sanitoimisen olemme hoitaneet ``htmlspecialchars()`` funktiolla.


## filter_var

Tämä funktio voi samalla validoida ja sanitoida yksittäisen syötteen.

Sille voidaan antaa kolme parametria: ensin jonkin arvon, sitten filtterityypin ja lopuksi joko taulukon ehtoja tai bittijoukon lippuja.

Esimerkissä on merkkijono, joka sisältää HTML-koodia. ``filter_var()`` poistaa HTML-koodin merkkijonosta, kun sille annetaan kyseinen merkkijono sekä filtterityypiksi ``FILTER_SANITIZE_STRING``.

````php
<?php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>
````

On myös mahdollista tarkistaa, onko syöte numeroarvoinen. Koska ``filter_var()`` palauttaa joko suodatetun datan tai ``false``n, jos suodatus epäonnistuu, täytyy meidän tarkistaa, että filtteröinnin lopputulos ei ole ``false``, koska se ei koskaan voi olla ``true``. Lisäksi meidän on pakko tehdä erillinen tarkistus nollalle, sillä jos arvo on nolla, se on automaattisesti ``false``.

````php
<?php
$int = 100;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
?>
````

Voidaan myös tehdä validointi sähköpostiosoitteelle eli ensin se sanitoidaan ja sitten validoidaan eri filtterityypillä:

````php
$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}
?>
````

Myös URL-osoitteita voidaan filtteröidä omilla filtterityypeillä:

````php
<?php
$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("$url is a valid URL");
} else {
  echo("$url is not a valid URL");
}
?>
````
## Demotehtävä

1. Luo uusi PHP-tiedosto, jossa on HTML-pohja ja siinä lomake, joka ottaa vastaan ilmoittautumisen tapahtumaan. Kenttinä on nimi, syntymävuosi ja sähköposti sekä lähetysnappi.
2. Lomakkeen käsittelyyn lisäät ``filter_var``ia käyttäen sanitoinnin ja validoinnin. Tarkistat siis, että sähköposti on sähköposti ja syntymävuosi on numero.
3. Lisää myös lomakkeen tiedot sivulle lomakkeen alle.
4. Testaa, miltä sivulle tuleva teksti näyttää, jos nimeen laitat seuraavan: *<h1 style="color: red">Someone tries to hack you</h1>*. Testaa myös, jos sähköposti on väärässä muodossa. Mitä tapahtuu, jos poistat sanitoinnin nimestä ja lisäät sitten aiemman koodipätkän?