# Efektit

Joskus verkkosivustolle halutaan erilaisia efektejä, jotka kertovat jotain sivun toiminnoista. Yleisiä tällaisia ovat hover-efekti (jotain tapahtuu, kun hiiri kulkee linkin yli), kun jokin on valittu/aktiivinen tai jos linkki on käyttämätön tai käytetty. Näitä kutsutaan nimellä *pseudo-class*. Se määritellään kaksoispisteellä.

````css
a:hover {
    color: red;
}
````

## Hover

*hover*-efektiä käytetään erilaisten linkkien ja nappien kanssa. Tyypillinen efekti on, että tekstin väri tai taustaväri vaihtuu, usein vaaleamman tai tummemman sävyiseksi kuin alkuperäinen väri. Samalla usein hiiren nuoli muuttuu osoittimeksi. Toisaalta *hover* voi lisätä vaikka alleviivauksen, lisätä reunukset tai saada aikaan vaikkapa animaatioita, joita harjoittelemme myöhemmin.

````css
a:hover {
    color: red;
    text-decoration: underline;
    cursor: pointer;
}
````

## Active

Jos pidät hiirtä pohjassa linkin tai napin kohdalla, on se silloin aktiivinen. Siihen voi asettaa oman efektin, joka on usein uusi sävymuunnos tekstissä tai taustassa. 

````css
a:active {
    color: pink;
    border: solid 1px pink;
    cursor: pointer;
}
````

## Link ja visited

Selain antaa jokaiselle linkille automaattisesti väriksi sinisen, kun linkkiä ei ole käytetty. Kun sitä on käytetty, on väri violetti. Nämä voi halutessaan määritellä itse. *link* määrittää linkin, jossa ei ole käyty, ja *visited* linkin, jossa on käyty.

````css
a:link {
    color: red;
}
````

````css
a:visited {
    color: red;
}
````

