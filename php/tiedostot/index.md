# Ulkopuoliset tiedostot

Usein verkkopalveluissa täytyy työskennellä erilaisten tiedostojen kanssa. Niitä voidaan luoda käyttäjän antamasta syötteestä, niitä pitää joskus lukea ja ladata palvelimelle.

## Tiedoston luominen ja siihen kirjoittaminen ja sen lukeminen

PHP:ssä on funktion nimeltään ``fopen()``, joka yhtä aikaa luo että avaa tekstitiedoston. Funktiolle annetaan nimi sekä moodi, jolla siihen kirjoitetaan. Moodit ovat "w" eli write, "a" eli append ja "r" eli read. Kun käytetään writea, tarkoittaa se sitä, että tiedosto on avatessa tyhjä ja se tyhjentyy, jos siihen kirjoitetaan uudelleenavattessa jotain. Append taas tarkoittaa sitä, että tiedostoon lisätään uudet asiat, mikäli siellä on jo olemassa tekstiä eli jos tiedosto voidaan avata monta kertaa ja halutaan pitää vanha teksti, kannattaa käyttää append-moodia. Readin avulla tiedoston sisältö voidaan lukea ja esimerkiksi tulostaa echon avulla konsoliin tai verkkosivulle.

Alla olevalla koodilla luodaan koodin kanssa samaan kansioon tekstitiedosto write-moodilla:

````php
<?php
    $myfile = fopen("myfile.txt", "w");
?>
````

``fwrite()`` on funktio, jolla luotuun tiedostoon kirjoitetaan asioita sen jälkeen, kun se on avattu. Sille annetaan avatun tiedoston nimi sekä kirjoitettava teksti.

````php
<?php
    $myfile = fopen("myfile.txt", "w");
    $text = "Hello world!";
    $fwrite($myfile, $text);
?>
````

Lopuksi tiedosto suljetaan käyttämällä funktiota ``fclose()``, jolle annetaan tiedoston nimi. Tätä tarvitaan, jotta tiedoston voi avata myöhemmin uudelleen mahdollisesti toisen käyttäjän toimesta. Lisäksi avonainen tiedosto vie enemmän muistia ja voi heikentää ohjelman toimivuutta.

On myös hyvä tapa tehdä tiedoston avaukseen tarkistus, onnistuuko avaus.


````php
<?php
    $myfile = fopen("myfile.txt", "w") or die("Unable to open file!");
    $text = "Hello world!";
    $fwrite($myfile, $text);
    fclose($myfile);
?>
````

Jos haluamme lukea kyseisen tiedoston sisällön ja tulostaa sen konsoliin, käytämme funktiota ``fread()``, jolle annetaan avatun tiedoston nimi sekä tiedoston koko, joka voidaan ilmoittaa tiedonton nimenä.

````php
<?php
    $myfile = fopen("myfile.txt", "r") or die("Unable to open file!");
    $readText = fread($myfile, filesize("myfile.txt"));
    echo $readtext;
    fclose($myfile);
?>
````

## Demotehtävä 1

1. Luo PHP-tiedosto nimeltään memo.php.
2. Luo tiedostossa kaksi muuttujaa, joissa on jokin teksti.
3. Luo PHP:llä uusi tiedosto nimeltään memo.txt ja avaa se write-moodilla.
4. Kirjoita ensimmäisen muuttujan tiedot tekstitiedostoon ja sulje se. 
5. Tarkista, luotiinko tiedosto ja onko sen sisältö oikein.
6. Avaa sama tiedosto uudelleen ja kirjoita toisen muuttujan tiedot tiedostoon ja sulje tiedosto.
7. Tarkista, onko tiedostossa nyt vain jälkimmäisen muuttujan tiedot, kuten pitäisi olla.
8. Avaa tiedosto nyt uudelleen mutta append-moodissa.
9. Kirjoita ensimmäisen muuttujan tiedot tiedostoon ja sulje se.
10. Tarkista, onko tiedostossa nyt molempien muuttujien tiedot, kuten kuuluisi olla, kirjoittamalla tiedoston sisällön konsoliin.

## Tiedostojen lataaminen

HTML-lomakkeissa on yhtenä inputin vaihtoehtona tyyppi file. Tällöin kyseiseen kohtaan on mahdollista ladata jokin tiedosto, mutta kuten kaikkien syötteiden kanssa, sekin täytyy käsitellä jollakin tavalla.

Käykää lukemassa ohjeet tiedostojen lataamiseen [w3schoolsista](https://www.w3schools.com/php/php_file_upload.asp)<base target="_blank">.

## Demotehtävä 2

1. Luo uusi PHP-tiedosto nimeltään upload.php.
2. Tee tiedostoon HTML-pohja ja lomake, joka ottaa oikeaoppisesti vastaan tiedostoja.
3. Laadi koodi, joka ottaa vastaan vain kuvatiedostoja (jpg tai png). Tee tarkistukset, että samaa tiedosto ei ole jo olemassa.
4. Testaa, pystytkö lataamaan sivun kautta kuvatiedoston, voitko lisätä sen useampaan kertaan ja voitko lisätä jonkin muun tyyppisen tiedoston.