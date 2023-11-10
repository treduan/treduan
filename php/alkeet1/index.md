# Alkeet 1

Php:n syntaksissa on paljon yhteneväisyyksiä JavaScriptin kanssa, mutta erojakin löytyy. Käymme läpi Php:n ominaisuuksia.

## Tiedostot

Jotta Php-tiedostoja saa ajettua, täytyy tiedoston pääte olla .php. Php-koodi alkaa aina tagilla ``<?php``. Jos tiedosto sisltää vain Php-koodia, ei sulkutagia tarvita, mutta jos Php-koodi on esimerkiksi HTML:n seassa, pitää Php-koodin jälkeen olla myös sulkutag eli ``?>``.

Useimmiten Php-koodi ajetaan suoraan verkkoselaimessa, mutta tiedoston koodin voi myös ajaa myös konsolista komennolla ``php index.php``.

Voit myös käynnistää Php:n sisäänrakennetun web-palvelimen komennolla ``php -S localhost:8888``. Silloin kyseisessä sijainnissa pitää olla tiedosto, jonka nimi on *index.php*.

## Muuttujat

