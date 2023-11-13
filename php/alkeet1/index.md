# Alkeet 1

Php:n syntaksissa on paljon yhteneväisyyksiä JavaScriptin kanssa, mutta erojakin löytyy. Käymme läpi Php:n ominaisuuksia.

## Tiedostot ja ajaminen

Jotta Php-tiedostoja saa ajettua, täytyy tiedoston pääte olla .php. Php-koodi alkaa aina tagilla ``<?php``. Jos tiedosto sisltää vain Php-koodia, ei sulkutagia tarvita, mutta jos Php-koodi on esimerkiksi HTML:n seassa, pitää Php-koodin jälkeen olla myös sulkutag eli ``?>``.

Useimmiten Php-koodi ajetaan suoraan verkkoselaimessa, mutta tiedoston koodin voi myös ajaa myös konsolista komennolla ``php index.php``.

Voit myös käynnistää Php:n sisäänrakennetun web-palvelimen komennolla ``php -S localhost:8888``. Silloin kyseisessä sijainnissa pitää olla tiedosto, jonka nimi on *index.php*.

Konsoliin saa kirjoitettua asioita *echo*-komennolla.

## Muuttujat

Muuttujiin voi tallentaa Php:ssä samoja tietoja kuin JavaScriptissäkin. Näkyvänä erona on se, että Php:ssä muuttujan edessä on aina dollarin ($) merkki niin sitä määriteltäessä kuin siihen viitatessakin.

Merkkijonoja ja muuttujia voi yhdistää merkkijonoiksi pisteellä (.) eli plussaa ei käytetä muihin kuin laskutoimituksiin. Muuttujia voi käyttää merkkijonojen sisällä joustavammin eli niitä ei ole pakko yhdistää pisteellä muun merkkijonon kanssa.

````php
<?php

$greeting = "Hello there";
$name = "Anna";

echo $greeting . " " . $name . "\n";
echo "How are you $name? \n";
echo "Nice to meet you.";
?>
````

## Demotehtävä
1. Kopioi ylläoleva Php-koodi ja tallenna se tiedostoon, jonka nimi on *greeting.php*.
2. Vaihda muuttujien arvot ja tallenna.
3. Aja koodi konsolista komennolla *php greeting.php*.