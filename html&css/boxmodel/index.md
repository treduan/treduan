# Box Model

Kaikki HTML-elementit ovat periaatteessa laatikoita, useimmiten suorakulmioita. Näin on myös CSS:ssä, jossa näillä suorakulmioilla on eri tasoja. Puhutaan usein box modelista.

Yksittäisen elementin mallin näkee selkeästi kehittäjätyökaluista Elements-välilehdeltä. Se kertoo, mikä on elementin koko, paljonko sillä on täytetilaa, paljonko reunusta ja paljonko marginaalia.

![boxmodel](boxmodel.png)

## Padding

Padding on täytetila, joka tulee elementin sisällön (yleensä tekstin) ja elementin reunan väliin. Sitä voi säätää erikseen ylös (padding-top), alas (padding-bottom), oikealle (padding-right) ja vasemmalle (padding-left) tai suoraan yhdessä tai ylä- ja alasuunta sekä sivut yhdessä. Jos samalla lausekkeella haluaa säätää kaikille eri arvot, ne menevät järjestyksessä top, right, bottom, left. 

Alla olevalla koodilla säädetään sivut ja ylä- ja alasuunta erikseen, ensin ylä- ja ala, sitten oikea ja vasen, jolloin ylös ja alas tulee 8 pikselin padding ja oikealle ja vasemmalle 15 pikselin padding.

````css
.mydiv {
    padding: 8px 15px;
}
````

## Border
Elementille voi antaa reunukset. Reunuksille voi antaa värin (border-color), paksuuden (border-width) ja kuviotyylin (border-style). Ne voi antaa erikseen tai yhdistelmällä. On mahdollista määritellä reunus vain johonkin yksittäiseen suuntaan (esim. border-left).

[w3schools](https://www.w3schools.com/css/css_border.asp)<base target="_blank"> esittelee eri reunustyylivaihtoehdot.

Reunukset on mahdollista kirjoittaa suoraan yhdellä rivillä, kun sille antaa ensin paksuuden, sitten tyylin ja lopuksi värin. Jos elementillä on padding, se tulee tekstin ja reunuksen väliin.

````css
.mydiv {
    padding: 8px 15px;
    border: 2px solid black;
}
````
Lopputulos kapealla näytöllä on tämä:

![box with border](boxwithborder.PNG)

Jos elementille annetaan taustaväri eli background-color, reunukset tulevat tämän taustan lisäksi.

____________

## Demotehtävä 1

1. Luo uusi html-tiedosto nimeltään boxes.html. Luo siihen html-pohja. Luo myös uusi tiedosto boxes.css ja linkitä se html-tiedostoon.
2. Luo html-tiedostoon kaksi div-elementtiä, joista ensimmäisessä on p-elementissä teksti "box1" ja toisessa "box2". Voit antaa niille myös luokat samoilla nimillä.
3. Lisää molemmille elementeille haluamasi reunus ja padding. Näet, miten ne vaikuttavat elementin ulkoasuun.

_________________

## Margin

Margin eli marginaali on tilaa reunusten ulkopuolella. Sitä voi säätää joko joka suuntaan erikseen (esim. margin-top ja margin-left) tai kahta tai kaikki yhdessä.

Alla lisätään joka suuntaan marginaalia 30 pikseliä.

````css
.mydiv {
    padding: 8px 15px;
    border: 2px solid black;
    margin: 30px;
}
````

HTML-sivulla on automaattisesti pikkuinen marginaali olemassa. Yleensä omaa CSS:ää kirjoitettaessa se halutaan poistaa, jotta voimme säätää omat marginaalit. Tämä tehdään mieluiten aivan CSS-tiedoston alussa kirjoittamalla sinne: ``* {margin:0;}``. Tähti tarkoittaa kaikkea eli tuolla koodilla säädetään, että kaikkialla on lähtökohtaisesti marginaali 0.

## Margin Collapse

Margin collapse on sitä, että jos meillä on allekkain tai vierekkäin kaksi elementtiä, joille on lisätty marginaali, niistä marginaaleista lasketaan vain yksi. Eli toinen marginaali ikään kuin katoaa/kaatuu pois. 

Esimerkissä on kaksi laatikkoa, joilla molemmilla on joka suuntaan marginaalia 30 px. Kuva on otettu aivan selaimen reunasta. Huomaatte, että laatikoiden vasemmalla puolella on sama etäisyys reunasta kuin laatikoiden välillä eli 30 pikseliä eikä tuplia eli kaksi kertaa 30 pikseliä. Tätä margin collapse käytännössä tarkoittaa.

![margincollapse.PNG](margincollapse.PNG)

____________

## Demotehtävä 2

1. Jatka aiempiin boxes.html ja boxes.css -tietostoihin.
2. Lisää molemmille laatikoille marginaalia. Testaa molemmille eri määrä. Tarkista kehittäjätyökaluista, millainen marginaali jää elementtien väliin. 

# Height ja Width

Jokaiselle elementille voi määrittää korkeuden (height) ja leveyden (width). Se voidaan antaa suoraan pikseleinä tai esimerkiksi prosentteina käytettävästä tilasta.

## Height

Korkeuden säätäminen on yleensä selkeää ja siihen käytetään hyvin yleisesti pikselimäärää. 

## Width

Leveyttä voidaan säädellä useammalla tavalla. Pikselit ovat yksi mahdollisuus, mutta myös prosentit ovat mahdollisia, mikä tekee leveydestä muuttuvan, kun ruudun leveys vaihtuu.

Lisäksi voidaan määrittää ``max-width``. Se kertoo, mikä on suurin leveys, mikä elementillä voi olla. Tämä voi joissakin tapauksissa selkeyttää eri kokoisten ruutujen kanssa toimimista. Jos elementti on määritelty liian leveäksi kuin ruutu, tulee mahdollisuus kelata sivua sivuttaissuunnassa, mutta tätä haluamme yleensä välttää.

````CSS
.examplediv {
    padding: 8px 15px;
    border: 2px solid black;
    margin: 30px;
    height: 400px;
    width: 800px;
    max-width: 90%;
}
````

# Border-box

Lähtökohtaisesti paddingiä ja borderia ei lasketa elementin kokoon, vaan ainoastaan elementin varsinainen sisältö. Tämän vuoksi voi olla hankalaa arvioida elementtien lopullisia kokoja. Aika usein lisätään määritelmä ``border-sizing: border-box;`` ja se saatetaan laittaa koskemaan koko HTML-tiedosto eli merkitä tähdellä samaan paikkaan kuin ``margin:0;``.

# Display