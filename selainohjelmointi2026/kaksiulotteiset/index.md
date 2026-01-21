# Kaksiulotteiset taulukot

Viimeksi opettelimme tekemään ja käsittelemään yksiulotteisia taulukoita eli yksinkertaisia listoja asioista. Lisäksi on olemassa kaksiulotteisia taulukoita eli taulukoita taulukoiden sisässä. Kaksiulotteisia taulukoita voidaan käyttää, kun meille annettava data on taulukkomuotoista, jokaisella rivillä on samanlainen rakenne ja järjestyksellä on väliä. Jos rivien rakenne vaihtelee tai datalla on paljon nimettyjä ominaisuuksia, kannattaa käyttää objekteja (joiden käyttöä opettelemme pian).

## Kaksiulotteiden taulukon luominen

Kaksiulotteinen taulukko on käytännössä taulukko taulukoita. Siinä on siis rivejä että sarakkeita eli pystyrivejä. Se luodaan kirjoittamalla hakasulut taulukon merkiksi ja jokainen uusi taulukko merkitään myös hakasuluilla, jotka erotetaan toisistaan pilkulla. Esimerkissä on joukko nimiä ja henkilöiden kokeista saamia pisteitä.

````js
let scores = [
    ["Mary Sue", 66, 87, 78],
    ["John Doe", 55, 68, 74],
    ["Jane Doe", 79, 92, 98],
    ["Mark Mayhem", 71, 57, 88]
];
````

## Kaksiulotteisen taulukon alkion löytäminen

Jos kaksiulotteisesta taulukosta tahtoo tulostaa yhden alkion, täytyy se tehdä tuplahakasulkeilla, joista ensimmäisessä on rivin indeksi (alkaen nollasta) ja sitten sarakkeen indeksi (myös alkaen nollasta). Esimerkissä halutaan tulostaa kaksiulotteisen taulukon ensimmäinen alkio.

````js
console.log(scores[0][0]);
````

Kaksiulotteisen taulukon viimeisen alkion tulostaminen sen sijaan on monimutkaisempaa, koska taulukon pituudessa on huomioitava indeksin olevan aina yhden pienempi kuin taulukon pituus.

````js
let lastRowIndex = scores.length - 1;
let lastColumnIndex = scores[lastRowIndex].length - 1;

console.log(scores[lastRowIndex][lastColumnIndex]);

//tai yhdellä rivillä
console.log(scores[scores.length-1][(scores[scores.length-1]).length-1]);
````

## Kaksiulotteisen taulukon käsittely

Kaksiulotteiseen taulukkoon voi lisätä elementtejä samoilla funktioilla kuin tavalliseenkin taulukkoon. Käyttämällä funktiota *push* voi taulukon loppuun lisätä uuden elementin ja funktiolla *unshift* voi lisätä elementin taulukon alkuun.

````js
let scores = [
    ["Mary Sue", 66, 87, 78],
    ["John Doe", 55, 68, 74],
    ["Jane Doe", 79, 92, 98],
    ["Mark Mayhem", 71, 57, 88]
];

scores.unshift(["Milly Mae", 76, 87, 92]);
scores.push(["Ted Tyler", 54, 62, 84]);
````

Yksittäisiä alkioita voi muuttaa samalla tavalla kuin yksiulotteisissakin taulukoissa eli jos haluaisimme muuttaa Mary Suen viimeistä arvosanaa, se onnistuisi näin:

````js
let scores = [
    ["Mary Sue", 66, 87, 78],
    ["John Doe", 55, 68, 74],
    ["Jane Doe", 79, 92, 98],
    ["Mark Mayhem", 71, 57, 88]
];
scores[0][3] = 82;
````

Jos haluamme kuitenkin muokata koko taulukon sisältöä, tarvitsemme apumetodeja. Oletetaan, että taulukkoon halutaan kokeiden keskiarvot. Se onnistuisi käymällä taulukko läpi *forEach*-metodia käyttäen. Tässä tunnemme taulukon sisällön mallin eli *score* edustaa jokaista riviä ja tiedämme, että alkiot [1], [2] ja [3] sisältävät numeroarvon. Huom. koodin kirjoittaja päättää nämä nimet eli ne voisivat olla jotain muutakin.

````js
let scores = [
    ["Mary Sue", 66, 87, 78],
    ["John Doe", 55, 68, 74],
    ["Jane Doe", 79, 92, 98],
    ["Mark Mayhem", 71, 57, 88]
];

scores.forEach((score) => {
    let average = (score[1] + score[2] + score[3]) / 3;
    score.push(average);
});
````

Tässä *forEach* tekee ikään kuin jokaisesta rivistä oman käsiteltävän asian, josta on mahdollista ottaa erikseen käyttöön rivin indeksillä jokainen arvosanan sisältävä alkio, lisätä ne yhteen, jakaa ne itsensä määrällä ja lisätä ne jokaisen taulukon rivin loppuun.

Taulukosta saa poistettua tietoja käyttämällä *pop* metodia poistamaan elementin taulukon lopusta ja *shift* taulukon alusta.

## Kaksiulotteisen taulukon läpikäynti

Jos halutaan käydä läpi kaksiulotteisen taulukon sisältö, siihen tarvitaan kaksi sisäkkäistä luuppia. Sen voi tehdä esimerkiksi *forEach*illa. Tässä *score* edustaa riviä ja *item* jokaista alkiota rivillä.

````js
let scores = [
    ["Mary Sue", 66, 87, 78],
    ["John Doe", 55, 68, 74],
    ["Jane Doe", 79, 92, 98],
    ["Mark Mayhem", 71, 57, 88]
];
// Ensimmäinen forEach käy rivit läpi
scores.forEach((score) => {
    // Toinen forEach käy rivin alkiot läpi
    score.forEach((item) => {
        console.log(item)
    })
})
````

## Demotehtävä

1. Luo uusi JavaScript-tiedosto. Luo uusi kaksiulotteinen taulukko, jossa on ensimmäisenä joka rivillä jokin hedelmä ja sen perässä on kahden kaupan pyytämä kilohinta (keksi jokin järkevä luku). Lisää taulukkoon kolme tällaista hedelmää.
2. Lisää taulukon alkuun yksi uusi hedelmä. 
3. Poista taulukon viimeinen hedelmä.
4. Ensimmäinen kauppa on laskenut kaikkien hedelmien hintaa 10 %. Muuta kaikkien hedelmien ensimmäistä hintaa niin, että se on 10 % alempi. Käytä laskutoimitusta ja käy taulukko läpi.
5. Lisää jokaiselle hedelmälle keskiarvohinta kahden kaupan hinnan perään.

