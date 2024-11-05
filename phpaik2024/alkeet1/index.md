# Alkeet 1

Php:n syntaksissa on paljon yhteneväisyyksiä JavaScriptin kanssa, mutta erojakin löytyy. Käymme läpi Php:n ominaisuuksia.

## Tiedostot ja ajaminen

Jotta Php-tiedostoja saa ajettua, täytyy tiedoston pääte olla .php. Php-koodi alkaa aina tagilla ``<?php``. Jos tiedosto sisältää vain Php-koodia, ei sulkutagia tarvita, mutta jos Php-koodi on esimerkiksi HTML:n seassa, pitää Php-koodin jälkeen olla myös sulkutag eli ``?>``. Periaatteessa Php-tiedosto voi näyttää tavalliselta HTML-tiedostolta ja siihen voi normaalisti linkittää tyylitiedoston jne, mutta sen sekaan voi lisätä Php-koodia.

Useimmiten Php-koodi ajetaan suoraan verkkoselaimessa, mutta tiedoston koodin voi myös ajaa myös konsolista komennolla ``php index.php``.

Voit myös käynnistää Php:n sisäänrakennetun web-palvelimen komennolla ``php -S localhost:8888``. Periaatteessa jokin muukin portti kelpaa, mutta 8888 on perinteisin. Silloin kyseisessä sijainnissa pitää olla tiedosto, jonka nimi on *index.php*.

Konsoliin tai verkkosivulle saa kirjoitettua asioita *echo*-komennolla. Sitä voi käyttää myös lyhennetyssä muodossa eli ``<?= "How are you?" ?>``.

## Muuttujat

Muuttujiin voi tallentaa Php:ssä samoja tietoja kuin JavaScriptissäkin. Näkyvänä erona on se, että Php:ssä muuttujan edessä on aina dollarin ($) merkki niin sitä määriteltäessä kuin siihen viitatessakin. Muuttujien nimissä käytetään yleisesti camelcase, merkintätapaa eli moniosaisen muuttujan jälkimmäisten osien ensimmäinen kirjain kirjoitetaan isolla kirjaimella.

Merkkijonoja ja muuttujia voi yhdistää merkkijonoiksi pisteellä (.) eli plussaa ei käytetä muihin kuin laskutoimituksiin. Muuttujia voi käyttää merkkijonojen sisällä joustavammin eli niitä ei ole pakko yhdistää pisteellä muun merkkijonon kanssa.

````php
<?php

$greeting = "Hello there";
$name = "Anna";

echo $greeting . ", " . $name . "\n";
echo "How are you $name? \n";
echo "Nice to meet you.";
?>
````

## Demotehtävä 1
1. Kopioi ylläoleva Php-koodi ja tallenna se tiedostoon, jonka nimi on *greeting.php*.
2. Vaihda muuttujien arvot ja tallenna.
3. Aja koodi konsolista komennolla *php greeting.php*.

## Muuttujien tietotyypit

Php ei ole vahvasti tyypitetty ohjelmointikieli kuten ei ole JavaScriptkään. Silti muuttujilla on olemassa tietotyypit. Php:ssä ne ovat: 

- String (merkkijonot)
- Integer (kokonaisluvut)
- Float (desimaaliluvut)
- Boolean (totuusarvo)
- Array (taulukko)
- Object (olio)
- NULL
- Resource (referenssi ulkoiseen resurssiin kuten teitokantakyselyyn)

Jos haluat tarkistaa jonkin muuttujan tietotyypin ja arvon, se onnistuu koodilla esimerkiksi seuraavasti:

````php
    <?php
    $x = 8.33;
    echo var_dump($x);
    ?>
````

## Funktiot

Kuten JavaScriptissäkin, Php:ssä on funktioita. Niille voi sekä antaa parametrejä että ne voivat palauttaa paluuarvoja. Functio aloitetaan sanalla *function*, minkä jälkeen tulee funktion nimi, suluissa mahdolliset parametrit ja aaltosulkeiden sisällä varsinainen sisältö. Tyypillisesti Php:ssä käytetään sn. snakecase -nimeämistä eli jos funktion nimi on moniosainen, eri osat erotetaan alaviivalla.

````php
    <?php
    function add_vat($price, $vat) {
        return $price * (1+$vat);
    }
    echo "Total price is: " . add_vat(55, 0.14);
    ?>
````

## Ehtolauseet

### Matemaattiset operaattorit

PHP:ssä toimivat samat matemaattiset operaattorit kuin JavaScriptissäkin:

```php
<?php
$a = 3;
$b = 4;
echo "$a + $b=" . $a + $b;
echo "$a * $b=" . $a * $b;
echo "$a / $b=" . $a / $b;
echo "$a - $b=" . $a - $b;
echo "$a % $b=" . $a % $b;
```

### Loogiset operaattorit

PHP:ssä toimivat samat loogiset operaattorit kuin JavaScriptissäkin (and, or, not):

| merkintä | merkitys |
| ----------| --------|
| $a && $b	| tosi, kun sekä $a että $b ovat tosia |
| $a \|\| $b	| tosi, kun vähintään toinen ($a tai $b) on tosi |
| !$a |	tosi, kun $a on epätosi |

### Vertailuoperaattorit

PHP:ssä toimivat samat vertailuoperaattorit kuin JavaScriptissäkin:

| merkintä | merkitys |
| ----------| --------|
| $a == $b |	$a on yhtäsuuri kuin $b |
|$a === $b	|$a on yhtäsuuri ja samaa |tietotyyppiä kuin $b |
|$a != $b	|$a on erisuuri kuin $b|
|$a !== $b	|$a on erisuuri kuin $b tai eri tietotyyppiä|
|$a < $b	|$a on pienempi kuin $b|
|$a > $b	|$a on suurempi kuin $b|
|$a <= $b	|$a on pienempi tai yhtäsuuri kuin $b|
|$a >= $b	|$a on suurempi tai yhtäsuuri kuin $b|

Funktiot voivat sisältää myös ehtolauseita, joissa operoidaan ylläolevilla asioilla. Eli luodaan *if*, *elseif* ja *else* -rakenteita.

````php
<?php
function wear_jacket($temperature) {
    if($temperature <= 10)
        return "You need a jacket."
    else
        return "A jacket is not necessary."
}
<p>During the cold months mom says: <?= wear_jacket(-5)></p>
<p>In summer mom says: <?=wear_jacket(25)></p>
?>
````

## Demotehtävä 2
1. Jatka edelliseen php-tiedostoon.
2. Luo funktio, jossa on ehtolauseke, joka palauttaa sopivan tervehdyksen riippuen siitä, mikä kellonaika sille annetaan. Eli se vastaa "Good morning!" aamulla ja aamupäivällä, "Good afternoon!" iltapäivällä, "Good evening!" alkuillasta ja "Good night!" myöhään illalla ja yöllä.
3. Tulosta tulos konsoliin.

## Kommenttimerkit

PHP:ssä toimivat samat kommenttimerkit kuin JavaScriptissä:

```php
<?php
// yhden rivin kommentti

/* monen rivin
kommentti */
?>
```

Jos kommentti osuu HTML-osaan (php-tagien ulkopuolelle) se on:

```html
<!-- html kommmentti -->
```
## Harjoitukset:
Harjoittelemme Php:n perussyntaksia käyttäen w3schoolsin materiaaleja. Sieltä löytyy myös lisää Php:n syntaksista.

1. Tee [w3schoolin PHP-harjoitukset](https://www.w3schools.com/php/php_exercises.asp)<base target="_blank">. Lue ensin kyseinen osio. Osiot ovat Variables, Echo/Print, Data Types, Strings, Numbers, Math, Constants, Operators, If...Else...Elseif, Switch ja Functions.

2. Tee [w3schoolin PHP-quiz](https://www.w3schools.com/php/php_quiz.asp)<base target="_blank">. Samat osiot.