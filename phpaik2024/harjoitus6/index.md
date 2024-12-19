# Harjoitus 6 - Reseptipankki

Teemme verkkosivun, jolle käyttäjä voi rekisteröityä ja kirjautua, minkä jälkeen hän voi katsella, lisätä, muokata ja poistaa reseptejä. Lisäksi reseptejä voi suodattaa niiden tyypin mukaan. Reseptin voi luoda tiedostoksi tulostamista varten. Sivustolla on myös sivu, jolta voi lukea eri kategorioista, omat tiedot -sivu (kirjautuneille) ja yhteystiedot -sivu.

1. Luo ensin tiedostorakenne MVC-mallin mukaisesti.
2. Luo sivuston reititys, jotta siellä on etusivu, kategoriasivu, omat tiedot -sivu yhteystietosivu. Sivuilla on sama header ja footer. Headerissa on kaikille yhteinen navigaatio, jossa omat tiedot -sivu näkyy vain kirjautuneille käyttäjille. Kategoriat ja yhteystiedot pääsee näkemään myös kirjautumaton.
3. Luo tietokanta ja tietokantataulut. Käyttäjällä pitää olla id, nimimerkki, salasana, sähköpostiosoite ja syntymävuosi. Nimimerkki ja sähköpostiosoite eivät saa olla sellaiset, jotka jo löytyvät tietokannasta. Reseptillä pitää olla id, nimi, lisäyspäivämäärä, kategoria (aamiainen, pääruoka, välipala, jälkiruoka, muu tms), ainesosaluettelo ja valmistusohjeet. Voit tehdä tämän joko yhtenä tauluna tai halutessasi jakaa sen järkeviin osiin eli esimerkiksi ainesosat voivat olla oma taulunsa, joka yhdistetään reseptiin jne.
4. Luo rekisteröityminen ja kirjautuminen. Validoi nämä järkevällä tavalla. Haluamme, että käyttäjät ovat vähintään 15-vuotiaita eli tähän myös tarkistukset.
5. Hae käyttäjän tiedot salasanaa lukuun ottamatta omat tiedot -sivulle.
6. Luo reseptien etusivulle linkki uuden reseptin luomissivulle ja tee sinne reseptin luominen. Kategoriat toimivat select-valikolla. Kun resepti on luotu, ohjaa käyttäjä kaikkien reseptien sivulle. Muista sanitoida ja validoida kaikki tiedot.
7. Luo sivu, jolla reseptiä voi katsoa (linkki voi olla koko reseptin klikkaus tai etusivulla voi näyttää vain reseptin nimen ja kategorian sekä Lue lisää -linkki). Koko sivun reseptissä on napit reseptin muokkaamiselle sekä sen poistamiselle. Tee poistaminen sekä muokkaaminen.
8. Lisää reseptisivulle mahdollisuus ladata se omaksi pdf-tiedostoksi nappia painamalla. Kun nappia on painettu, tulee esiin teksti, joka kertoo, että tiedosto on luotu.
9. Luo kaikkien reseptien sivu, jotta kaikki reseptit näkyvät siellä. Lisää suodatus niin, että reseptejä voi katsella kategorioiden mukaan.
10. Tee kokonaisuudesta siistin näköinen. CSS omaan tiedostoon.

## Lisätehtävät:

1. Jokaiseen reseptiin voi lisätä kuvia lataamalla kuvat palvelimelle.