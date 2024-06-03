# Taulukot

Taulukoiden eli *table*n avulla voidaan esittää tietoa, joka sisältää rivejä ja sarakkeita. Taulukko koostetaan rivi riviltä laittamalla *td*-elementtejä (*table data*) *tr*-elementtien (*table row*) sisälle. *th*-tagillä merkitään *table header* eli otsikkosolut. *caption* on koko taulukon otsikko.

```html
<table>
    <caption>Taulukon otsikko</caption>
    <tr>
        <th>Sarake 1, otsikko</th>
        <th>Sarake 2, otsikko</th>
        <th>Sarake 3, otsikko</th>
    </tr>
    <tr>
        <td>Sarake 1, rivi 1</td>
        <td>Sarake 2, rivi 1</td>
        <td>Sarake 3, rivi 1</td>
    </tr>
    <tr>
        <td>Sarake 1, rivi 2</td>
        <td>Sarake 2, rivi 2</td>
        <td>Sarake 3, rivi 2</td>
    </tr>
    <tr>
        <td>Sarake 1, rivi 3</td>
        <td>Sarake 2, rivi 3</td>
        <td>Sarake 3, rivi 3</td>
    </tr>
</table>
```

Kyseinen taulukko näyttää siis seuraavalta:

![Taulukko](taulukkoesimerkki.PNG)

Seuraavassa taulukossa ovat opettajan kissat. Niistä annetaan tietoina nimi, rotu, väri ja syntymävuosi.

````html
    <table>
        <caption>Kissani</caption>
        <tr>
           <th>Nimi</th>
           <th>Rotu</th>
           <th>Väri</th> 
           <th>Syntymävuosi</th>
        </tr>
        <tr>
            <td>Anduin</td>
            <td>Maine coon</td>
            <td>Punatabby valkoisella</td>
            <td>2020</td>
        </tr>
        <tr>
            <td>Valdemar (Vallu)</td>
            <td>Maatiainen</td>
            <td>Punatabby</td>
            <td>2021</td>
        </tr>
        <tr>
            <td>Myy</td>
            <td>Maine coon</td>
            <td>Mustasavu valkoisella</td>
            <td>2022</td>
        </tr>
        <tr>
            <td>Viivi</td>
            <td>Maine coon</td>
            <td>Musta valkoisella</td>
            <td>2022</td>
        </tr>
        
    </table>
````

Lopputulos näyttää seuraavalta:

![Kissataulukko](kissataulukko.PNG)
---

Jos taulukko on suuri tai jos taulukon osia haluaa muotoilla CSS-määrittelyillä, siihen kannattaa lisätä vielä *thead*, *tbody* ja *tfoot* osiot (ks. [lisätietoja](https://www.w3schools.com/tags/tag_thead.asp)).

---

# Rivinvaihto, väliviiva

HTML:ssa on tagit rivinvaihdolle \<br> (*line break*) sekä väliviivalle \<hr> (*horizontal rule*). Näitä voidaan käyttää, jos dokumentin rakenteessa on niille järkevä merkitys, mutta pääosin ulkonäölliset seikat kannattaa tehdä CSS:llä. 

---

## Demotehtävä 1

1. Lisätkää demo1.html-sivullenne johonkin kohtaan ``<hr>`` erottamaan kaksi tekstin osuutta, mieluiten kaksi *section*ia. Lisätkää myös yksi ``<br>`` loogiseen kohtaan katkaisemaan teksti eri riveille.
2. Lisätkää sivullenne taulukko, jossa on vähintään kolme riviä asioita. Taulukossa kuuluu olla ``<caption>`` eli otsikko, ``th>`` eli rivien otsikot sekä tietoa riveillä. Aihe voi olla vaikka kaikki koulut, joissa olet ollut ja vuoden, joina niissä olit, tai vaikka omistamasi lemmikkieläimet ja niiden iät tms.
