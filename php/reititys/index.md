# Reititys

PHP:ssä reititys on prosessi, joka määrittää, miten HTTP-pyynnöt ohjataan eri osiin sovellusta. Tämä on erityisen hyödyllistä web-sovellusten kehittämisessä, kun halutaan hallita eri sivujen ja toimintojen näyttämistä selaimelle.

Tavallisesti reititys perustuu URL-osoitteisiin ja niiden polkuihin. Esimerkiksi, kun käyttäjä pyytää tiettyä URL-osoitetta, reititysjärjestelmä ohjaa pyynnön tiettyyn koodilohkoon, joka käsittelee kyseisen pyynnön ja määrittää mitä näytetään käyttäjälle.

Tähän asti olemme käyttäneet esimerkiksi linkeissä suoria viittauksia toisiin tiedostoihin, esim. ``about.php``, jolloin pääsemme sivulle, jonka osoite voi lokaalisti olla ``localhost:8888/about.php``. Tämä ei kuitenkaan ole kaikkein kaunein tapa viitata sivuun.