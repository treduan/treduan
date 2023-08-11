# Taulukot

Taulukoiden avulla voidaan esitt‰‰ tiedoa, joka sis‰lt‰‰ rivej‰ ja sarakkeita avulla. Taulukko koostetaan rivi-rivilt‰ laittamalla *td*-elementtej‰ (*table data*) *tr*-elementtien (*table row*) sis‰lle. *th*-tagill‰ merkit‰‰n *table header* eli otsikkosolut.

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

Jos taulukko on suuri tai jos taulukon osia haluaa muotoilla CSS-m‰‰rittelyill‰, siihen kannattaa lis‰t‰ viel‰ *thead*, *tbody* ja *tfoot* osiot (ks. [lis‰tietoja](https://www.w3schools.com/tags/tag_thead.asp)).

---

# Rivinvaihto, v‰liviiva

HTML:ssa on tagit rivinvaihdolle \<br> (*line break*) sek‰ v‰liviivalle \<hr> (*horizontal rule*). N‰it‰ voidaan k‰ytt‰‰, jos dokumentin rakenteessa on niille j‰rkev‰ merkitys, mutta tekstin asetteluun tai ulkon‰ˆllisist‰ syist‰ niit‰ pit‰isi k‰yt‰‰. T‰llaiset s‰‰dˆt on parempi tehd‰ CSS:ll‰.