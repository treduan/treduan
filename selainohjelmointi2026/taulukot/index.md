# Taulukot (Arrays)


Taulukkoon voi tallentaa erilaista tietoa: lukuja, merkkijonoja, totuusarvoja, toisia taulukoita, olioita tai jopa funktioita. Tieto sijaitsee taulukossa järjestyksessä, eli taulukon alkioihin voi viitata niiden sijaintiin liittyvällä indeksillä (kokonaisluku, indeksointi alkaa nollasta).

```js
let myList = ["milk", 303, true, 5.5];
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

---

## For-loop

*for*-silmukan avulla voidaan toteuttaa toistoa vaativia toimenpiteitä esim. käydä läpi taulukoita. *for*-silmukka toistaa sen sisään kirjoitettua koodia, kunnes sen ehtona oleva lauseke ei enää ole totta. *for*-lauseessa ensin alustetaan silmukka (esim. *let i=0*), sitten kirjoitetaan ehto, joka pitää silmukan toiminnassa, ja lopuksi lauseke, joka päivittää silmukan tilaa (esim. *i++*):

```js
let myList = [5, 7, 22, 9];
for(let i=0; i < myList.length; i++){
    console.log(myList[i]);
}
```

*i* on lyehennelmä sanasta *index* ja kuuluu niihin lyhenteisiin, joiden käyttö on täysin hyväksyttävää varsinkin *for*-loopissa.

*for*-loopulla on mahdollista käydä taulukko läpi myös päinvastaisessa järjestyksessä seuraavalla koodilla:

````js
let array = [4, 7, 2, 9, 17];

for(let i = array.length-1; i >= 0; i--) {
    console.log(array[i]);
}
````

## map ja foreach

*map* ja *foreach* ovat metodeja, jotka toimivat taulukoille. Niiden avulla voidaan toteuttaa toistoa vaativia operaatioita helposti (ilman *for*-looppia). Nämä funktiot ovat ns. *higher order*-funktioita, mikä tarkoittaa, että niille annetaan parametrina funktio.

Näissä esimerkeissä funktio on annettu nuolifunktiona (lyhyempi):

```js
let list = [1, 2, 3, 4];
let newList = list.map(item => 10 * item);
newList.forEach(item => console.log(item));
```

Näissä esimerkeissä funktion on annettu perinteisessä muodossa (samat kuin yllä):

```js
let newList = a.map(function(item){ return 10 * item });
newList.forEach(function(item){ console.log(item) });
```
## While-loop

*while* saa aikaan silmukan, jossa jotakin tehdään niin kauan, kun sille annettu ehto täyttyy. Jos ehto ei täyty lainkaan, silmukan sisään ei mennä.

````js
let i = 0;
let text;
while (i < 10) {
  text = "The number is " + i;
  console.log(text);
  i++;
}
````

## do while -loop
*do while* on muunnos tavallisesta *while* loopista. Ero on se, että siinä *do*n sisällä oleva asia tehdään kerran, ennen kuin tarkistetaan ehdon täyttymistä.

````js
let i = 0;
let text;
do {
  text += "The number is " + i;
  i++;
}
while (i < 10);
````


## Muuttujan arvon muuttaminen lyhenteillä

JavaScript tukee seuraavia lyhennemerkintöjä:

| Lyhenne:    | Merkitys:  |
| ------------- |:-------------:|
| i++  | i = i + 1 |
| i--  | i = i - 1 |
| i += 2 | i = i + 2 |
| i -= 2 | i = i - 2 |
| i *= 10 | i = i * 10 |
| i /= 10 | i = i / 10 |
| i %= 5 | i = i % 5 |
| i **= 3 | i = i ** 3 |

## Loopin keskeytys

Joskus jos loopissa on jokin vika, on mahdollista, että päädytään ikuiseen looppiin eli koodi toistuu loputtomasti. Minkä tahansa koodin suorittamisen voi keskeyttää konsolissa näppäinyhdistelmällä *Ctrl+C*. 


## Demoharjoitus 2
1. Luo taulukko, jossa on viisi päättämääsi numeroa. Luo funktio, joka saa taulukon ja tulostaa taulukon sisältö näkyviin käyttämällä *for* looppia.
2. Luo funktio, joka saa saman taulukon, mutta tulostaakin sen päinvastaisessa järjestyksessä.
3. Luo uusi taulukko vanhasta taulukosta käyttäen *map* -metodia. Kun luot uuden taulukon, kerro jokainen taulukon numero kolmella. Tulosta taulukon sisältö *forEach* -metodilla.
4. Luo funktio, jossa on muuttuja, jonka arvo on alussa 0. Luo sinne *while* looppi, joka tulostaa tekstin *Inside while loop*, kunnes muuttujan arvo on 10. Kasvata arvoa joka tulostuksen jälkeen kahdella.
