# Animaatiot

CSS:llä voidaan tehdä animaatioita. Useimmin niitä näytetään erilaisissa muutostilanteissa eli esimerkiksi *hover*in yhteydessä. 

## Siirtymät (transitions)

*transition*-ominaisuudella voi muuttaa esimerkiksi jonkin elementin kokoa tai väriä tai muuten olomuotoan. Oleellista on, että transitio palaa alkuperäiseen tilaansa automaattisesti, kun sen aloittava ehto ei enää täyty. Näitä käytetään kaikkein useimmin *hover*-efektin kanssa. Varsinaisessa elementissä määritellään *transition*in ominaisuus ja tyyppi ja *pseudo-class*in yhteydessä se, mikä on muutoksen ääriarvo.

Alla olevassa koodissa on punainen neliö, jonka leveys kasvaa välittömästi, kun hiiri viedään sen yli.

````css
div {
  width: 100px;
  height: 100px;
  background: red;
  transition: width;
}

div:hover {
  width: 300px;
}
````

Useampia *transition*eja on mahdollista laittaa peräkkäin, kun eri osat erotetaan pilkulla toisistaan. Eli on mahdollista yhdistää samaan esimerkiksi taustavärin ja fonttikoon muutokset.

## Nopeustyylit

*transition*ille voi lisätä ajan, jossa siirtymä tapahtuu. Se tekee siirtymästä yleensä paremman näköisen.

````css
div {
  width: 100px;
  height: 100px;
  background: red;
  transition: width 2s;
}

div:hover {
  width: 300px;
}
````

Nopeudelle voi myös määrittää tyylin eli sen, onko nopeus koko ajan sama vai vaihteleeko se muutoksen aikana. Oletuksena on *ease* eli siirtymä on alussa ja lopussa vähän hitaampi kuin keskellä. 

- linear - siirtymä on yhtä nopea koko ajan alusta loppuun 
- ease-in - siirtymä on hitaampi alussa 
- ease-out - siirtymä on hitaampi lopussa
- ease-in-out - siirtymä on hitaampi sekä alussa että lopussa

*transition*ille voi antaa myös viipymän (*delay*), minkä jälkeen se vasta alkaa tapahtua.

Kaikki ominaisuudet voi listata erikseen tai käyttää yhdistelmää, jossa arvot ovat tietyssä järjestyksessä.

````css
div {
  transition: <property> <duration> <timing-function> <delay>;
}
````

## Muutokset (transformations)

On melko yleistä käyttää *transition*ien yhteydessä *transform*-ominaisuuksia eli muodon muuttamisominaisuuksia. Muutettavia ominaisuuksia ovat esimerkiksi paikka (*translate*), suunta (*rotate*), koko (*scale*) tai vaikka vääristys (*skew*).

Jos haluamme esimerkiksi kääntää neliön mallisen *div*in kärjelleen, se tapahtuu *rotate*n avulla.

````css
div {
  transform: rotate(45deg);
  }
````

## Animaatiot

Varsinaiset animaatiot ovat sellaisia, jotka voivat jatkua koko ajan tai tietyn ajan riippuen määritelmistä.

Animaatioilla on useita eri arvoja, joista voi käyttää osaa tai kaikkia seuraavassa järjestyksessä:

````css
div {
  animation: <name> <duration> <timing-function> <delay> <iteration-count> <direction> <fill-mode> <play-state>;
}
````
### animation-name ja @keyframes

Animaatio kirjoitataan CSS:ään ikään kuin oman selektorin alle. Se aloitetaan kirjoittamalla säännön eteen *@keyframes*, minkä jälkeen kirjoitetaan animaatiolle kehitetty nimi. Aaltosulkeiden sisään kirjoitetaan animaation alkutilanne ja lopputilanne. Sitten muutettavaan elementtiin voi laittaa *animation-name*-ominaisuuteen arvoksi kehitetty nimi. *animation-duration* kertoo, kuinka kauan animaatio kestää. Alla on koodi, jolla *div* muuttuu punaisesta keltaiseksi neljän sekunnin aikana.

````css
/* The animation code */
@keyframes example {
  from {background-color: red;}
  to {background-color: yellow;}
}

/* The element to apply the animation to */
div {
  width: 100px;
  height: 100px;
  background-color: red;
  animation-name: example;
  animation-duration: 4s;
}
````

Jos kyse on monimutkaisemmasta animaatiosta, on *@keyframes*issa mahdollista käyttää prosentteja *from* ja *to*n sijaan. Jos tahtoisimme esimerkiksi muuttaa alueen punaisesta keltaisen kautta siniseen ja vielä vihreään, animaation voi jakaa prosenteilla pienempiin paloihin.

````css
/* The animation code */
@keyframes example {
  0%   {background-color: red;}
  25%  {background-color: yellow;}
  50%  {background-color: blue;}
  100% {background-color: green;}
}

/* The element to apply the animation to */
div {
  width: 100px;
  height: 100px;
  background-color: red;
  animation-name: example;
  animation-duration: 4s;
}
````

### animation-iteration-count

Voimme määritellä, kuinka monta kertaa animaatio pyörii. Se voi olla numero. Oletus on yksi, mutta jos haluamme, se voi jatkua vaikka loputtomasti (*infinite*). Alla yksinkertainen animaatio, jossa laatikko muuttuu punaisesta keltaiseen ja takaisin loputtomasti.

````css
/* The animation code */
@keyframes example {
  0%   {background-color: red;}
  50%  {background-color: yellow;}
  100% {background-color: red;}
}

/* The element to apply the animation to */
div {
  width: 100px;
  height: 100px;
  background-color: red;
  animation-name: example;
  animation-duration: 4s;
  animation-iteration-count: infinite;
}
````

### Animaation suunta

Animaation suunnan voi myös määrittää *animation-direction*in avulla. Oletuksena on *normal* eli se tehdään alusta loppuun siinä järjestyksessä, jossa se on kirjoitettu. Vaihtoehtoina on myös *reverse* eli päinvastainen, *alternate* eli ensin oikein ja sitten päinvastoin ja *alternate-reverse* eli ensin päinvastoin ja sitten oikein. Esimerkissä laatikko liikkuu loputtomasti ensin myötäpäivään ja sitten vastapäivään ja vaihtaa väriä samalla.

````css
/* The animation code */
@keyframes example {
  0%   {background-color:red; left:0px; top:0px;}
  25%  {background-color:yellow; left:200px; top:0px;}
  50%  {background-color:blue; left:200px; top:200px;}
  75%  {background-color:green; left:0px; top:200px;}
  100% {background-color:red; left:0px; top:0px;}
}

/* The element to apply the animation to */
div {
  width: 100px;
  height: 100px;
  background-color: red;
  animation-name: example;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  animation-direction: alternate;
}
````

### Nopeustyyli

*animation* ottaa samat nopeustyylit kuin *transition*. Oletus on *ease* eli alku hidas, keskellä nopea ja lopussa hidas. Muut ovat *linear*, *ease-in*, *ease-out*, *ease-in-out*. Katso ylempää määritelmät.

### animation-fill-mode

Oletuksena on, että animaation loputtua tyyli palaa takaisin alkuperäiseksi eli *animation-fill-mode* on *none*, mutta tätä voi muokata halutessaan.

*forwards* tarkoittaa, että tyyliksi jää *keyframes*in viimeisin arvo. Tämä tosin ei toimi esimerkiksi silloin, jos *animation-iteration-count* in *infinite*.

*backwards* tarkoittaa, että tyyliksi jää *keyframes*in ensimmäinen arvo.