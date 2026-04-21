# Harjoitus 7 - Reseptipankki

Teemme verkkosivun, jolle käyttäjä voi rekisteröityä ja kirjautua, minkä jälkeen hän voi katsella, lisätä, muokata ja poistaa reseptejä. Lisäksi reseptejä voi suodattaa niiden tyypin mukaan. Reseptin voi luoda PDF-tiedostoksi tulostamista varten. Sivustolla on myös sivu, jolta voi lukea eri kategorioista, omat tiedot -sivu (kirjautuneille) ja yhteystiedot -sivu.

1. Luo ensin tiedostorakenne MVC-mallin mukaisesti.
2. Luo sivuston reititys, jotta siellä on etusivu, kategoriasivu, omat tiedot -sivu yhteystietosivu. Sivuilla on sama header ja footer. Headerissa on kaikille yhteinen navigaatio, jossa omat tiedot -sivu näkyy vain kirjautuneille käyttäjille. Kategoriat ja yhteystiedot pääsee näkemään myös kirjautumaton.
3. Luo tietokanta ja tietokantataulut. Käyttäjällä pitää olla id, nimimerkki, salasana, sähköpostiosoite ja syntymävuosi. Nimimerkki ja sähköpostiosoite eivät saa olla sellaiset, jotka jo löytyvät tietokannasta. Reseptillä pitää olla id, nimi, lisäyspäivämäärä, kategoria (aamiainen, pääruoka, välipala, jälkiruoka, muu tms), ainesosaluettelo, valmistusohjeet ja lisääjä. Voit tehdä tämän joko yhtenä tauluna tai halutessasi jakaa sen järkeviin osiin eli esimerkiksi ainesosat voivat olla oma taulunsa, joka yhdistetään reseptiin jne.
4. Luo rekisteröityminen ja kirjautuminen. Validoi nämä järkevällä tavalla. Haluamme, että käyttäjät ovat vähintään 15-vuotiaita eli tähän myös tarkistukset.
5. Hae käyttäjän tiedot salasanaa lukuun ottamatta omat tiedot -sivulle.
6. Luo reseptien etusivulle linkki uuden reseptin luomissivulle, jos käyttäjä on kirjautunut, ja tee sinne reseptin luominen. Kategoriat toimivat select-valikolla. Kun resepti on luotu, ohjaa käyttäjä kaikkien reseptien sivulle. Muista sanitoida ja validoida kaikki tiedot.
7. Kaikkien reseptien sivulla hae kaikki reseptit, mutta näytä niistä vain nimi, kategoria ja lisääjän nimi.
8. Luo sivu, jolla yksittäistä reseptiä voi katsoa. Koko sivun reseptissä on ainesosat ja valmistusohjeet sekä napit reseptin muokkaamiselle ja sen poistamiselle, jos reseptiä katsoo sen kirjoittaja. Tee poistaminen sekä muokkaaminen.
9. Lisää reseptisivulle mahdollisuus ladata se omaksi PDF-tiedostoksi nappia painamalla. Kun nappia on painettu, tulee esiin teksti, joka kertoo, että tiedosto on luotu.
10. Lisää kaikkien reseptien sivulle suodatus niin, että reseptejä voi katsella kategorioiden mukaan tai lisäysvuoden mukaan (tai molempien).
11. Tee kokonaisuudesta siistin näköinen. CSS omaan tiedostoon.

## Lisätehtävät:

1. Jokaiseen reseptiin voi lisätä kuvia lataamalla kuvat palvelimelle. Jos kuvaa ei ole, näytetään jokin placeholder-kuva.
2. Tutki, miten toimii SCSS, ja käytä sitä sivuston muotoiluun perus CSS:n sijaan.
3. Tutki, miten PHP:ssä toimii sivutus eli se, että jos reseptejä on paljon, kaikkia ei näytetä yhtä aikaa, vaan esimerkiksi yhdeksän kerrallaan (määrä riippuu siitä, miten asettelu toimii sivullasi hyvin, yhdeksän ajatus olisi, että olisi kolme riviä, joilla on kolme reseptiä, mutta se voisi olla jotain muutakin) ja sitten seuraavat yhdeksän jne.