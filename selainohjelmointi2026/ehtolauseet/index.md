# Ehtolauseet

## Totuusarvojen vertailu


Ehtolauseissa käytetään usein vertailuoperaattoreita. Vertailuoperaatio palauttaa totuusarvon (true/false):

| Vertailuoperaattori    | Esimerkkejä      | 
| ---------------------- |:-------------:| 
| < (pienempi kuin)   | ``` 2 < 2``` | 
| > (suurempi kuin)     | ``` -1 > 0 ```     |  
| <= (pienempi tai yhtäsuuri kuin)   | ``` 20 <= 2``` | 
| >= (suurempi tai yhtäsuuri kuin)     | ``` -1 >= -1 ```     | 
| == (yhtäsuuri)| ```90 == "90"``` |
| === (yhtäsuuri ja samaa tyyppiä) | ```90 === 900/10``` |
| != (erisuuri) | ``` 2 != 10``` |

Jos ehtoja on useampia, täytyy käyttää lisää operaattoreita.
| Vertailuoperaattori    | Esimerkkejä      | 
| ---------------------- |:-------------:| 
| && jos kahden tai useamman ehdon pitää täyttyä   | ``` name != undefined && name.length >= 2``` | 
| || jos ehto on joko tai     | ``` number > 0 || number > 10 ```     |  


## Demotehtävä 1

1. Testaa vertailuoperaatioita. Luo muuttujat *date* ja *date2* ja anna niille jokin eri numeroarvo. Kokeile ensin, ovatko ne samankokoiset konsolissa eli *console.log(date == date2);*. Sitten kokeile vertailla niitä vertailumerkeillä.
2. Luo muuttuja *date3*, joka on merkkijono, jonka sisällä on numero ja joka on sama kuin *date2*. Testaa, ovatko ne samoja, kun käytät tuplayhtäläisyysmerkkejä. Sitten testaa, ovatko ne samoja, kun käytät kolmoisyhtäläisyysmerkkejä. 


JavaScriptissä on muutamia erilaisia ehtolausetyyppejä. Tässä käymme niistä läpi kaksi.

## If /else

JavaScriptissä on kaksi tapaa tehdä ehtolause. Jos ehto on lyhyt sen voi kirjoittaa näin:

```js
let a = 10;
let b = 9;
a > b ? "kissa" : "koira";
```

Tässä alustettiin ensin muuttujat a ja b. Jos vertailu a > b saa arvon *true*, palautuu "kissa" muuten "koira.

Jos tosihaarassa pitää suorittaa enemmän koodia, on parempi käytää if-else-rakennetta (aaltosulkujen sisään voi laittaa useita rivejä koodia ns. koodilohko):
```js
if(a > b){
  "kissa"
  } else {
    "koira"
    }
```

## Demoharjoitus 2

1. Tee ehtolauseke käyttäen aiempia *date*-muuttujia. Jos *date* on suurempi kuin *date2*, tulosta konsoliin *Bigger*. Jos se on pienempi. tulosta konsoliin *Smaller*.

## Switch case


*switch*-rakenteen avulla voidaan valita suoritettava koodilohko. Oletuksena on, että tarjolla on joukko vaihtoehtoja, joiden arvot ovat tiedossa.

```js
switch(language) {
  case "swedish":
    console.log("God dag!")
    break;
  case "finnish":
    console.log("Päivää!")
    break;
  default:
    console.log("Hello!")
}
```