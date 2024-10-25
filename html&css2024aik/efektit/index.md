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

## Focus

Kun jokin lomakkeen kenttä on valittu, voidaan lisätä *pseudo-class* *focus*, mikä ilmaisee sitä, että juuri siihen kenttään on mahdollista kirjoittaa. Tyypillisesti silloin muuttuu kentän taustaväri tai reunojen väri tai paksuus.

````css
input:focus {
    background-color: lightblue;
}
````

## Demotehtävä

1. Jatka ilmoittautumislomakesivua, joka luotiin aikaisemmin.
2. Lisää alkuun lyhyt teksti, joka kuvaa tapahtumaa. Lisää siihen linkki kuvitteelliselle tapahtumakuvaussivustolle. Määritä sen alkuperäinen väri vihreäksi ja sitten siniseksi, kun siellä on vierailtu.
3. Lisää lomakkeen lähetysnappeihin hover-efekti, joka muuttaa niiden taustaväriä ja lisää tekstiin alleviivauksen.
4. Lisää nappeihin myös active-efekti, jolla taustaväri muuttuu uudelleen, kun nappia painetaan pohjaan.
5. Lisää kaikille kentille focus-efekti, jolla niiden reunukset muuttuvat sinisiksi, kun niihin kirjoitetaan.