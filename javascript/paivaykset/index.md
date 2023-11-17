# Päiväykset (Date)

Monissa tilanteissa on tarpeen käyttää erilaisia päiväyksiin liittyviä asioita. JavaScriptissä on oma olionsa *Date* päiväyksiä varten.

Jos päiväystä ei määrilellä millään tavalla, sen perusmuoto on aika pitkä merkkijono:

````js
Fri Nov 17 2023 09:54:26 GMT+0200 (Itä-Euroopan normaaliaika)
````

Huomiona, että aikavyöhyke ja sen esittämiskieli haetaan selaimesta tai tietokoneesta.

## new Date

Saamme luotua päiväyksen käyttämällä metodia ``new Date()``. Jos sulkuihin ei laiteta mitään parametreja, se luo uuden päiväyksen koodin ajamishetkestä.

Samalle metodille voi kuitenkin antaa parametreja, jos on tarpeen määrittää jokin aiempi päiväys. Parametreja voi antaa maksimissaan seitsemän, mutta mikä tahansa määrä sitä vähemmän käy myös. Kaikenkaikkiaan JavaScriptissä on siis yhdeksän tapaa luoda päiväysobjekti.
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

Parametrit kuuluu laittaa lainausmerkkeihin, jotta ne toimivat. Jos tahdomme luoda uuden päiväyksen pelkällä tällä vuodella, näyttää se seuraavalta:

``const year = new Date("2023");``

Silloin saamme tulokseksi: ``2022-01-01T00:00:00.000Z``

Jos emme lisää lainausmerkkejä, tulkitsee JavaScript ne sekunneiksi ja millisekunneiksi, jolloin lopputulos on: ``1970-01-01T00:00:02.022Z``. Huomiona, että oletusvuosi on 1970.

Jos kuitenkin voimme antaa parametreiksi kaikki aikayksiköt, ei tarvita lainausmerkkejä ja ne erotellaan pilkuilla. Huomiona kuitenkin, että kuukaudet menevät numerosta 0 numeroon 11.

``const d = new Date(2018, 11, 24, 10, 33, 30, 0);``

