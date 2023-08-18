# Harjoitukset 2

**Ennen näitä harjoituksia tutustu aiemmin kurssilla käytyihin asioihin.**

Tee Visual Studio Code:lla uusi tiedosto, nimeä se *harjoitukset2.js*. Avaa VS:n terminaali ja aja koodi kirjoittamalla konsoliin: *node harjoitukset1.js*. Kirjoita kaikki tehtävät samaan tiedostoon allekkain.

### Tehtävä 1: Toistorakenne

Tee toistorakenne, joka tulostaa konsoliin joka toisen luvun välillä 1-20, mutta alkaen luvusta 20 ja pienenevään suuntaan.

### Tehtävä 2: Ympyrän piiri, säde ja pinta-ala

Tee funktio, joka saa parametrina ympyrän halkaisijan ja laskee ympyrän säteen, piirin ja pinta-alan, ja tulostaa vastaukset konsolille.

*Vinkki 1:* Piin arvon saa tarkasti funktiolla Math.PI.

*Vinkki 2:* Ympyrän ala lasketaan pii * r^2, piiri lasketaan 2 * pii * r, jossa r=säde. Säde puolestaan on halkaisija/2.

### Tehtävä 3: Tilikauden tulos

Tee funktio, joka saa kaksi lukua parametrina (tuotto ja kulut) ja laskee tilikauden tuloksen ja ilmoittaa, onko se voittoa vai tappiota. Funktio siis palauttaa sanan "voittoa" tai "tappiota".
Tulos lasketaan kaavalla tuotto – kulut. jos vastaus on negatiivinen, tilikausi on tappiollinen, muuten se on voitollinen.
Testaa ohjelmaa eri arvoilla ja tulosta vastaus konsolille.

### Tehtävä 4: Nelilaskin

Tee funktio, joka toimii yksinkertaisena nelilaskimena. Funktio saa parametrina kaksi lukua sekä tiedon siitä, minkä laskutoimituksen, yhteen-, vähennys-, kerto- vai jakolaskun, niillä halutaan tehdä ("+", "-", jne). Funktio tulostaa valitun laskutoimituksen sekä laskun vastauksen konsolille. Testaa funktion toiminta useilla eri arvoilla. Tee ehtorakenne käyttäen switch – case rakennetta.

### Tehtävä 5: Tuumat senteiksi

Tee funktion, joka muuntaa annetut tuumat senttimetreiksi ja palauttaa vastauksen.

Tee toinen funktio, joka tulostaa konsoliin tekstin “X tuumaa on Y senttimetriä”. X:n paikalle tulostuu annettu muuttujan tuumamitta-arvo ja Y:n paikalle senttimetriarvo.

### Tehtävä 6: On välissä

Tee funktio, joka tarkistaa, onko annettu luku välissä 0 – 10. Jos luku on ko. välillä, se palauttaa arvon *true*, muuten *false*. Testaa funktiota vähintään neljällä eri arvolla, joista yksi on yli 10, yksi alle 0, yksi suurempi kuin 0 ja pienempi kuin 10 ja yksi raja-arvo (0 tai 10, eivät kuulu välille). Jos palautettu arvo on *true*, kirjoita konsoliin *The number is between 0 and 10*. Muussa tapauksessa kirjoita konsoliin *The number is too small or too large.*.

### Tehtävä 7: Valuuttalaskin

Tee funktio, joka laskee paljonko käyttäjä saa valuuttaa. Funktio saa parametreina valuuttakurssin ja euromäärän. Palvelumaksu on 2.50€, ja se vähennetään ennen muunnosta. Muista riittävän informatiiviset tulostukset.

### Tehtävä 8: Fahrenheit

Tee funktion, joka muuntaa annetun lämpötilan Celsius-asteikolta Fahrenheit-asteikolle. Kaava:  °F = (°C) • 1,8 + 32
Testaa funktiota vähintään kolmella eri arvolla. Tee toinen funktio, joka käyttää muuntofunktiota, ja joka tulostaa lähtöarvon, tuloksen sekä yksiköt.

### Tehtävä 9: Suurin kolmesta

Tee funktio, joka saa kolme lukuarvoa, hakee niistä suurimman ja tulostaa sekä annetut lukuarvot että suurimman arvon konsolille.

### Tehtävä 10: Suuruusjärjestys

Muuta edellisen tehtävän (10. Suurin kolmesta) funktiota niin, että se järjestää saamansa kolme lukuarvoa suuruusjärjestykseen (pienimmästä suurimpaan) ja tulostaa alkuperäisen sekä suuruusjärjestyksen konsolille sopivien selitysten kera.

### Tehtävä 11: Hedelmätaulukko

Luo muuttuja, jossa on taulukko, jossa on neljä merkkijonoa, jotka sisältävät hedelmien nimiä. Lisää sitten taulukon loppuun yksi hedelmä. Tulosta taulukon sisältö konsoliin.