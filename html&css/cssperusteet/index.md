# CSS:n perusteet

CSS (Cascading Style Sheet) on merkintäkieli, jolla HTML-koodia muotoillaan. Sillä voidaan muokata niin pieniä asioita kuten tekstin väriä kuin suuriakin kokonaisuuksia kuten sivuston elementtien asettelua.

## CSS:n lisääminen

CSS-koodin voi sijoittaa kolmeen eri kohtaan. Niin sanottu *inline style* sijoitetaan suoraan HTML-elementtiin, jota halutaan muotoilla.

````html
<h1 style="color: red;">Headline</h1>
````

HTML-tiedoston yläosaan voi myös kirjoittaa CSS-koodia niin sanotulla sisäisellä tyylitiedostolla.

````html
<head>
    <style>
        h1 {
            color: red;
        }
    </style>
</head>
````

Kuitenkin suositelluinta on, että CSS-koodi kirjoitetaan erilliseen CSS-tiedostoon. Kyseinen tiedosto linkitetään HTML-tiedoston ``<head>``iin. Tyypillisesti CSS-tiedosto laitetaan joko samaan kansioon HTML-tiedoston kanssa tai erilliseen kansioon, johon voi laittaa useita CSS-tiedostoja.

````html
<head>
    <link rel="stylesheet" href="styles.css">
</head>
````

Mikäli käyttää näistä tavoista useampaa ja samaa elementtiä yrittää muotoilla useampi sääntö, *inline* voittaa aina. Sen sijaan ulkoisen ja sisäisen tyylitiedoston välillä voittaja on se, joka mainitaan viimeisimpänä.


## CSS-selektorit

Jotta selain osaa yhdistää muotoilun oikeaan paikkaan, käytetään CSS:ssä selektoreja. Selektorina voi olla elementin nimi (h1), luokka (``<h1 class="mainheader">Header</h1>``) tai id (``<h1 id="mainheader1">Header</h1>``).

````css
h1 {
    color: red;
}

.mainheader {
    color: blue;
}

#mainheader1 {
    color: green;
}
````

Lisäksi selektorissa voi olla useampia osia eli yhdistelmiä. Esimerkiksi selektorin alkuosa voi olla luokka ja jälkiosa voi olla elementti.

````css
.mainheader h1 {
    color: brown;
}
````

Tämän lisäksi on olemassa pseudoluokkia eli tyypillisesti lisätietoa antavia elementin osia, kuten *hover*, *active*, *focus*. Koko lista löytyy [täältä](https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-classes)<base target="_blank">.

````css
button:hover {
    color: red;
    cursor: pointer;
}
````

On mahdollista laittaa useampi selektori samaan sääntöön, jos halutaan, että samat muotoilut pätevät useaan asiaan. Silloin ne erotetaan pilkulla toisistaan.

````css
h1, h3, p {
    color: purple;
}
````

Jos samaan elementtiin kohdistuu keskenään ristiriitaisia ohjeita, CSS:llä on oma järjestyksensä, missä se ottaa ohjeita vastaan. Yleisohjeena on, että viimeisenä kirjoitettu ohje toimii. Kuitenkin eri selektorityypeillä on eroa eli id ohittaa muut tavat, luokka ohittaa elementin ja kaikkein alimpana on asteriski, joka muotoilee koko dokumenttia.

## CSS:n kirjoittaminen

CSS-sääntö koostuu seuraavista osista: selektori (kertoo, mitä muotoillaan), muotoiltava ominaisuus (esimerkiksi väri) ja sen arvo (esimerkiksi punainen). Selektorin jälkeinen sisältö tulee aina aaltosulkeiden sisään ja jokainen yksittäinen ominaisuus merkitään kaksoispisteellä ja arvon jälkeen tulee puolipiste. Saman selektorin sisään voi laittaa peräkkäin niin monta ominaisuus-arvo -paria kuin on tarpeen muotoilla kyseinen osuus.

````css
h1 {
    font-size: 3em;
    color: purple;
    text-decoration: underline;
}
```````