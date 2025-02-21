## Aikamääreet PHP:ssä

PHP:n aikaa ja päivämääriä käsittelevät omat funktiot.

Funktioita käytettäessä tulee esiin termi timestamp, joka tarkoittaa jonkin hetken ajankohtaa. Timestamp numeerinen arvo - sekunneissa aika tämän hetken ja 1.1.1970 00:00:00 Greenwich aikaa (GMT).

Aika(time) riippuu oletusaikavyöhykkeestä, joka asetetaan php.ini -tiedostossa. Sen voi myös asettaa ohjelmaan seuraavasti:

````php
date_default_timezone_set("Europe/Helsinki");
````

Tärkeimpiä funktioita ovat:

[time()](https://www.php.net/manual/en/function.time.php)<base target="_blank"> palauttaa ko. hetken timestampin.
[date()](https://www.php.net/manual/en/function.date.php)<base target="_blank">, joka muotoilee annetun timestampin eli ajankohdan oikeaan muotoon (ja jos ei anneta, käyttää tätä päivää ja kellonaikaa)
[mktime()](https://www.php.net/manual/en/function.mktime.php)<base target="_blank">, jolla voidaan luoda haluttu ajankohta

## Demotehtävä 1

1. Tutki linkkien takana olevia ajan funktioita.
2. Luo uusi PHP-tiedosto, jossa on funktio, joka saa parametriksi päivän(mktime).
3. Funktio palauttaa merkkijonon, joka kertoo, minä viikonpäivänä henkilö on syntynyt. Esim. "Your birthday was on 19th of January 1987 and it was Monday."
4. Testaa funktiota vähintään neljällä syntymäpäivällä.

## Demotehtävä 2

1. Tee ilmoittautumislomake, joka kysyy nimen, sähköpostin ja puhelinnumeron.
2. Tulosta lomakkeen lähettämisen jälkeen tiedot ruudulle lomakkeen alle, mutta lisää mukaan lähetyshetken aika.