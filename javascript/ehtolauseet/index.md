# Ehtolauseet

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

## Demoharjoitus 1

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