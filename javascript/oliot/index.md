# Oliot eli assosiatiiviset taulukot

Oliot ovat periaatteessa taulukoita (joissakin tapauksissa myös kaksiulotteisia taulukoita), joissa jokaiselle alkiolle on annettu jokin nimi.

## Tietotyyppien kertaus

JavaScriptissä on kahta eri tyyppiä tietotyyppejä. Meillä on primitiivisiä tietotyyppejä, joita ovat *null*, *undefined*, *boolean*, *number*, *string* ja *symbol*. Lisäksi on olioita eli referenssityyppi. Olemme jo käyttäneet olioita, sillä periaatteessa funktiot ja taulukot ovat olioita. Primitiivisten tietotyyppien ja olioiden välillä merkittävin ero on siinä, mihin ne tallentuvat. 

Kun primitiivinen tyyppi määritellään, se tallentuu *stack*-muistiin. Se on muisteista pienempi mutta nopeampi. Tallennuksessa primitiiviselle tyypille määritellään koko, jota ei voi muuttaa jälkikäteen (jos tyyppi on määritelty sanalla *const*, sitä ei myöskään voi vaihtaa). Primitiivistä tyyppiä ei voi varsinaisesti muuttaa. Kun kirjoitetaan esimerkiksi seuraavanlainen koodipätkä, ulospäin näyttää siltä, että tietoa muutetaan.

````js
let name = "Anna";
name = "Nenna";
````
Kuitenkin muistissa muuttamista ei tapahdu, vaan JavaScript luo uuden muuttujan samalla nimellä ja viittaa aina siihen uusimpaan. Vanhempi katoaa pienen ajan päästä muistista. Siksi primitiivisiä tietotyyppejä kutsutaan muuttumattomiksi (immutable), koska ne vaihdetaan eikä niitä voi muuttaa.

Oliot (object) sen sijaan tallentuvat eri tavalla. Nopeaan stack-muistiin tallentuu vain referenssi eli viittaus siihen, mihin kohtaan heap-muistia olion varsinainen tieto on tallennettu. Heap on suurempi ja hieman hitaampi muisti kuin stack. Heap-muistiin kirjoitettua tietoa voidaan muuttaa eli sen viittaus pysyy samana, mutta sisältö muuttuu. 


## Olion perusteet

Olion voi luoda samaan tapaan kuin minkä tahansa muuttujan. Sille pitää antaa nimi ja arvo. olion arvoilla jokaisella on kuitenkin oma nimi myös ja ne ilmoitetaan aaltosulkeiden sisällä.

````js
const student = {name: "Mary Sue", birthYear: 2004, studentNumber: 23328799};
````

Olion sisällä voi kuitenkin olla myös uusia taulukoita, kuten:

````js
const student = {name: "Mary Sue", birthYear: 2004, studentNumber: 23328799, 
courses: ["JavaScript", "HTML", "CSS", "Project Management"]};
````

## Ominaisuuksien valitseminen oliosta

Toisin kuin tavallisessa taulukossa, olion ominaisuuksia ei valita indeksillä, vaan pisteellä. Jos haluamme tulostaa *student*-olioltamme vaikkapa syntymävuoden, se toimii seuraavalla koodilla: 

````js
const student = {name: "Mary Sue", birthYear: 2004, studentNumber: 23328799};
console.log(student.birthYear);
````

Tätä samaa olemme jo käyttäneetkin esimerkiksi Math-kirjaston kanssa, kun olemme arponeet satunnaisia numeroita koodilla:
````js
let number = Math.random()*10;
````

Siinä olemme valinneet pisteellä kyseisen olion sisältämän funktion, sillä olion ominaisuuksina voi olla myös funktioita.