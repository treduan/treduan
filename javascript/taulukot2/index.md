# Taulukoiden metodit

Olemme käyneet läpi taulukoista perusteet, mutta taulukoilla on joukko metodeja, joita on hyvä harjoitella lisää.

Alla olevassa kuvassa on listaus useimmista metodeista.

![Lista taulukkometodeista](./javascriptstringmethods.jpg)

## Demotehtävä 1
1. Luo uusi JavaScript-tiedosto.
2. Luo sinne muuttuja nimeltään *sentence* ja anna sille arvoksi *This is my test sentence.*.
3. Testaa eri merkkijonometodeja lauseellasi. Tee vähintään 10 eri testiä, joiden tulokset näkyvät konsolissa.

# JSON

JSON (JavaScript Object Notation) on ohjelmointikielistä riippumaton tapa muotoilla dataa. On hyvin tyypillistä, että tietokannasta saadaan dataa juuri JSON-muodossa. Vaikka se on muodoltaan hyvin lähellä JavaScriptin olioita, tarvitaan pikkuisen käsittelyä, jotta se saadaan toimimaan JavaScriptillä.

Tässä on esimerkki JSON-objektista/taulukosta. Siinä on lista työntekijöistä.

````js
{
"employees":[
  {"firstName":"John", "lastName":"Doe"},
  {"firstName":"Anna", "lastName":"Smith"},
  {"firstName":"Peter", "lastName":"Jones"}
]
}
````

Jos loisimme JavaScriptillä vastaavan taulukon, se näyttäisi seuraavalta:

````js
    const employees = [
        {firstName: "John", lastName: "Doe"},
        {firstName: "Anna", lastName: "Smith"},
        {firstName: "Peter", lastName: "Jones"} 
    ]
````

Yhtäläisyyksiä löytyy eli kaikki tieto on tallennettu nimi/arvo -pareihin, erillisen oliot on erotettu aaltosulkein ja taulukko on määritelty hakasulkein.

JSON-taulukon saa muutettua JavaScript-taulukoksi käyttämällä metodia *JSON.parse*. Ensin JSON tallennetaan muuttujaan, jolloin sitä voidaan käyttää uudessa muuttujassa, johon tallentuu JSON.parsella muunnettu taulukko. Lopulta voimme tulostaa konsoliin tallennetussa oliossa olevan *employees*-taulukon toisen alkion etunimen, joka on *Anna*.

````js
let text = {
"employees":[
  {"firstName":"John", "lastName":"Doe"},
  {"firstName":"Anna", "lastName":"Smith"},
  {"firstName":"Peter", "lastName":"Jones"}
]
}

const emp = JSON.parse(text);
console.log(emp.employees[1].firstName);
````

## Demotehtävä 2

1. Luo uusi HTML-tiedosto.
2. Kopioi alla oleva JSON-objekti ja tallenna se muuttujaan ``<script>`` -osiossa.
3. Muuta JSON-objekti JavaScript-taulukoksi.
4. Näytä taulukon tiedot HTML-sivulla.

````js
"books": [
    {"title": "Fellowship of the Ring", "author": "J. R. R. Tolkien", "genre": "Fantasy"},
    {"title": "Dune", "author": "Frank Herbert", "genre": "Science Fiction"},
    {"title": "Pride and Prejudice", "author": "Jane Austen", "genre": "Fiction"},
    {"title": "Harry Potter and the Philosopher's Stone", "author": "J. K. Rowling", "genre": "Fantasy"},
    {"title": "Game of Thrones", "author": "G. R. R. Martin", "genre": "Fantasy"},
    {"title": "Anna Karenina", "author": "Leo Tolstoi", "genre": "Fiction"}
]
````