# PHP:n alkeet 1

PHP:n syntaksissa on paljon yhteneväisyyksiä JavaScriptin kanssa, mutta erojakin löytyy. Käymme läpi PHP:n ominaisuuksia.

## Tiedostot ja ajaminen

Jotta PHP-tiedostoja saa ajettua, täytyy tiedoston pääte olla .php. PHP-koodi alkaa aina tagilla ``<?php``. Jos tiedosto sisältää vain PHP-koodia, ei sulkutagia tarvita, mutta jos PHP-koodi on esimerkiksi HTML:n seassa, pitää PHP-koodin jälkeen olla myös sulkutag eli ``?>``. Periaatteessa PHP-tiedosto voi näyttää tavalliselta HTML-tiedostolta ja siihen voi normaalisti linkittää tyylitiedoston jne, mutta sen sekaan voi lisätä PHP-koodia.

Useimmiten PHP-koodi ajetaan suoraan verkkoselaimessa, mutta tiedoston koodin voi myös ajaa myös konsolista komennolla ``php index.php``.

Voit myös käynnistää PHP:n sisäänrakennetun web-palvelimen komennolla ``php -S localhost:8888``. Periaatteessa jokin muukin portti kelpaa, mutta 8888 on perinteisin. Silloin kyseisessä sijainnissa pitää olla tiedosto, jonka nimi on *index.php*.

Konsoliin tai verkkosivulle saa kirjoitettua asioita *echo*-komennolla. Sitä voi käyttää myös lyhennetyssä muodossa eli ``<?= "How are you?" ?>``.

## Muuttujat

Muuttujiin voi tallentaa PHP:ssä samoja tietoja kuin JavaScriptissäkin. Näkyvänä erona on se, että PHP:ssä muuttujan edessä on aina dollarin ($) merkki niin sitä määriteltäessä kuin siihen viitatessakin. Muuttujien nimissä käytetään yleisesti camelcase, merkintätapaa eli moniosaisen muuttujan jälkimmäisten osien ensimmäinen kirjain kirjoitetaan isolla kirjaimella.

Merkkijonoja ja muuttujia voi yhdistää merkkijonoiksi pisteellä (.) eli plussaa ei käytetä muihin kuin laskutoimituksiin. Muuttujia voi käyttää merkkijonojen sisällä joustavammin eli niitä ei ole pakko yhdistää pisteellä muun merkkijonon kanssa.

````php
<?php

$greeting = "Hello there";
$firstName = "Anna";

echo $greeting . ", " . $firstName . "\n";
echo "How are you, $firstname? \n";
echo "Nice to meet you.";
?>
````

## Demotehtävä 1
1. Kopioi ylläoleva PHP-koodi ja tallenna se tiedostoon, jonka nimi on *greeting.php*.
2. Vaihda muuttujien arvot ja tallenna.
3. Aja koodi konsolista komennolla *php greeting.php*.

## Muuttujien tietotyypit

PHP ei ole vahvasti tyypitetty ohjelmointikieli kuten ei ole JavaScriptkään. Silti muuttujilla on olemassa tietotyypit. PHP:ssä ne ovat: 

- String (merkkijonot)
- Integer (kokonaisluvut)
- Float (desimaaliluvut)
- Boolean (totuusarvo)
- Array (taulukko)
- Object (olio)
- NULL
- Resource (referenssi ulkoiseen resurssiin kuten tietokantakyselyyn)

Jos haluat tarkistaa jonkin muuttujan tietotyypin ja arvon, se onnistuu koodilla esimerkiksi seuraavasti:

````php
    <?php
    $x = 8.33;
    echo var_dump($x);
    ?>
````

## Funktiot

Kuten JavaScriptissäkin, PHP:ssä on funktioita. Niille voi sekä antaa parametrejä että ne voivat palauttaa paluuarvoja. Funktio aloitetaan sanalla *function*, minkä jälkeen tulee funktion nimi, suluissa mahdolliset parametrit ja aaltosulkeiden sisällä varsinainen sisältö. Tyypillisesti PHP:ssä käytetään sn. snakecase -nimeämistä eli jos funktion nimi on moniosainen, eri osat erotetaan alaviivalla.

````php
    <?php
    function add_vat($price, $vat) {
        return $price * (1+$vat);
    }
    echo "Total price is: " . add_vat(55, 0.14);
    ?>
````

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
    if($temperature <= 10) {
        return "You need a jacket."
    } else {
        return "A jacket is not necessary."
    }
}
<p>During the cold months mom says: <?= wear_jacket(-5)></p>
<p>In summer mom says: <?=wear_jacket(25)></p>
?>
````

## Demotehtävä 2
1. Jatka edelliseen php-tiedostoon.
2. Luo funktio, jossa on ehtolauseke, joka palauttaa sopivan tervehdyksen riippuen siitä, mikä kellonaika sille annetaan. Eli se vastaa "Good morning!" aamulla ja aamupäivällä, "Good afternoon!" iltapäivällä, "Good evening!" alkuillasta ja "Good night!" myöhään illalla ja yöllä.
3. Tulosta tulos konsoliin.


## Switch-case

switch-rakenne on vaihtoehto useille peräkkäisille if- ja else if -lauseille.
Sitä käytetään silloin, kun samaa muuttujaa verrataan useisiin eri arvoihin.

````php
<?php
$grade = 3;

switch ($grade) {
    case 5:
        echo "Erinomainen";
        break;

    case 4:
        echo "Kiitettävä";
        break;

    case 3:
        echo "Hyvä";
        break;

    default:
        echo "Tuntematon arvosana";
}
?>
````

Voit myös yhdistää useita vaihtoehtoja:

````php
<?php
$day = "lauantai";

switch ($day) {
    case "lauantai":
    case "sunnuntai":
        echo "Viikonloppu";
        break;

    default:
        echo "Arkipäivä";
}
?>
````

## Demotehtävä 3

1. Luo muuttuja $month, johon tallennetaan kuukauden nimi merkkijonona (esim. "heinäkuu").

2. Kirjoita switch-rakenne, joka tulostaa vuodenaikaa kuvaavan viestin seuraavasti:

"joulukuu", "tammikuu", "helmikuu" → "Talvikausi leirikeskuksessa."
"maaliskuu", "huhtikuu", "toukokuu" → "Kevät tuo retkeilijöitä."
"kesäkuu", "heinäkuu", "elokuu" → "Kesäkausi on vilkkaimmillaan!"
"syyskuu", "lokakuu", "marraskuu" → "Syksy on rauhallisempaa aikaa."
Muut arvot → "Tuntematon kuukausi."

Muista käyttää break-lausetta jokaisen vaihtoehdon lopussa.

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

## Näkyvyys (scope)

Kaikki koodi ei näy kaikkialle muualle. Tätä kutsutaan nimellä scope eli näkyvyys.

PHP:ssä muuttujan näkyvyys riippuu siitä, missä se on määritelty ja onko se funktion sisällä vai ulkopuolella

Yleisin sääntö on: Funktion sisällä luotu muuttuja ei näy funktion ulkopuolelle.

### Funktion sisäinen näkyvyys

Alla oleva koodi ei toimi, koska $name on luotu funktion sisällä eikä sitä voi käyttää funktion ulkopuolella.

````php
<?php
function myFunction() {
    $name = "Anna";
    return "Moi";
}

echo $name;
?>
````

Tämä aiheuttaa virheen, koska $name on olemassa vain funktion sisällä eikä sitä ole määritelty funktion ulkopuolella.

### Muuttujan palauttaminen funktiosta

Jos haluamme käyttää arvoa funktion ulkopuolella, meidän pitää palauttaa se:

````php
<?php
function myFunction() {
    $name = "Anna";
    return $name;
}

$name = myFunction();
echo $name;
?>
````

### Globaali muuttuja PHP:ssä

Eri ohjelmointikielissä on lieviä eroja siinä, miten globaalit muuttujat näkyvät. JavaScriptissä globaalit muuttujat näkyvät laajalle, mutta PHP:ssä funktio ei automaattisesti näe globaalisti määriteltyjä muuttujia.

Alla oleva koodi ei toimi, vaikka $name on määritelty ennen funktiota:

````php
<?php
function myFunction($item) {
    echo $item . $name;
}

$name = "Anna";
myFunction("Something ");
?>
````
Funktion sisällä $name ei ole näkyvissä, ellei sitä tuoda erikseen käyttöön.

### Globaalin muuttujan käyttäminen funktiossa

Globaalin muuttujan voi tuoda funktion sisälle avainsanalla global.

````php
<?php
function myFunction($item) {
    global $name;
    echo $item . $name;
}

$name = "Anna";
myFunction("Something ");
?>
````

### Lohkon näkyvyys (block scope) PHP:ssä

JavaScriptissä muuttujat voivat olla näkyvissä vain aaltosulkeiden sisällä (block scope).
PHP toimii hieman eri tavalla.

Esimerkiksi if-lauseessa luotu muuttuja näkyy myös sen ulkopuolella:

````php
<?php
if (true) {
    $name = "Anna";
}

echo $name;
?>
````

Tämä toimii PHP:ssä, koska if, for ja while eivät luo omaa scopea samalla tavalla kuin JavaScriptissä.

Myös for-silmukan muuttuja jää näkyviin silmukan jälkeen:

````php
<?php
for ($i = 0; $i < 3; $i++) {
    echo $i;
}

echo $i; // $i on edelleen olemassa
?>
````