# SASS

SASS eli Syntactically Awesome Stylesheet on CSS:n laajennus, joka tuo verkkosivun tyylittelyyn ohjelmallisuutta. Jotta sitä voi käyttää, täytyy se asentaa, jolloin se kääntää SASSin CSS:ksi, jonka selain ymmärtää. Tapoja on monta (useimmiten SASSia käytetään jonkin frameworkin kuten Reactin kanssa, jolloin se asennetaan projektiin). Me käytämme Visual Studio Coden lisäosaa.

## SASSin asentaminen

1. Avaa Visual Studio Code.
2. Vasemmassa laidassa valitse lisäosat.
3. Etsi Live SASS Compiler ja asenna se.

## SASSin ominaisuudet

SASS tuo CSS:ään uusia ominaisuuksia, joista on joissakin tapauksissa hyötyä.

SASSilla voi määritellä muuttujia. Erityisen usein sillä määritellään värejä. Usein verkkosivulle määritellään muutama käytetty värisävy, mutta niillä sävyillä ei usein ole nimeä, vaan vain HEX-koodi. On helpompaa määritellä sävylle nimi, jolla siihen voi viitata.

````css
$primary: rgb(200, 45, 45);
$primary_dark: rgb(133, 13, 13);
$primary_light: rgb(238, 82, 82);

h1 {
    color: $primary;
}

p {
    color: $primary_dark;
}
````

SASS sallii myös CSS-selectorien upottamisen toisiinsa. CSS:ssä on pakko toistaa selektorit.

````css
nav ul {
    display: flex;
    list-style: none;
}

nav li {
    color: blue;
}

nav li:hover {
    color: black;
} 
````

SASSilla saman voi kirjoittaa upottaen.

````css
nav {
    ul {
        display: flex;
        list-style: none;
    }
    li {
        color: blue;
        &:hover {
            color: black;
        }
    }
}
````

Upottaen voi kirjoittaa myös sellaisia valintoja, joissa on sama alku.

````css
text: {
    align: center;
    transform: lowercase;
    overflow: hidden;
}
````

SASSilla voi luoda mixinejä, jotka ovat joukko ominaisuuksia, joita voi käyttää monessa paikassa. Se luodaan seuraavasti:

````css
    @mixin borders {
        border: solid 2px brown;
        border-radius: 12 px;
        box-shadow: grey 8px 8px 5px; 
        padding: 10px;
    }
````

Ja jotta sitä voidaan käyttää:

````css
    button {
        @include borders;
        background-color: red;
    }
````

Ja lopuksi SASSilla voidaan tehdä periytymistä eli luoda joukko ominaisuuksia, joihin voi lisätä uusia ominaisuuksia. Tämä on hyvin lähellä mixiniä, mutta ensimmäinen voi olla täysi selektori, ei vain joukko yhteisiä ominaisuuksia. Ensin määritellään jokin selektori ja sen ominaisuudet. Sen jälkeen voidaan luoda uusi selektori, joka käyttää kaikkia samoja ominaisuuksia, mutta siihen voi lisätä joitakin omia ominaisuuksia.

````css
.button-basic  {
  border: none;
  padding: 15px 30px;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
}

.button-report  {
  @extend .button-basic;
  background-color: red;
}

.button-submit  {
  @extend .button-basic;
  background-color: green;
  color: white;
}
````

## SASSin näkyminen

SASS ei näy selaimessa automaattisesti. Kun SASSia kirjoitetaan, pitää tiedoston nimessä olla loppu .scss, jos me kirjoitamme koodin perinteisen CSS:n näköiseksi (on mahdollista kirjoittaa myös pelkkien sisennysten kanssa, jolloin loppu on .sass). Kuitenkin HTML-tiedoston linkityksessä kuuluu olla pelkkä .css, mutta tiedoston alun pitää olla sama.

Kun haluamme nähdä SASS-muotoilun, käännämme tiedoston käyttäen Live Sass Compileria, kun SASS-tiedostomme on auki. Sen voi avata käyttämällä näppäinyhdistelmää Shift+Control+P, jolloin kirjoitamme kenttään Live Sass: Compile Current Sass File ja painamme sitä. Nyt kun avaamme HTML-tiedoston, pitäisi SASS-muotoilujen olla näkyvillä.