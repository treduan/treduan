# JavaScript-harjoitukset 2

Luo uusi tiedosto nimeltään *javascriptharjoitukset2.js* ja tee kaikki nämä harjoitukset samaan tiedostoon.

## Harjoitus 1
1. Kirjoita funktio analyzeName, joka saa parametrina merkkijonon.
2. Jos parametri ei ole merkkijono, tulosta virheilmoitus.
3. Jos nimi sisältää välilyönnin, tulosta "Nimi sisältää useamman osan." ja jatka funktiota.
4. Muussa tapauksessa:
- tulosta nimen pituus (jos siinä on välilyönti, miinusta yksi)
- tulosta nimi isoilla kirjaimilla
5. Testaa fuktiota arvoilla ``"Matias"``, ``4473``, ``true``, ``"Mary Sue"``.

Vihjeitä: typeof, length, toUpperCase(), includes()

## Harjoitus 2
1. Kirjoita funktio getGreeting(), joka saa parametriksi taulukon.
2. Funktio tarkistaa, saiko se taulukon.
3. Funktio palauttaa taulukosta satunnaisen alkion (käytä Math.random()).
4. Tulosta arvottu alkio konsoliin.
5. Testaa funktiota arvoilla ``let greetings1 = ["Moi", "Hei", "Terve"];`` ja ``"Moikka`` ja ``let greetings2 = ["Moikka", "Päivää", "Moro", "Huomenta", "Heipparallaa"]``.

## Harjoitus 3
1. Luo funktio *calculateAverage()*, joka ottaa vastaan opiskelija-olion.
2. Tarkista, että parametri on olio ja siltä löytyy taulukko nimeltään *scores*.
3. Laske koepisteistä keskiarvo ja pyöristä se. 
4. Tulosta:
- opiskelijan nimi
- keskiarvo
- sanallinen arvio:
 => yli 80 → "Erinomainen"
 => 50–80 → "Hyväksytty"
 => alle 50 → "Hylätty"
 (Esim. ``Mary Sue, keskiarvo 77, arvosana Hyväksytty``)
5. Testaa oliolla ``const student1 = {name: "Mary Sue", scores: [78, 85, 92, 88]};`` ja ``const student2 = {name: "John Doe", scores: [67]};`` ja ``const student3 = {name: "Jane Doe"};``

## Harjoitus 4
1. Luo funktio ``updateCities()``, joka ottaa parametrinä kaksiulotteisen taulukon.
2. Tarkista, että parametri on taulukko. Jos ei ole, tulosta virheviesti.
3. Käy taulukko läpi rivi kerrallaan.
4. Jos kaupungin asukasluku on alle 100 000, poista kyseinen kaupunki taulukosta käyttäen ``splice``-metodia. Koska ``splice()`` saattaa muuttaa taulukon pituutta, on turvallisempaa käydä taulukko läpi lopusta alkuun.
5. Jos listaan ei jää yhtään kaupunkia, tulosta "Kaikki kaupungit ovat pieniä."
5. Tulosta päivitetty kaupunkilista konsoliin muodossa: "Suuria kaupunkeja ovat: *nimi*, *asukasluku*, *toinen nimi*, *asukasluku*" jne (luo niistä uusi merkkijono).
6. Testaa seuraavilla arvoilla: 

````js
let cities = [
  ["Helsinki", 650000],
  ["Tampere", 240000],
  ["Vaasa", 90000],
  ["Oulu", 210000]
];

let city = "Vantaa";

let cities2 = [
    ["Raahe", 35000],
    ["Rovaniemi", 65000],
    ["Kauhava", 15000]
];
````