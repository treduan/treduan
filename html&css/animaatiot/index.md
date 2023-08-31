# Animaatiot

CSS:llä voidaan tehdä animaatioita. Useimmin niitä näytetään erilaisissa muutostilanteissa eli esimerkiksi *hover*in yhteydessä. 

## Siirtymät (transitions)

*transition*-ominaisuudella voi muuttaa esimerkiksi jonkin elementin kokoa tai väriä. Oleellista on, että transitio palaa alkuperäiseen tilaansa automaattisesti, kun sen aloittava ehto ei enää täyty. Näitä käytetään kaikkein useimmin *hover*-efektin kanssa. Varsinaisessa elementissä määritellään *transition*in ominaisuus ja tyyppi ja *pseudo-class*in yhteydessä se, mikä on muutoksen ääriarvo.

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