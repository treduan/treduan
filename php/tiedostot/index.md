# Ulkopuoliset tiedostot

Usein verkkopalveluissa täytyy työskennellä erilaisten tiedostojen kanssa. Niitä voidaan luoda käyttäjän antamasta syötteestä, niitä pitää joskus lukea ja ladata palvelimelle.

## Tiedoston luominen ja siihen kirjoittaminen

PHP:ssä on funktion nimeltään ``fopen()``, joka yhtä aikaa luo että avaa tekstitiedoston. Funktiolle annetaan nimi sekä moodi, jolla siihen kirjoitetaan. Moodit ovat "w" eli write ja "a" eli append. Kun käytetään writea, tarkoittaa se sitä, että tiedosto on avatessa tyhjä ja se tyhjentyy, jos siihen kirjoitetaan uudelleenavatessa jotain. Append taas tarkoittaa sitä, että tiedostoon lisätään uudet asiat, mikäli siellä on jo olemassa tekstiä.

Alla olevalla koodilla luodaan koodin kanssa samaan kansioon tekstitiedosto write-moodilla:

````php
<?php
    $myfile = fopen("myfile.txt", "w");
?>
````

``fwrite()`` on funktio, jolla luotuun tiedostoon kirjoitetaan asioita sen jälkeen, kun se on avattu.