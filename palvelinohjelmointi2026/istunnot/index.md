## Istunnot

Istunto eli session on yksi tapa tallentaa tietoa muuttujiin sillä tavalla, että sitä voi käyttää monilla sivuston eri sivuilla. Tiedot tallennetaan avain-arvo -pareina. PHP:ssä on valmiina toiminnallisuudet istunnon hallintaan. 

Istunto aloitetaan kirjoittamalla ennen HTML-koodia ``<?php session_start(); ?>``

Istuntoon saa tallennettua asioita seuraavasti. Ensimmäisenä aloitetaan istunto, ja PHp-tagien sisällä voi asettaa istuntoon asioita käyttäen *$_SESSION*ia.

````php
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>
````

Voimme tehdä toisen tiedoston samaan kansioon, missä voimme hakea asetetut tiedot.

````php
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>
````

Istunnon muuttujat voi myös poistaa tietyissä tilanteissa kirjoittamalla ``session_unset()`` ja istunnon voi lopettaa kirjoittamalla ``session_destroy()``.

````php 
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</body>
</html>
````

## Istunnon muuttujien käyttäminen

Yleensä, jos käytämme istunnon muuttujia, joudumme ensin tarkistamaan, onko sellaisia muuttujia ylipäätään asennettu, jotta emme saa virheitä. Esimerkkinä haemme taulukkoa ja jos sellaista ei löydy, luodaan tyhjä taulukko istuntoon. Tässä on käytetty lyhennettyä kirjoitustapaa, jossa ennen kysymysmerkkiä esitetty ehto on ikään kuin if-lausekkeen alku ja sen jälkeen tulee else-lauseke.

````php
<?php
$array = isset($_SESSION['array']) ? $_SESSION['array']: [];
?>
````

## Demotehtävä
1. Tee uusi PHP-tiedosto, jossa on HTML-koodia. Avaa istunto ennen HTML-koodin alkua.
2. Lisää PHP-koodia, jossa asetat istunnon muuttujaan suosikkipelisi.
3. Hae tämä peli istunnosta ja tulosta se sivulle.
4. Luo toinen PHP-sivu, jolla on HTML-koodia. Avaa myös siinä istunto.
5. Tarkista, onko istuntoon tallennettu suosikkipeliä. Jos ei ole, luo se, mutta anna arvoksi "No game catches my fancy.". Käy tarkistamassa aiemmalta sivulta, mikä suosikkipeli on.