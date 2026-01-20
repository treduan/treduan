## JavaScriptin Math-kirjasto

Kirjasto ohjelmoinnissa on valmiiksi tehty kokoelma toimintoja (funktioita), joita voit käyttää omassa koodissasi.
Kirjastojen avulla sinun ei tarvitse keksiä kaikkea itse.

JavaScriptissä on useita sisäänrakennettuja kirjastoja, ja yksi tärkeimmistä niistä on Math.

Math sisältää funktioita ja arvoja, joilla voidaan käsitellä:
- satunnaislukuja
- pyöristämistä
- itseisarvoja
- perusmatematiikkaa

Math-kirjastoa ei tarvitse erikseen ottaa käyttöön – se on aina käytettävissä.

## Yleisimmät Math-metodit

### Math.random()

Palauttaa satunnaisluvun välillä 0 (mukaan lukien) - 1 (ei mukana)

````js
let randomNumber = Math.random();
console.log(randomNumber);
````

Jos haluat tulokseksi kokonaisluvun välillä 1-10, tee näin:

````js
let number = Math.floor(Math.random() * 10 + 1);
````

### Math.floor()

Pyöristää kokonaisluvun alaspäin lähimpään kokonaislukuun.

````js
Math.floor(3.8); // 3
````

### Math.ceil()

Pyöristää luvun ylöspäin lähimpään kokonaislukuun.

````js
Math.ceil(3.1); // 4
````

### Math.round()

Pyöristää luvun lähimpään kokonaislukuun.

````js
Math.round(3.5); // 4
Math.round(3.4); // 3
````

### Math.max() ja Math.min()

Palauttavat suurimman tai pienimmän annetusta joukosta.

````js
Math.max(3, 7, 2); // 7
Math.min(3, 7, 2); // 2
````

### Math.PI

Antaa piin arvon.

````js
console.log(Math.PI); // 3.141592653589793
````

## Demoharjoitus
1. Luo funktio, joka palauttaa nopan heiton eli satunnaisen numeron välillä 1-6. Tulosta tulos konsoliin muodossa "Nopan tulos on X".
2. Luo funktio, joka tulostaa sille annetun luvun kolmella eri pyöristysmenetelmällä eli Math.floor(), Math.ceil() ja Math.round(). Testaa sitä arvoilla 4.7, 8.2 ja 67.553.
3. Luo funktio, joka ottaa vastaan neljä eri lukua ja se tulostaa niistä suurimman ja pienimmän muodossa "Suurin luku on X ja pienin luku on Y".