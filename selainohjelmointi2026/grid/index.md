# Grid

Monimutkaisempia asetteluja varten voi olla kannattavaa käyttää grid-menetelmää, sillä se toimii täsmällisemmin kuin flex. Gridiä voi ajatella ruudukkona, jonka ruutujen määrän itse päätät ja päätät myös, miten ja moneenko ruutuun sijoitat sisällön.

Gridin käyttö aloitetaan tekemällä elementistä grid-elementti. Sen jälkeen kaikki sen sisällä olevat elementit ovat grid-elementtejä myös.

````css
main {
    display: grid;
}
````

Sen jälkeen määritellään, kuinka monta pystyriviä (column) ruudukossamme on. Pystyrivien määrän sekä niiden koon voi määritellä monella eri tavalla, sillä siihen voi käyttää eri yksiköitä. Yksi selkeä tapa on käyttää yksikköä *fr* (fragment). Silloin tila jaetaan automaattisesti saman kokoisiin paloihin. Jos siis haluamme, että meillä on alueella neljä saman levyistä osaa, sen voi määritellä näin:

````css
.main {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
}
````

Samalla menetelmällä voimme myös tehdä esimerkiksi ensimmäisestä osasta tuplasti leveämmän kuin muut eli ensimmäinen pystyrivi onkin kaksi fragmenttia leveä, kun muut ovat vain yhden:

````css
.main {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1fr;
}
````
Muita soveltuvia yksiköitä ovat pikselit tai prosentit.

Voimme vastaavasti määritellä vaakarivien (row) määrän ja koon. Jos haluamme kolme riviä, joista ensimmäinen on kaksi kertaa niin korkea kuin toiset, se onnistuu seuraavalla koodilla:

````css
.main {
    display: grid;
    grid-template-rows: 2fr 1fr 1fr;
}
````

Käyttämällä ominaisuuksia grid-column-start, grid-column-end, grid-row-start, grid-row-end on mahdollista asetella yksittäiset palaset paikoilleen, kun ensin on asetettu grid-template-columns ja grid-template-rows. Silloin voi käyttää numeroita.

Gridillä on mahdollista myös määritellä isompia alueita kuin vain pysty- ja vaakarivejä, mikä voi olla hyöyllistä, jos rakenteen on tarpeen olla monimutkaisempi. Silloin käytetään jokaisesta gridin alueesta omaa nimitystä, joka lisätään jokaiseen lapsielementtiin ominaisuus *grid-area*, jonka arvoksi annetaan haluttu nimi. Seuraavassa esimerkissä asetellaan kolme palasta suureen gridiin. Pelkän pisteen käyttö tarkoittaa, että palanen on tyhjä.

````css
.main {
    grid-template-areas:
"header header header"
"nav main main"
"nav main main"
". main main";
}

.header {
    grid-area: header;
}

.nav {
    grid-area: nav;
}
.main {
    grid-area: main;
}
````

Gridin palasten väliin jäävän koon voi säätää käyttämällä *gap*-ominaisuutta. Sen voi säätää yksinään, jolloin joka suuntaan on yhtä paljon tyhjää tilaa, mutta sen voi säätää erikseen myös vaaka- ja pystyrivien kohdalle. Seuraavassa koodissa laitetaan pystyrivien palojen väliin suurempi väli kuin vaakarivin palojen väliin.

````css
.main {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    column-gap: 10px;
    row-gap: 30px;
}
````

Lisää gridin käytöstä voi lukea [täältä](https://css-tricks.com/snippets/css/complete-guide-grid/)<base target="_blank">

Myös gridin käytöstä löytyy peli, jolla sitä voi harjoitella osoitteesta [cssgridgarden.com](https://cssgridgarden.com/#fi)<base target="_blank">

___________________

## Demotehtävä 1

1. Kopioi uuteen html-tiedostoon seuraava koodi:

````html
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Flexbox-harjoitus</title>
        <link rel="stylesheet" href="test.css">
    </head>
    <body>
        <header>
            <h1>Tässä on sivuston pääotsikko</h1>
            <p>Sille on vielä jokin kiva sloganteksti</p>
        </header>
        <nav>
            <ul>
                <li>Etusivu</li>
                <li>Tuotteet</li>
                <li>Laatutakuu</li>
                <li>Yhteystiedot</li>
            </ul>
        </nav>
        <main class="main">
            <section class="introduction">
                <h2>Tässä on otsikko</h2>
                <p>Kuvailen tässä, kuinka hieno verkkokauppa meillä on 
                    ja miksi juuri tästä verkkokaupasta kannattaa ostaa asioita.</p>
            </section>
        <section class="products">
        <div class="subdiv">
            <h1>Tuote 1</h1>
            <p>Tuote 1 on upea.</p>
        </div>
        <div class="subdiv">
            <h1>Tuote 2</h1>
            <p>Tuote 2 on hieno.</p>
        </div>
        <div class="subdiv">
            <h1>Tuote 3</h1>
            <p>Tuote 3 on mahtava.</p>
        </div>
        <div class="subdiv">
            <h1>Tuote 4</h1>
            <p>Tuote 4 on loistava.</p>
        </div>
        <div class="subdiv">
            <h1>Tuote 5</h1>
            <p>Tuote 5 on erinomainen.</p>
        </div>
        <div class="subdiv">
            <h1>Tuote 6</h1>
            <p>Tuote 6 on majesteettinen.</p>
        </div>
        <div class="subdiv">
            <h1>Tuote 7</h1>
            <p>Tuote 7 on ihana.</p>
        </div>
    </section>
    <section class="ad">
        <div>
            <p>Tämä teksti tässä on mainosteksti, joka olisi tarkoitus asetella kaikkien tuotteiden oikealle puolelle yhdeksi kapeaksi ja korkeaksi osuudeksi ihan harjoituksen vuoksi. Tällä tavalla saamme yhden uuden tason gridiä käyttöömme, sillä tietenkin sivustolla voi olla sisäkkäin tai vierekkäin monta eri asettelua, jotka käyttävät joko gridiä tai flexiä.</p>
        </div>    
    </section>
    </main>
    </body>
</html>
````

2. Asettele sisältö luontevasti käyttämällä gridiä. Anna tuotteille jokin taustaväri, jotta ne erottuvat selkeästi taustasta. Mainos olisi tarkoitus asetella tuotteiden oikealle puolelle pystyyn. Myös sille voi antaa eri taustavärin kuin tuotteille.
3. Kokeile kasvattaa *products* osiossa jonkin pysty- tai vaakarivin kokoa suuremmaksi kuin toisten rivien.
4. Lisää rivien väliin väliä. Testaa lisätä vaakarivien palojen väliin suurempi väli kuin pystyrivien palojen väliin.


## Lisää harjoittelua gridistä

Linkin takana [freecodecampin](https://www.freecodecamp.org/news/learn-css-grid-by-building-5-layouts/)<base target="_blank"> harjoituksia gridin käytöstä.


