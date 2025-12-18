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

1. Testaa vertailuoperaatioita. Luo muuttujat *time* ja *time2* ja anna niille jokin eri numeroarvo. Kokeile ensin, ovatko ne samankokoiset konsolissa eli *console.log(time == time2);*. Sitten kokeile vertailla niitä vertailumerkeillä.
2. Luo muuttuja *time3*, joka on merkkijono, jonka sisällä on numero ja joka on sama kuin *time2*. Testaa, ovatko ne samoja, kun käytät tuplayhtäläisyysmerkkejä. Sitten testaa, ovatko ne samoja, kun käytät kolmoisyhtäläisyysmerkkejä. 
___

JavaScriptissä on muutamia erilaisia ehtolausetyyppejä. Tässä käymme niistä läpi kaksi.

## If / else

JavaScriptissä on kaksi tapaa tehdä ehtolause. Jos ehto on lyhyt sen voi kirjoittaa näin:

```js
let pet;
let a = 10;
let b = 9;
a > b ? pet = "cat" : pet = "dog";
```

Tässä alustettiin ensin muuttujat a ja b. Jos vertailu a > b saa arvon *true*, palautuu "kissa" muuten "koira.

Jos tosihaarassa pitää suorittaa enemmän koodia, on parempi käytää if-else-rakennetta (aaltosulkujen sisään voi laittaa useita rivejä koodia ns. koodilohko):
```js
if(a > b){
  pet = "cat"
  } else {
    pet = "dog"
    }
```

## Demoharjoitus 2

1. Tee ehtolauseke käyttäen aiempia *time*-muuttujia. Jos *time* on suurempi kuin *time2*, tulosta konsoliin *Bigger*. Jos se on pienempi. tulosta konsoliin *Smaller*.

## else if

JavaScriptissä on myös *else if*, jolla voidaan ketjuttaa eri ehtoja. Myös pelkkiä if-lausekkeita voi laittaa ketjuun, mutta ne toimivat eri tavalla.

### 1. Useat erilliset if-lauseet

Kun kirjoitat useita if-lauseita peräkkäin, kaikki ehdot tarkistetaan erikseen.
````js
let temperature = 30;

if (temperature > 25) {
  console.log("On lämmin");
}

if (temperature > 15) {
  console.log("On melko lämmin");
}
````
Molemmat ehdot ovat totta, joten  molemmat koodilohkot suoritetaan

Käytä tätä, kun:

- Useampi ehto voi olla samaan aikaan totta

- Jokainen ehto tekee oman, erillisen asiansa

````js
Esimerkki:

let age = 70;

if (age >= 18) {
  console.log("Täysi-ikäinen");
}

if (age >= 65) {
  console.log("Oikeus eläkeläisalennukseen");
}
````
### 2. if – else if – else -ketju

else if -ketjussa ehdot tarkistetaan järjestyksessä, ja kun yksi ehto on tosi, muita ei enää tarkisteta.

````js
let temperature = 30;

if (temperature > 25) {
  console.log("On lämmin");
} else if (temperature > 15) {
  console.log("On melko lämmin");
} else {
  console.log("On kylmä");
}
````

Vain yksi viesti tulostuu

Ensimmäinen tosi ehto “voittaa”

Käytä tätä, kun:

- Vaihtoehdot ovat toisiaan poissulkevia

- Haluat valita yhden lopputuloksen

Esimerkki:

````js
let score = 85;

if (score >= 90) {
  console.log("Kiitettävä");
} else if (score >= 70) {
  console.log("Hyvä");
} else {
  console.log("Tarvitsee harjoitusta");
}
````

Yleinen nyrkkisääntö

Jos useampi ehto voi olla totta → käytä useita if-lauseita
Jos vain yksi vaihtoehto saa toteutua → käytä else if -ketjua

## Demoharjoitus 3

1. Luo uusi JavaScript-tiedosto nimeltään *agetest.js*.
2. Luo funktio nimeltään *checkAge*, joka ottaa vastaan yhden numeron, jota voi kutsua nimellä *age*.
3. Tee tarkistukset, jotka perustuvat ikään. Jos ikä on vähintään 7, tulosta "Kouluikäinen". Jos ikä on vähintään 18, tulosta täysi-ikäinen. Jos ikä on vähintään 65, tulosta "Eläkeikäinen". Tee tämä ensin pelkillä if-lausekkeilla. Testaa funktiota antamalla sille numerot 5, 15, 25 ja 77. 
4. Muokkaa funktiota käyttämään else if -rakennetta.

## Switch case


*switch*-rakenteen avulla voidaan valita suoritettava koodilohko. Oletuksena on, että tarjolla on joukko vaihtoehtoja, joiden arvot ovat tiedossa. Default-vaihtoehto lopussa voi joko olla viimeinen mahdollinen vaihtoehto tai joissakin tapauksissa esimerkiksi virheilmoitus, jos annettu arvo ei vastaa mitään vaihtoehdoista.

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

## Demoharjoitus 4

1. Luo uusi JavaScript-tiedosto nimeltään *grades.js*.
2. Luo funktio nimeltään grades, joka ottaa vastaan yhden parametrin.
3. Luo switch-rakenne, joka tulostaa parametrin perusteella arvion. 5="Arvosanasi on erinomainen", 4="Arvosanasi on kiitettävä", 3="Arvosanasi on hyvä", 2="Arvosanasi on kohtalainen", 1="Arvosanasi on välttävä" ja mikä tahansa muu eli default="Et ole läpäissyt koetta."
4. Kutsu funktiota arvoilla `1`, `-3`, `5`, `88` ja `"Heippa"`.

## Demoharjoitus 5

Parannetaan edellistä harjoitusta eli lisätään siihen tarkistuksia erilaisten syötteiden varalle.
 
1. Tee funktioon `if – else if – else` -rakenne.
2. `if`: tarkista, onko annettu parametri numero.  
   Jos ei ole, tulosta konsoliin:  
   **"Arvosanan täytyy olla numero."**  
   *(Vihje: voit käyttää `typeof`-operaattoria.)*
3. `else if`: tarkista, että arvosana on välillä 0–5.  
   Jos arvo on pienempi kuin 0 tai suurempi kuin 5, tulosta:  
   **"Arvosanan pitää olla välillä 1-5."**
4. `else`: suorita `switch`-rakenne, joka tulostaa arvosanan sanallisen kuvauksen.
5. Kutsu funktiota arvoilla `1`, `-3`, `5`, `88` ja `"Heippa"`.