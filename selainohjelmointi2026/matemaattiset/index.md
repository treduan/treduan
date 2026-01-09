# Muuttujien muuntaminen

## Matemaattiset operaatiot

JavaScriptillä voidaan tehdä monenlaisia matemaattisia laskutoimituksia.

Tässä ovat matemaattiset operaattorit:

| Operaattori    | Esimerkkejä    | 
| --------------------- |:-------------:| 
| + (yhteenlasku) | ```4 + 5 ``` | 
| - (vähennyslasku) | ```4.5 - 3.1 ``` |
| * (kertolasku)| ```90 * 0.23``` |
| / (jakolasku) | ```3 / 20``` |
| ** (potenssiin korotus) | ``` 2 ** 10``` |
| % (modulo, jakojäännös) | ``` 10 % 6``` |

Laskujärjestys ilmoitetaan sulkujen avulla:
```js
(20 + 3)/(14 - 2)
```

Nämä toimivat, jos kaikki muuttujat ovat tyyppiä *number*. 

## Demotehtävä 1

Tehdään muutama yksinkertainen lasku JavaScriptillä.

1. Luo ensin kaksi muuttujaa. *let firstNumber = 18;* ja *let secondNumber = 7;* Tulosta niiden summa konsoliin: *console.log(firstNumber + secondNumber);* . 
2. Luo uusi muuttuja nimeltään *sum*. Anna sille arvoksi *firstNumber + secondNumber*. Tulosta *sum* konsoliin.
3. Vähennä *firstNumber*ista *secondNumber* ja tulosta se konsoliin.
4. Jaa *sum* *secondNumber*illa ja tulosta se konsoliin.

___

## Tyyppimuunnokset

Koska JavaScript on dynaamisesti tyypitetty ohjelmointikieli, muuttujan tyyppiä on mahdollista vaihtaa ja joissakin tilanteissa JavaScript tekee sen automaattisesti. 

Jos käyttäjä haluaa vähentää numeron merkkijonosta, se onnistuu, mikäli merkkijono sisältää ainoastaan numeroita. 

![merkkijonosta miinustetaan numero](stringmiinusnumero.PNG)

Kuitenkin jos merkkijonoon, jossa on vain numeroita, yrittää lisätä numeron, tapahtuukin jotain muuta. 

![merkkijonoon lisätään numero](stringplusnumero.PNG)

Tässä tapauksessa JavaScript kohtelee molempia ikään kuin ne olisivat merkkijonoja. 

Ohjelmoija voi halutessaan muuntaa useita muuttujia eri tyyppisiksi välttääkseen tällaiset ongelmat.

````JS
let firstNumber = "12";
let secondNumber = 8;
firstNumber = Number(firstNumber);
````

Aiemman lisäämisongelman voisi ratkaista myös tällä tavalla: 

![merkkijonon muuntaminen](../kuvat/numeronmuunto.PNG)

Numeron voi muuntaa myös merkkijonoksi:

````JS
let secondNumber = 8;
secondNumber = String(secondNumber);
````

___

## Merkkijonot

Pidempiä merkkijonoja voidaan muodostaan yhdistelemällä lyhyempiä. Lausekkeessa voi olla mukana muuttujia sekä lukuja. Usein merkkijonoja tulostetaan konsolille:

```js
console.log("Tämän ohjelman nimi on: " + name + ".");
```

Selaimessa toimii myös alert-ikkuna (ei toimi node.js:n kanssa):

```js
alert('Soita numeroon ' + number);
```

Merkkijonon pituuden saat selville *length*:in avulla:

```js
info.length
```

## Demotehtävä 2

1. Luo muuttuja *name*, jos sitä ei vielä ole. Tulosta konsoliin teksti, jossa on alkuosana *Minun nimeni on*, sitten muuttuja *name* ja lopussa piste. Katso tarkkaan, onko lainausmerkkien sisällä oikea määrä välilyöntejä, jotta teksti ei tule putkeen.
2. Testaa alert-laatikkoa. Luo ensin muuttuja nieltään *errorMessage* ja kirjoita siihen merkkijono, jossa lukee jotain vastaavaa kuin *Something went wrong. Contact ** ja luo lisäksi uusi muuttuja nimeltään *phoneNUmber* ja anna sille jokin arvo, joka näyttää puhelinumerolta. Sitten tulosta *errorMessage* + *phoneNumber* alert-laatikon kautta.
3. Tarkista muuttuja errorMessage pituus. Tulosta se konsoliin.