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

Voimme tehdä myös muunlaisia vertailuja eli esimerkiksi voimme valita näytettäviksi vain sellaiset, joissa jokin summa on tietyn rajan ylittävä. Esimerkiksi taulusta *OrderDetails* voimme valita vain tilaukset, joissa määrä ylittää kymmenen. Vertailuoperaattorit ovat enimmäkseen samat kuin vaikkapa JavaScriptissä, mutta yhtä kuin on pelkkä yksi ``=`` ja erisuuri kuin on ``<>``.

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

Joskus saatamme haluta tietää, mitä ainutlaatuisia sisältöjä tietokannassa on eli emme halua nähdä asioista lukumääriä. Silloin voimme käyttää sanaa ``DISTINCT``.

Esimerkissä etsimme kaikki eri maat, joita Customers-taulussa esiintyy.

````sql
SELECT DISTINCT Country
FROM Customers;
````

Voimme myös järjestää tuloksia haluamallamme tavalla käyttäen sanoja ``ORDER BY`` ja järjestyksen nousevaa tai laskevaa käskyä ``ASC`` ja ``DESC``. ``ASC`` tarkoittaa, että mennään aakkosissa A:sta Ä:hän. ````ASC`` on oletus. Meidän pitää valita sarake, jonka mukaisesti järjestäminen tehdään.

Tässä esimerkissä järjestetään tulokset maan nimen mukaan kasvavaan järjestykseen.
````sql
SELECT CustomerName, Country
FROM Customers
ORDER BY Country ASC;
````

Tässä taas asiakkaan nimen mukaan laskevaan järjestykseen.
````sql
SELECT CustomerName, Country
FROM Customers
ORDER BY CustomerName DESC;
````

Tulosten määrää voidaan myös rajoittaa, mitä ajoittain halutaan tehdä, jos tietokanta on valtavan suuri. Silloin käytetään sanaa ``LIMIT`` ja haluttua lukumäärää.

````sql
SELECT *
FROM Customers
ORDER BY CustomerID DESC
LIMIT 5;
````

Voimme myös muokata sarakkeiden nimiä eli käyttää aliasta, jos näin haluamme. Esimerkiksi sarakkeen nimen kääntäminen suomeksi tai jollekin toiselle kielelle voisi olla tällainen tilanne. Silloin käytämme sarakkeen nimen perässä sanaa ``AS``, minkä jälkeen kirjoitamme nimen, jota haluamme tuloksissa käyttää.

Esimerkissä haluamme suomentaa *CustomerName*n sanalla *Asiakas* ja *Country* *Maa*.

````sql
SELECT CustomerName AS Asiakas, Country AS Maa
FROM Customers;
````

Meillä voi sarakkeissa olla myös tyhjiä eli ``NULL``-arvoja ja joskus meidän pitää pystyä käsittelemään niitä. Useimmiten meidän pitää tarkistaa, onko jokin sarake ``NULL`` tai ei.

Tässä valitaan kaikki asiakkaat, joiden kontakti on ``NULL`` käyttämällä ilmausta ``IS NULL``.

````sql
SELECT *
FROM Customers
WHERE ContactName IS NULL;
````

Ja vastaavasti versio, jossa kontakti ei ole ``NULL``.

````sql
SELECT *
FROM Customers
WHERE ContactName IS NOT NULL;
````

## Yleisimpiä funktioita

Kyselyissä voimme myös käyttää joukkoa funktioita. Ne eivät muokkaa tietokantaa, vaan ainoastaan kyselyn tuloksia.

Käyttämällä funktiota ``COUNT()`` voimme laskea rivien määrän. Jos laitamme sisään asteriskin ``COUNT(*)``, saamme laskettua kaikki rivit, jos taas laitamme sulkeisiin jonkin sarakkeen nimen ``COUNT(Country)``, lasketaan vain rivit, joiden sarake ei ole ``NULL``.

````sql
SELECT COUNT(*) 
FROM Customers;
````

``SUM`` laskee sarakkeiden arvojen yhteenlasketun summan. Sarakkeiden arvojen täytyy olla numeerisia (myöhemmin katsomme sarakkeiden tyypit).

````sql
SELECT SUM(Quantity)
FROM OrderDetails;
````

``AVG`` laskee sarakkeen keskiarvon ohittaen ``NULL``-arvot.

````sql
SELECT AVG(Quantity)
FROM OrderDetails;
````

``MIN`` hakee sarakkeen pienimmän arvon ja ``MAX`` hakee sarakkeen suurimman arvon.

````sql
SELECT MAX(Quantity)
FROM OrderDetails;
````
``ROUND``illa saamme pyöristettyä numeron haluttuun desimaalimäärään.

````sql
SELECT ROUND(AVG(Quantity), 2)
FROM OrderDetails;
````

Tekstiä voidaan muokata ``UPPER`` ja ``LOWER`` funktioilla, jotka muuttavat tekstin isoille tai pienille kirjaimille.

``LENGTH`` (tai joissakin versioissa ``LEN``) laskee merkkijonon pituuden.

``GROUP BY`` kokoaa yhteen rivit, joilla on sama arvo tietyssä sarakkeessa.

Tässä esimerkissä luodaan sarakkeet jokaiselle maalle ja lasketaan maista löytyvien asiakkaiden määrä.

````sql
SELECT Country, COUNT(*) AS AsiakkaidenMaara
FROM Customers
GROUP BY Country;
````

Samaan kyselyyn on mahdollista laittaa useampia sarakkeita. Kaikki pitää muistaa mainita ``GROUP BY``-osiossa.

Tässä esimerkissä haetaan maat ja kaupungit samassa kyselyssä.

````sql
SELECT Country, City, COUNT(*) AS Asiakkaita
FROM Customers
GROUP BY Country, City
ORDER BY Country;
````

``HAVING`` voi lisätä ehtoja ryhmien perusteella, eli jos meillä on ``GROUP BY`` ja mahdollisesti funktioita. Eli ``WHERE`` ei voi käyttää esimerkiksi ``COUNT(*)``ia, mutta ``HAVING`` voi. ``HAVING`` suoritetaan ``GROUP BY``n jälkeen.

Alla olevassa esimerkissä lasketaan jokaisen maan asiakkaiden määrä, jos määrä on isompi kuin 5.
````sql
SELECT Country AS Maa, COUNT(*) AS Asiakkaita
FROM Customers
GROUP BY Country
HAVING COUNT(*) > 5
ORDER BY Country;
````

## Demotehtävä

Tee joukko kyselyitä w3schoolsin tietokannasta.

1. Hae asiakkaiden nimet ja maat, jotka ovat Ranskasta.
2. Hae kaikki tilausrivit (OrderDetails), jossa tuotteen määrä (Quantity) on suurempi kuin 20. Järjestä tulokset kappalemäärän mukaan suurimmasta pienimpään.
3. Hae lista eri kaupungeista USA:ssa.
4. Hae kaikki kaupungit, joiden nimi alkaa kirjaimella *S* ja jotka sijaitsevat Saksassa.
5. Hae kaikkien sellaisten asiakkaiden nimet ja kaupungit, jotka ovat Saksasta tai Itävallasta, mutta eivät ole Berliinistä. Järjestä asiakkaan nimen mukaan aakkosjärjestykseen.
6. Selvitä, missä maissa on täsmälleen kolme asiakasta. Näytä maa ja asiakasmäärä. (Tarvitset ``HAVING``ia.)
