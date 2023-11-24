# Päiväykset (Date)

Monissa tilanteissa on tarpeen käyttää erilaisia päiväyksiin liittyviä asioita. JavaScriptissä on oma olionsa *Date* päiväyksiä varten.

Jos päiväystä ei määrilellä millään tavalla, sen perusmuoto on aika pitkä merkkijono:

````js
Fri Nov 17 2023 09:54:26 GMT+0200 (Itä-Euroopan normaaliaika)
````

Huomiona, että aikavyöhyke ja sen esittämiskieli haetaan selaimesta tai tietokoneesta.

## new Date

Saamme luotua päiväyksen käyttämällä metodia ``new Date()``. Jos sulkuihin ei laiteta mitään parametreja, se luo uuden päiväyksen koodin ajamishetkestä.

Samalle metodille voi kuitenkin antaa parametreja, jos on tarpeen määrittää jokin aiempi päiväys. Parametreja voi antaa maksimissaan seitsemän, mutta mikä tahansa määrä sitä vähemmän käy myös. Tosin jos parametriksi antaa vain yhden luvun, se tulkitaan millisekunneiksi. Kaikenkaikkiaan JavaScriptissä on siis yhdeksän tapaa luoda päiväysobjekti.
``
new Date()
new Date(date string)

new Date(year,month)
new Date(year,month,day)
new Date(year,month,day,hours)
new Date(year,month,day,hours,minutes)
new Date(year,month,day,hours,minutes,seconds)
new Date(year,month,day,hours,minutes,seconds,ms)

new Date(milliseconds)
``

Jos tahdomme luoda uuden päiväyksen pelkällä tällä vuodella, näyttää se seuraavalta:

``const year = new Date("2023");``

Silloin saamme tulokseksi: ``2023-01-01T00:00:00.000Z``

Jos emme lisää lainausmerkkejä, tulkitsee JavaScript ne sekunneiksi ja millisekunneiksi, jolloin lopputulos on: ``1970-01-01T00:00:02.022Z``. Huomiona, että oletusvuosi on 1970.

Jos kuitenkin voimme antaa parametreiksi kaikki aikayksiköt, ei tarvita lainausmerkkejä ja ne erotellaan pilkuilla. Huomiona kuitenkin, että kuukaudet menevät numerosta 0 numeroon 11.

``const d = new Date(2018, 11, 24, 10, 33, 30, 0);``

Voit lukea lisää päiväyksistä [täältä](https://www.w3schools.com/js/js_dates.asp)<base target="_blank">.

## Demotehtävä 1

1. Laske JavaScriptillä, kuinka vanha olet tällä hetkellä. Eli luo uusi päiväys, johon määrittelet oman syntymäpäiväsi. Luo sitten uusi päiväysolio tästä hetkestä ja miinusta syntymähetki tästä hetkestä. Tämä lopputulos täytyy vielä käsitellä eli tehdä seuraava operaatio: ``Math.floor(timeDifference / (365.25 * 24 * 60 * 60 * 1000))``, jossa *timeDifference* on se tulos, joka tulee siitä, kun nykyhetkestä miinustetaan syntymäpäivä.

## Get ja Set

Päiväysoliosta voidaan ottaa talteen tai siihen voi määritellä uudelleen aikoja. Esimerkiksi voimme ottaa pelkän vuoden päiväyksestä metodilla ``date.getFullYears()``. Samoin minkä tahansa aikamääreen voi valita päiväyksestä.

Voit lukea lisää päiväyksistä [täältä](https://www.w3schools.com/js/js_date_methods.asp)<base target="_blank">

## Demotehtävä 2

1. Luo tästä hetkestä olio. Katso siitä, mikä kuukausi on käyttäen metodia ``getMonth()``. Saat numeron, joka on 0-11. Luo taulukko, jossa on kaikkien kuukausien nimet kirjoitettuna. Tulosta konsoliin kuukauden nimi käyttäen saamaasi numeroa indeksinä.