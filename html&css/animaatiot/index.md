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

## Nopeus

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

On melko yleistä käyttää *transition*ien yhteydessä *transform*-ominaisuuksia eli muodon muuttamisominaisuuksia.