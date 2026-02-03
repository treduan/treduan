# SQL:n perusteet

SQL (structured query language) on hakukieli, jolla voidaan käsitellä relaatiotietokantoja, jotka ovat yleisimpiä tietokantoja. Sillä voidaan luoda tietokantoja ja siihen tauluja, muokata niitä, lisätä, muuttaa ja poistaa tietoja sekä hakea niistä tietoja monenlaisilla ehdoilla.

SQL:ssä on muutamia eri versioita, joissa on pieniä eroavaisuuksia, mutta perusteet ovat kaikissa samat. Eri versioita ovat eri tietokantatarjoajat kuten MySQL, PostgreSQL, MariaDB ja useampi muu.

## Syntaksi

Kun luodaan SQL-lauseke, se tehdään tietyssä järjestyksessä ja jokainen lauseke päättyy puolipisteeseen (;). Toisin kuin JavaScript, SQL on hyvin tarkka tästä.

SQL:n järjestys on seuraava:

````sql
SELECT sarakkeet
FROM taulu
WHERE ehto
ORDER BY sarake
LIMIT määrä;
````

Käytämme alkuun esimerkkitietokantana ja sen hakukäyttöliittymänä [w3schoolsin tietokantatyökalua](https://www.w3schools.com/sql/trysql.asp?filename=trysql_select_all)<base target="_blank">. Se käsittelee asiakastietokantaa, joten pääasiallisen taulun nimi on *Customers*.

Kun tahdomme valita kaikki taulun tiedot, käytämme syntaksia ``SELECT * from Customers;`` *SELECT* alussa merkitsee, että teemme haun. Sen jälkeen voimme määritellä, mitä tarkalleen ottaen haluamme hakea. Tähti tarkoittaa kaikkea, mutta voimme hakea esimerkiksi ContactNamen tai minkä tahansa muun yksittäisen tiedon tai useampia tietoja, jos emme tahdo kaikkia tietoja. Jos tahdomme nähdä vain asiakkaan ja kontaktihenkilön tiedot, voimme muokata hakua seuraavasti: ``SELECT CustomerName, ContactName FROM Customers;``

Jos tahdomme lisätä ehtoja, niitä voi lisätä sen jälkeen, kun olemme ensin määritelleet, mitkä tiedot haluamme ja mistä taulusta. Se tapahtuu lisäämällä ehdon sanalla *WHERE*. Esimerkiksi jos haluamme valita kaikki asiakkaat, joiden maa on Ruotsi, se tapahtuisi seuraavasti:

````sql
SELECT CustomerName FROM Customers 
    WHERE Country = 'Sweden';
````

Voimme tehdä myös muunlaisia vertailuja eli esimerkiksi voimme valita näytettäviksi vain sellaiset, joissa jokin summa on tietyn rajan ylittävä. Esimerkiksi taulusta *OrderDetails* voimme valita vain tilaukset, joissa määrä ylittää kymmenen.

````sql
SELECT * FROM OrderDetails 
    WHERE Quantity > 10;
````

Ehtoja voidaan myös yhdistää loogisilla operaattoreilla eli sanoilla ``OR``, ``AND`` sekä ``NOT``, jos haluamme, että jotain ei huomioda.

Tässä siis valitaan asiakkaiden nimi ja maa, jos maa on Saksa tai Ranska.
````sql
SELECT CustomerName, Country
FROM Customers
WHERE Country = 'Germany' OR Country = 'France';
````

Tässä valitaan kaikki tiedot, joissa maa on Saksa ja kaupunki on Berliini.
````sql
SELECT *
FROM Customers
WHERE Country = 'Germany' AND City = 'Berlin';
````

Tässä valitaan kaikki tiedot, missä maa ei ole USA.
````sql
SELECT *
FROM Customers
WHERE NOT Country = 'UK';
````

Vertailuehtoja voi antaa myös muilla tavoilla. Esimerkiksi ``BETWEEN`` antaa mahdollisuuden vertailla numeromääriä.

````sql
SELECT *
FROM OrderDetails
WHERE Quantity BETWEEN 5 AND 10;
````

Jos meillä on monia eri ehtoja, voimme myös käyttää hakuehtona sanaa ``IN``.

Tässä siis Countryn pitää olla jokin seuraavista. Sen voisi kirjoittaa myös käyttämällä sanaa ``OR``, mutta tämä on lyhyempi.

````sql
SELECT *
FROM Customers
WHERE Country IN ('Sweden', 'Norway', 'Denmark');
````

Vastaavasti jos haluamme, että useampaa arvoa ei hyväksytä, tässä valitaan asiakkaat maista, jotka eivät ole USA tai UK.

````sql
SELECT *
FROM Customers
WHERE Country NOT IN ('USA', 'UK');
````

Jos haluamme hakea tuloksia, joissa tiedämme osittaisen merkkijonon, voimme käyttää sanaa ``LIKE``. 

Tässä esimerkissä etsimme asiakkaiden nimiä, kun nimi alkaa kirjaimella A.

````sql
SELECT *
FROM Customers
WHERE CustomerName LIKE 'A%';
````

Prosenttimerkki ``%`` on niinsanottu jokerimerkki eli siinä kohtaa voisi olla mitä tahansa merkkejä mikä tahansa määrä. Jos haluamme jonkin tietyn merkkimäärän, voimme käyttää sen sijaan alalyöntejä ``_``, jotka esittävät yhtä merkkiä.