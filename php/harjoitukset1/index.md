# Harjoitukset 1

Nämä harjoitukset perustuvat osioihin Alkeet 1, Taulukot ja Sivuston jakaminen. Luo niille oma kansio, jonka nimi on phpharjoitukset1. Luo tehtäville omat tiedostot nimellä harjoitus1.php, harjoitus2.php jne, jollei tehtävässä muuta neuvota.

## Harjoitus 1

Ratkaise funktion avulla:

Aseta arvonlisäveron laskentaa varten vakio ALV ja anna sen arvoksi 0.255. Laske arvonlisäveron määrä seuraavista hinnoista: 10 €, 20 €, 35,5 € ja 145.80 € Tulosta vastaukset ymmärrettävällä tavalla ruudulle (vastaus kertoo mitä on laskettu ja mistä arvosta esim: "Arvonlisävero hinnasta 10 € on 2.5 €.").

## Harjoitus 2

Tee funktio, joka vertailee kolmea lukua a, b ja c:

- Jos luvut ovat yhtäsuuria, tulosta "kaikki ovat yhtäsuuria".
- Jos 2 lukua ovat keskenään yhtäsuuria (a ja b ovat yhtäsuuria, a ja c ovat yhtäsuuria tai b ja c ovat yhtäsuuria) tulosta: "kaksi lukua on yhtäsuuria".
- Jos a < b < c, tulosta "luvut ovat nousevassa suuruusjärjestyksessä".
- Jos a > b > c, tulosta "luvut ovat laskevassa suuruusjärjesteyksessä".
- Muuten tulosta "luvuissa ei ole mitään tolkkua"
Tulosta näkyville myös annetut luvut, esimerkkitulostus: "a=1, b=2, c=3 luvut ovat nousevassa suuruusjärjestyksessä."

## Tehtävä 3

Luo muuttuja ja tallenna siihen satunnaisluku välillä 1-100. [Katso Php:n ohjeet täältä.](https://www.w3schools.com/php/php_math.asp)<base target="_blank">

Tulosta sitten seuraavia riippuen tuloksesta. Huomioithan, miten ehtolauseiden järjestys vaikuttaa lopputulokseen.

- Jos luku on välillä 11-49, tulosta "30 is on the small side."(korvaa 30 arvotulla luvulla).
- Jos luku on välillä 51-89, tulosta "55 is on the large side."
- Jos luku on pienempi kuin 11 tai suurempi kuin 89, tulosta "9 is near the extreme."
- Jos luku on 50, tulosta "50 is right in the middle!".
- Jos luku on 42, tulosta "42! You have found the answer to life."

## Tehtävä 4

Tulosta *&* konsoliin kahdeksalle riville niin, että jokaisella rivillä kuviota on arvottu määrä välillä 1-10 käyttäen looppeja.

Lopputulos voi näyttää esimerkiksi seuraavalta:

&&& \
& \
&&&&&& \
&& \
& \
&&&&&&&&& \
&&&&&& \
&& 

## Tehtävä 5

Luo kaksi taulukkoa, joista yhdessä on viisi etunimeä ja toisessa viisi sukunimeä. Käy taulukot läpi niin, että konsoliin tulostuu sukunimi/etunimi pareja tyylillä: *Virtanen, Timo*. Jokainen pari tulee omalle riville.

## Tehtävä 6

Luo neljä Php-tiedostoa, jotka yhdistät toimivaksi HTML:ksi. Ensimmäisen nimi on *header.php*, jossa on HTML-tiedoston alku sekä *header*, jossa on otsikko (*Tredun uutiset*) ja logokuva (voit valita jonkin vanhoje prjektien kuvan). Toisen nimi on *index.php*, johon tiedostot kootaan. Kolmas on nimeltään *news.php*, jossa on lista uutisartikkeleista, joka tulostetaan sivulle. Listassa pitää olla uutisen nimi ja päivämäärä. Neljännen tiedoston nimi on *footer.php* ja siinä on copyright sekä logo toistettuna. Lisää vielä CSS-tiedosto ja muotoile sivua kevyesti. Tarkista lopuksi validaattorilla, että sivu on oikeaoppista HTML:ää (kun sivu pyörii, katso lähdekoodi ja kopioi se validaattoriin).


## Lisätehtävä

Tee funktio, joka ottaa vastaan taulukon, jossa on koearvosanoja nnalta tuntematon määrä (asteikko 4-10, plussat, miinukset ja puolikkaat desimaaleilla, muista, että desimaali merkitään pisteellä). Funktio palauttaa arvosanojen keskiarvon eli arvosanat laskettuna yhteen ja jaettuna arvosanojen määrällä. Lopuksi ohjelma antaa seuraavat viestit: jos keskiarvo on 9 tai yli "Excellent!", jos se on alle 9 ja 8 tai yli "Good work!", jos se on alle 8 ja 7 tai yli "Decent work.", jos alle 7 ja yli tai tasan 6 "There is room for improvement.", jos alle 6 ja yli 4.25 "You pass but barely." ja jos se on alle 4.25 "You have failed.".