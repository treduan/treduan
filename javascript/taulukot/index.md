# Taulukot (Arrays)


Taulukkoon voi tallentaa erilaista tietoa: lukuja, merkkijonoja, totuusarvoja, toisia taulukoita, olioita tai jopa funktioita. Tieto sijaitsee taulukossa järjestyksessä, eli taulukon alkioihin voi viitata niiden sijaintiin liittyvällä indeksillä (kokonaisluku, indeksointi alkaa nollasta).

```js
let myList = ["milk", 303, true, [1, 2, 3]];
```

Tämän taulukon toinen alkio (luku 303) saataisiin kirjoittamalla:

```js
myList[1];
```

Taulukon alkion voi korvata sijoittamalla ko. indeksiin jotain muuta:

```js
myList[1] = "uusi arvo";
```

Taulukon pituus voi vaihdella, siihen voi lisätä uusia alkoita *push*:in avulla (palauttaa lisätyn alkion indeksin ja lisää uuden alkion taulukon loppuun). Alkioita voi poistaa taulukosta *pop*:in avulla (palauttaa taulukon viimeisen alkion, ja poistaa sen samalla taulukosta).

```js
myList.push("butter");
myList.pop();
```

Listan pituuden saa selville *length*:in avulla.

```js
myList.length;
```

## Demotehtävä 1

1. Luo taulukko, jossa on viisi päättämääsi numeroa. Tulosta numeroista kolmas konsoliin.
2. Lisää taulukkoon yksi numero lisää. Tulosta taulukon pituus niin, että konsolissa lukee *The length of the array is:* + pituus.
3. Vaihda taulukon kolmas arvo niin, että se on itsensä kerrottuna kahdella. Tulosta se konsoliin.
