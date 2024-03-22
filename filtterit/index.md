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

On myös mahdollista tarkistaa, onko syöte numeroarvoinen. Koska ``filter_var()`` palauttaa joko suodatetun datan tai ``false``n, jos suodatus epäonnistuu, täytyy meidän tarkistaa, että filtteröinnin lopputulos ei ole ``false``, koskase ei koskaan voi olla ``true``. 

````php
<?php
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
?>
````

## filter_list

Tämä funktio auttaa järjestämään 