# CSS:n perusteet

CSS (Cascading Style Sheet) on merkintäkieli, jolla HTML-koodia muotoillaan.

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

Lisäksi selektorissa voi olla useampia osia eli yhdistelmiä. Esimerkiksi