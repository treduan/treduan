# Harjoitus 6

Luomme oman ohjelman käyttäen MVC-mallia, jonka esimerkki löytyy [täältä](https://github.com/otredu/news_2021/tree/master)<base target="_blank">. Aiheena on seurata itse luettuja kirjoja, pelattuja pelejä ja katsottuja elokuvia ja sarjoja, jos on kirjautunut sisään. Sinne siis kirjoitetaan arvosteluja kyseisistä asioista.

1. Ensin luodaan tietokanta. Sinne tarvitaan taulu nimeltään arvostelu. Sillä on ominaisuuksina id, päiväys (voi olla automaattinen), arvosteltavan tyyppi (kirja, peli, elokuva, sarja), arvosteltavan nimi, arvosana (1-5, voidaan näyttää tähtinä), sanallinen arvio ja arvostelijan id. Lisäksi tarvitaan taulu käyttäjälle. Sillä on ominaisuuksina id, käyttäjänimi ja salasana.

2. Luo kansiorakenne MVC-mallille. Siellä pitää siis olla erikseen vähintään neljä kansiota eli controllers, models, public ja views (katso mallia tarvittaessa).

3. Laadi models-kansioon tiedosto, jolla saat yhteyden tietokantaan. Tee myös index.php -tiedosto public-kansioon.

4. Aloitetaan rekisteröitymisestä ja sisäänkirjautumisesta. Laadi etusivunäkymä, rekisteröitymisnäkymä sekä kirjautumisnäkymä views-kansioon ja niihin tarvittavat lomakkeet. Etusivulla voi alkuun olla vain linkki/nappi rekisteröitymiseen ja kirjautumiseen.

5. Laadi reititys sivuille index.php-tiedostoon.

6. Lisää mallin mukaan controllers-kansioon userController.php -tiedosto ja sen sisältö.

7. Lisää mallin mukaan models-kansioon users.php -tiedosto ja sen sisältö.

8. Testaa, onnistuuko rekisteröityminen ja sisäänkirjautuminen.

9. Kun kirjautuminen onnistuu, lisää näkymät arvostelun lisäämiselle ja muokkaamiselle, controllerit ja mallit niille. Huomiona, että päiväys voi olla automaattinen eli koodilla haetaan arvostelun lähetyshetken aika. Muista lisätä sivut reititykseen. Testaa, että saat lisättyä arvostelun. Lisää sitten pääsivulle kaikkien arvostelujen näkymä ja jokaiseen linkki muokkausta ja poistoa varten.

10. Tee mahdollisuus poistaa arvostelu, jos kirjautunut henkilö on itse tehnyt arvostelun.


## Lisäkohtia

1. Tee käyttäjän oma sivu, jolla hän näkee kirjautuneena omat tietonsa sekä kaikki omat arvostelunsa.

2. Lisää tietokantaan arvosteluun arvostelun tyyppiin SET, jossa on vaihtoehdot kirja, peli, elokuva ja sarja. Arvostelua luodessa arvosteltavan tyypissä on select-valikko, josta voi valita tyypin. Tee sitten sivulle filtteröinti niin, että siellä näytetään joko kaikki arvostelut tai arvostelut tietyn tyypin mukaan. 