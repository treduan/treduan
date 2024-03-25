# Suhteelliset polut

Suhteelliset polut ovat tapa viitata tiedostoihin ja kansioihin suhteessa nykyiseen sijaintiin. Ne ovat erityisen hyödyllisiä, kun haluamme esimerkiksi näyttää kuvia verkkosivuilla, jotka sijaitsevat eri kansioissa kuin itse HTML-koodi.

Nykyinen sijainti (tiedosto): Ensinnäkin, ymmärrä missä tiedosto, joka viittaa kuvaan, sijaitsee. Tämä on lähtökohta suhteellisille poluille.

Kuvan sijainti (kansio): Oletetaan, että kuvasi on kansiossa nimeltä “kuvat”. Tämä kansio voi olla samassa paikassa kuin HTML-tiedosto tai eri kansiossa.

Suhteellinen polku: Käytä suhteellista polkua viittaamaan kuvaan. Esimerkiksi, jos kuva “aurinko.jpg” sijaitsee “kuvat”-kansiossa, ja HTML-tiedosto on samassa kansiossa, voit käyttää seuraavaa suhteellista polkua:

````html
<img src="./kuvat/aurinko.jpg" alt="Aurinko">
````

Jos HTML-tiedosto on eri kansiossa kuin “kuvat”, voit viitata ylöspäin pisteillä ja kauttaviivoilla:

````html
<img src="../kuvat/aurinko.jpg" alt="Aurinko">
````

Tarkista polku: Varmista, että suhteellinen polku on oikein. Tarkista, että kuvan sijainti ja polku vastaavat toisiaan.
Suhteelliset polut ovat joustavia ja helpottavat tiedostojen hallintaa verkkosivuilla. Muista aina tarkistaa, että polut ovat oikein, jotta kuvat ja muut resurssit näkyvät oikein sivustolla. 