# Taulukot (Arrays)

Taulukkoon voi tallentaa erilaista tietoa: lukuja, merkkijonoja, totuusarvoja, toisia taulukoita, olioita tai jopa funktioita. Tieto sijaitsee taulukossa järjestyksessä, eli taulukon alkioihin voi viitata niiden sijaintiin liittyvällä indeksillä (kokonaisluku, indeksointi alkaa nollasta).

```js
let myList = ["milk", 303, true, 5.5];
```

Tämän taulukon toinen alkio (luku 303) saataisiin kirjoittamalla:

```js
myList[1];
```

Joskus tahdomme myös luoda tyhjän taulukon, varsinkin jos odotamme tallentavamme käyttäjän syötettä.

````js
let shoppingList = [];
````

Taulukon alkion voi korvata sijoittamalla ko. indeksiin jotain muuta:

```js
myList[1] = "uusi arvo";
```

Taulukon pituus voi vaihdella, siihen voi lisätä uusia alkoita *push*:in avulla (palauttaa uuden taulukon pituuden ja lisää uuden alkion taulukon loppuun). *unshift*:in avulla voidaan lisätä alkio taulukon alkuun. Alkioita voi poistaa taulukosta *pop*:in avulla (palauttaa taulukon viimeisen alkion, ja poistaa sen samalla taulukosta). *shift*:in avulla voidaan poistaa taulukon ensimmäinen alkio ja kaikkien indeksi laskee yhdellä (palauttaa poistettavan alkion arvon).

```js
myList.push("butter");
myList.unshift("milk");
myList.pop();
myList.shift();
```

Taulukon pituuden saa selville *length*:in avulla.

```js
myList.length;
```

Jos yrität tulostaa taulukosta alkion, jota ei ole olemassa, saat tulostettua ``undefined``.

````js
let list = [1, 2, 3];
console.log(list[10]); // undefined
````

## Demotehtävä 1

1. Luo taulukko, jossa on viisi päättämääsi numeroa. Tulosta numeroista kolmas konsoliin.
2. Lisää taulukon loppuun yksi numero lisää. Tulosta taulukon pituus niin, että konsolissa lukee *The length of the array is:* + pituus.
3. Vaihda taulukon kolmas arvo niin, että se on itsensä kerrottuna kahdella. Tulosta se konsoliin.


## For-loop

*for*-silmukan avulla voidaan toteuttaa toistoa vaativia toimenpiteitä esim. käydä läpi taulukoita. *for*-silmukka toistaa sen sisään kirjoitettua koodia, kunnes sen ehtona oleva lauseke ei enää ole totta. *for*-lauseessa ensin alustetaan silmukka (esim. *let i=0*), sitten kirjoitetaan ehto, joka pitää silmukan toiminnassa, ja lopuksi lauseke, joka päivittää silmukan tilaa (esim. *i++*):

```js
let myList = [5, 7, 22, 9];
for(let i=0; i < myList.length; i++){
    console.log(myList[i]);
}
```

*i* on lyhehennelmä sanasta *index* ja kuuluu niihin lyhenteisiin, joiden käyttö on täysin hyväksyttävää varsinkin *for*-loopissa.

*for*-loopilla on mahdollista käydä taulukko läpi myös päinvastaisessa järjestyksessä seuraavalla koodilla:

````js
let array = [4, 7, 2, 9, 17];

for(let i = array.length-1; i >= 0; i--) {
    console.log(array[i]);
}
````

## Demotehtävä 2
1. Käytä aikaisempaa taulukkoa.
2. Käy taulukko läpi for-loopilla.
3. Tulosta konsoliin vain ne numerot, jotka ovat suurempia kuin 10.

Vinkki: käytä if-lausetta loopin sisällä.

## Splice()
Metodilla ``splice()`` voidaan poistaa tai lisätä alkioita mihin tahansa osaan taulukkoa. Jos haluamme poistaa alkion, me annamme ``splice()``lle ensimmäisen ja viimeisen indeksin, jonka haluamme poistaa. 

````js
let fruits = ["Omena", "Banaani", "Päärynä"];
fruits.splice(1, 1);

console.log(fruits);
// ["Omena", "Päärynä"]
````

Jos haluamme korvata alkion, ``splice()``lle annetaan ensimmäisen ja viimeisen indeksin sekä korvattavan arvon.

````js
let fruits = ["Omena", "Banaani"];
fruits.splice(1, 1, "Päärynä");

console.log(fruits);
// ["Omena", "Päärynä"]
````

## map ja foreach

*map* ja *foreach* ovat metodeja, jotka toimivat taulukoille. Niiden avulla voidaan toteuttaa toistoa vaativia operaatioita helposti (ilman *for*-looppia). Nämä funktiot ovat ns. *higher order*-funktioita, mikä tarkoittaa, että niille annetaan parametrina funktio. Näiden ero on, että *map* luo aina uuden taulukon. *forEach* vain käy taulukon läpi.

Näissä esimerkeissä funktio on annettu nuolifunktiona (lyhyempi):

```js
let list = [1, 2, 3, 4];
//luodaan uusi lista, jossa jokainen alkio on kerrottu kymmenellä
let newList = list.map(item => 10 * item);
//tulostetaan jokainen listan alkio
newList.forEach(item => console.log(item));
```

Näissä esimerkeissä funktion on annettu perinteisessä muodossa (samat kuin yllä):

```js
let newList = a.map(function(item){ return 10 * item });
newList.forEach(function(item){ console.log(item) });
```

## Demotehtävä 3
1. Käytä taulukkoa, jonka loit demotehtävässä 1.
2. Luo *map*-metodia käyttäen uusi taulukko, jossa jokainen numero on alkuperäinen numero + 2. 
3. Tulosta uusi taulukko *forEach*-metodilla.

## While-loop

*while* saa aikaan silmukan, jossa jotakin tehdään niin kauan, kun sille annettu ehto täyttyy. Jos ehto ei täyty lainkaan, silmukan sisään ei mennä. Jotta silmukkaan ei jäädä pysyvästi jumiin, on tärkeää muistaa, että ehdon täytyy jotenkin muuttua silmukan sisällä.

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
  text = "The number is " + i;
  i++;
}
while (i < 10);
````

## Demotehtävä 4
1. Luo taulukko, jossa on neljä numeroa.
2. Käytä while-loopia ja tulosta taulukon alkiot yksi kerrallaan.
3. Käytä erillistä indeksimuuttujaa (i).

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

## Demotehtävä 5
1. Kopioi taulukko, jossa on ostosten hintoja. ``let productPrices = [9.50, 5.90, 1.20, 3.80, 7.35];``
2. Lisää taulukon loppuun yhden tuotteen hinta. Tulosta taulukon pituus konsoliin.
3. Käy taulukko läpi käyttäen joko *for*- *forEach*- tai *while*-loopia. Tulosta hinnat muodossa ``Price is: {tähän arvo taulukon alkiosta} €``.
4. Luo taulukosta uusi taulukko ``discountedPrices``, jossa jokaisesta ostoksesta on vähennetty 20 %. Käytä *map*-metodia. Tulosta uudet hinnat konsoliin.
5. Käy alennustaulukko läpi, mutta tulosta sieltä vain ne hinnat, jotka ovat yli 5 €.
6. Laske ostosten kokonaishinta. Tätä varten luo ennen taulukon läpikäyntiä muuttuja nimeltään ``total``, jonka alkuarvo on 0. Käy sitten taulukko läpi haluamallasi loopilla ja kasvata summaa. Lopuksi tulosta summa konsoliin muodossa ``Total price is: {tähän total} €``.
