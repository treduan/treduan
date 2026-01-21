# JavaScript-harjoitukset 1

Nämä harjoitukset ovat opettajalle GitHubin kautta palautettavia harjoituksia. Tee nämä harjoitukset kansioon nimeltään *JavaScript-harjoitukset*. Voit tehdä kaikki tämän harjoituksen tehtävät allekkain samaan tiedostoon nimeltään *harjoitukset1.js*. Voit ajaa harjoitukset konsolissa kirjoittamalla *node harjoitukset1.js*.

Nämä tehtävät yhdistävät osia Johdanto, Muuttuja ja tyypit, Matemaattiset operaatiot, Funktiot ja Ehtolauseet.

## Harjoitus 1

1. Kirjoita funktio calculateDiscount(), joka saa kaksi parametria:
- alkuperäinen hinta
- alennusprosentti
2. Jos jompikumpi parametri ei ole numero, tulosta virheilmoitus.
3. Jos alennusprosentti on pienempi kuin 0 tai suurempi kuin 100, tulosta virheilmoitus.
4. Muuten laske ja tulosta alennettu hinta funktiossa.
5. Testaa funktiota seuraavilla: 55 ja 20, "Moikka" ja 15, 69.90 ja -25 sekä 1299 ja 120.

## Harjoitus 2

1. Kirjoita funktio describeTemperature(), joka saa lämpötilan (numero).
2. Jos parametri ei ole numero, tulosta virheilmoitus.
3. Jos lämpötila on:
- alle 0 → "Pakkasta"
- 0–15 → "Viileää"
- 16–25 → "Lämmintä"
- yli 25 → "Kuuma"
4. Testaa funktiota seuraavilla arvoilla: 8, -25, "Viisi", 33

## Harjoitus 3

1. Kirjoita funktio calculateTaxiCost(), joka saa matkustavien henkilöiden määrän ja kilometrimäärän.
2. Jos jompikumpi parametri ei ole numero, tulosta virheilmoitus.
3. Jos henkilöiden määrä on vähemmän kuin 1 tai enemmän kuin 8, tulosta ilmoitus *Matkustajien määrän pitää olla välillä 1-8*.
4. Jos matka on 0 tai vähemmän, tulosta virheilmoitus *Matkan on oltava vähintään 0.1 km*.
5. Jos matka on yli 200 km, tulosta *Yli 200 km matkoissa, ota yhteys yritykseen.*
6. Matkan aloitusmaksu on 6.50 €.
7. Matkan hintaan vaikuttaa henkilöiden määrä:
- 1-2 matkustajaa, 2.2 €/km
- 3-4 matkustajaa, 2.5 €/km
- 5-6 matkustajaa, 2.9 €/km
- 7-8 matkustajaa, 3.2 €/km
8. Tulosta hinta konsoliin muodossa "Matkasi hinta on X €."
9. Testaa funktiota seuraavilla arvoilla: 4 ja 19.3, "Kuusi" ja 12, 5 ja -11, -1 ja 22.5.