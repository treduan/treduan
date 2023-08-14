# Perusmuotoilua CSS:llä

## Tekstin tyyli

Tekstille voidaan määritellä fontin koko, väri, fonttiperhe jne.

```js
p {
    color: blue;
    text-align: center;
    text-align: justify;
    text-decoration: underline;
    font-family: "Times New Roman", Times, serif;
    font-style: italic;
    font-size: 30px;
    font-weight: bold;
}
```

Serif-fontti tarkoittaa fonttia kuten Times New Roman, jossa monissa kirjaimissa on ylhäällä ja alhaalla kirjaimen levennys. Sans-serif-fontti taas on esimerkiksi Arial, jossa ei ole tälläisiä levennyksiä.

Edellä oleva fontti voidaan määritellä myös lyhemmällä syntaksilla:

```js
p {
    font: italic bold 30px "Times New Roman", Times, serif;
}
```

## Fontin mitat

Mitat voidaan antaa pikseleissä *px* tai suhteelisina *em*. Suhteellinen mitta viittaa perusfonttikokoon, joka on annettu koko dokumentille (tässä esimerkissä 16px). 2em tarkoittaa siis kaksi kertaa isompaa fonttia kuin perusfonttikoko, 1.6em tarkoittaa 1.6 kertaa isompaa jne.

```js
body {
    font-size: 16px;
}
h1 {
    font-size: 2em;
}
h2 {
    font-size: 1.6em;
}
```

## Reunaviivat ja taustaväri

Taulukoille, kuten muillekin elementeille, voidaan piirtää reunaviivoja. Jos haluaa tekstin ja sen reunaviivan väliin tilaa, kannattaa lisätä *padding*:iä. Jos annetaan yksi *padding* arvo, sitä sovelletaan laatikon joka reunalle. Jos annetaan kaksi arvoa, ensimmäinen kertoo *padding*:in ylös/alas ja toinen vasemmalle/oikealle. Neljällä arvolla voidaan antaa eri *padding*-arvo kaikille neljälle reunalle (ylhäältä alkaen myötäpäivään).

Koska reunaviiva piirretään taulukon jokaisen solun ympärille erikseen, syntyy useita viivoja. Nämä voi yhdistää *border-collapse: collapse* määrittelyllä.

Reunaviivoja voi lisäksi pyöristää *border-radius*-asetuksella.

```js
li {
    border-style: solid;
    border-width: 1px;
    border-radius: 10px;
    background-color: #f44336;
    padding: 5px, 10x;
}

table, td, tr, th {
    border-style: solid;
    border-width: 1px;
    border-collapse: collapse;
  }
```
## Varjot

Elementeille voi asettaa myös varjoja *box-shadow*-ominaisuudella. Katso täältä [lisäohjeet](https://www.w3schools.com/cssref/tryit.php?filename=trycss3_box-shadow)<base target="_blank">.

````css
button {
    box-shadow: 5px 3px 3px grey;
}
````

## Listat

Listamerkinnän tyylin voi muokata.

```js
li {
  list-style-type: circle;
}
```

## Dynaaminen koko

Jotta esim. kuva saadaan seuraamaan sen *parent*:in kokoa, asetetaan sille maksimileveys ja maksimikorkeus.

```js
img {
    max-width: 100%;
    max-height: 100%;
}
```

## Laatikoiden asettelu

Useimmat HTML-elementit ovat oletusarvoisesti ns. *block*-tyylisiä laatikoita, jotka pinotaan sivulle ylhäältä alas (esim. *h1*, *p*, *li*) siinä järjestyksessä kun ne on määritelty. Niiden leveys on automaattisesti sama kuin niiden *parent*:lla (esim. *div* tai *body*) ja niiden korkeus määrittyy niiden sisällön mukaan. *block*-tyylisen laatikon leveyden *width* ja korkeuden *height* voi asettaa tietyn kokoiseksi.

Muutama HTML-elementti on oletusarvoisesti ns. *inline*-tyylin laatikkoja, eli niiden leveys määrittyy niiden sisällön, ei *parent*:in pohjalta. Tällaisia elementtejä ovat esim. *em*, *strong* ja *a* jotka asettuvat muun tekstin sisälle saumattomasti. *inline*-elementille ei voi asettaa *margin* tai *padding* -arvoja.

Laatikko voi toki olla myös *inline-block*, jolloin se toimii kuin *block*, mutta se voi olla heti toisen elementin vieressä.

Jos laatikoiden väliin halutaan tilaa, asetetaan se *margin*:in avulla. Jos halutaan, että laatikko asettuu keskelle saatavilla olevaa tilaa, sen *margin*:in voi asettaa myös tilaan *auto*. Jos halutaan, että *margin* lasketaan elementin leveyteen mukaan määritellään se lisäksi ns. *border-box*:ksi (ilman tätä esimerkin laatikko olisi 120px leveä).

```js
.navbutton{
    display: inline-block;
    margin: 5px, 10px;
    width: 100px;
    box-sizing: border-box;
}
```