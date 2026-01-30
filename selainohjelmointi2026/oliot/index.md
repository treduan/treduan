# Oliot (objects)

Oliot ovat periaatteessa taulukoita (joissakin tapauksissa myös kaksiulotteisia taulukoita), joissa jokaiselle alkiolle on annettu jokin nimi (avain). Niitä voi käyttää myös periyttävästi.

## Tietotyyppien kertaus

JavaScriptissä on kahta eri tyyppiä tietotyyppejä. Meillä on primitiivisiä tietotyyppejä (primitive types), joita ovat *null*, *undefined*, *boolean*, *number*, *string* ja *symbol*. Lisäksi on olioita eli referenssityyppi (reference types). Olemme jo käyttäneet olioita, sillä periaatteessa funktiot ja taulukot ovat olioita. Primitiivisten tietotyyppien ja olioiden välillä merkittävin ero on siinä, mihin ne tallentuvat. 

Kun primitiivinen tyyppi määritellään, se tallentuu *stack*-muistiin. Se on muisteista pienempi mutta nopeampi. Tallennuksessa primitiiviselle tyypille määritellään koko, jota ei voi muuttaa jälkikäteen (jos tyyppi on määritelty sanalla *const*, sitä ei myöskään voi vaihtaa). Primitiivistä tyyppiä ei voi varsinaisesti muuttaa. Kun kirjoitetaan esimerkiksi seuraavanlainen koodipätkä, ulospäin näyttää siltä, että tietoa muutetaan.

````js
let name = "Anna";
name = "Nenna";
````
Kuitenkaan muistissa muuttamista ei tapahdu, vaan JavaScript luo uuden arvon ja asettaa muuttujan viittaamaan siihen. Vanha arvo jää ilman viittausta ja poistuu myöhemmin muistista. Siksi primitiivisiä tietotyyppejä kutsutaan muuttumattomiksi (immutable), koska ne vaihdetaan eikä niitä voi muuttaa.

Oliot (object) sen sijaan tallentuvat eri tavalla. Nopeaan stack-muistiin tallentuu vain referenssi eli viittaus siihen, mihin kohtaan heap-muistia olion varsinainen tieto on tallennettu. Heap on suurempi ja hieman hitaampi muisti kuin stack. Heap-muistiin kirjoitettua tietoa voidaan muuttaa eli sen viittaus pysyy samana, mutta sisältö muuttuu. 


## Olion perusteet

Olion voi luoda samaan tapaan kuin minkä tahansa muuttujan. Sille pitää antaa nimi ja arvo. Olion arvoilla jokaisella on kuitenkin oma nimi myös ja ne ilmoitetaan aaltosulkeiden sisällä.

````js
const student = {name: "Mary Sue", birthYear: 2004, studentNumber: 23328799};
````

Olion sisällä voi kuitenkin olla myös uusia taulukoita, kuten:

````js
const student = {name: "Mary Sue", birthYear: 2004, studentNumber: 23328799, 
courses: ["JavaScript", "HTML", "CSS", "Project Management"]};
````

Oliolla voi olla myös omia funktioita ominaisuuksina, jolloin niitä kutsutaan metodeiksi. Tässä yksi esimerkki, jossa tulostetaan:

````js
const student = {name: "Mary Sue", birthYear: 2004, studentNumber: 23328799, 
printInformation: function() {
    console.log(this.name + ", born in " + this.birthYear);
    }
}
````

## Ominaisuuksien valitseminen oliosta

Toisin kuin tavallisessa taulukossa, olion ominaisuuksia ei valita indeksillä ja hakasulkeilla, vaan pisteellä ja avaimella eli ominaisuuden nimellä. Jos haluamme tulostaa *student*-olioltamme vaikkapa syntymävuoden, se toimii seuraavalla koodilla: 

````js
const student = {name: "Mary Sue", birthYear: 2004, studentNumber: 23328799};
console.log(student.birthYear);
````

Tätä samaa olemme jo käyttäneetkin esimerkiksi Math-kirjaston kanssa, kun olemme arponeet satunnaisia numeroita koodilla ja valinneet siis käyttää metodia, joka on Math-oliolla:

````js
let number = Math.random()*10;
````
Jos haluamme käsitellä olion taulukkoa, se onnistuu valitsemalla oliosta taulukon nimi ja käyttämällä indeksiä valitaksemme yhden, tai jos haluamme käydä koko taulukon läpi, tarvitsemme metodia kuten *forEach*. Esimerkissä tulostetaan opiskelijan kurssilistan toinen kurssi.

````js
const student = {name: "Mary Sue", birthYear: 2004, studentNumber: 23328799, 
courses: ["JavaScript", "HTML", "CSS", "Project Management"]};

console.log(student.courses[1]);
````

Jos haluamme tarkistaa, onko oliolla jotain tiettyä avainta, siihen on useampi tapa, mutta suositelluin on seuraavanlainen:

````js 
if ("birthYear" in student) {
    console.log("Student has birth year.");
}
````

## *This* olion metodissa

Kun funktio on olion ominaisuus, sitä kutsutaan metodiksi.
Metodin sisällä *this* viittaa siihen olioon, jonka metodia kutsutaan.

````js
const student = {
  name: "Mary Sue",
  birthYear: 2004,
  printInfo: function() {
    console.log(this.name);
  }
};

student.printInfo();
````
Tässä tapauksessa: *this* viittaa student-olioon ja *this.name* tarkoittaa samaa kuin *student.name*. Muissa yhteyksissä *this* voi viitata myös muihin asioihin.

## Demotehtävä

1. Luo olio lemmikkieläimestä. Anna sille nimi, laji, rotu ja ikä. Lisää sille myös taulukko suosikkileluista. Lisää vielä funktio, jolla kyseinen eläin ääntelee (esimerkiksi kissan kohdalla konsoliin tulostetaan "*nimi*-niminen *laji* sanoo miau.").
2. Tulosta erikseen lemmikin nimi ja laji.
3. Tulosta lemmikin suosikkilelut.
4. Tulosta lemmikin ääntely kutsumalla sen funktiota.