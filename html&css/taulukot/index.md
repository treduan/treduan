# Taulukot

Taulukoiden avulla voidaan esittää tiedoa, joka sisältää rivejä ja sarakkeita avulla. Taulukko koostetaan rivi-riviltä laittamalla *td*-elementtejä (*table data*) *tr*-elementtien (*table row*) sisälle. *th*-tagillä merkitään *table header* eli otsikkosolut.

```html
<table>
    <caption>Taulukon otsikko</caption>
    <tr>
        <th>Sarake 1, otsikko</th>
        <th>Sarake 2, otsikko</th>
    </tr>
    <tr>
        <td>Sarake 1, rivi 1</td>
        <td>Sarake 2, rivi 1</td>
    </tr>
    <tr>
        <td>Sarake 1, rivi 2</td>
        <td>Sarake 2, rivi 2</td>
    </tr>
</table>
```

Jos taulukko on suuri tai jos taulukon osia haluaa muotoilla CSS-määrittelyillä, siihen kannattaa lisätä vielä *thead*, *tbody* ja *tfoot* osiot (ks. [lisätietoja](https://www.w3schools.com/tags/tag_thead.asp)).

---

# Rivinvaihto, väliviiva

HTML:ssa on tagit rivinvaihdolle \<br> (*line break*) sekä väliviivalle \<hr> (*horizontal rule*). Näitä voidaan käyttää, jos dokumentin rakenteessa on niille järkevä merkitys, mutta tekstin asetteluun tai ulkonäöllisistä syistä niitä pitäisi käytää. Tällaiset säädöt on parempi tehdä CSS:llä.

---

## Demotehtävä 1

1. Lisätkää sivullenne johonkin kohtaan ``<hr>`` erottamaan kaksi tekstin osuutta. Lisätkää myös yksi ``<br>`` loogiseen kohtaan katkaisemaan teksti eri riveille.
2. Lisätkää sivullenne taulukko, jossa on vähintään kolme riviä asioita. Taulukossa kuuluu olla ``<caption>`` eli otsikko, ``th>`` eli rivien otsikot sekä tietoa riveillä. Aihe voi olla vaikka kaikki koulut, joissa olet ollut ja vuoden, joina niissä olit, tai vaikka omistamasi lemmikkieläimet ja niiden iät tms.
