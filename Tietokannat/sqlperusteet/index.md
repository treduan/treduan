# SQL:n perusteet

SQL (structured query language) on hakukieli, jolla voidaan käsitellä relaatiotietokantoja, jotka ovat yleisimpiä tietokantoja. Sillä voidaan luoda tietokantoja ja siihen tauluja, muokata niitä, lisätä, muuttaa ja poistaa tietoja sekä hakea niistä tietoja monenlaisilla ehdoilla.

SQL:ssä on muutamia eri versioita, joissa on pieniä eroavaisuuksia, mutta perusteet ovat kaikissa samat. Eri versioita ovat eri tietokantatarjoajat kuten MySQL, PostgreSQL, MariaDB ja useampi muu.

## Syntaksi

Kun luodaan SQL-lauseke, se tehdään tietyssä järjestyksessä ja jokainen lauseke päättyy puolipisteeseen (;). Toisin kuin JavaScript, SQL on hyvin tarkka tästä.

Käytämme alkuun esimerkkitietokantana ja sen hakukäyttöliittymänä [w3schoolsin tietokantatyökalua](https://www.w3schools.com/sql/trysql.asp?filename=trysql_select_all)<base target="_blank">. Se käsittelee asiakastietokantaa, joten pääasiallisen taulun nimi on *Customers*.

Kun tahdomme valita kaikki taulun tiedot, käytämme syntaksia *SELECT * from Customers;* *SELECT* alussa merkitsee, että teemme haun. Sen jälkeen voimme määritellä, mitä tarkalleen ottaen haluamme hakea. Tähti tarkoittaa kaikkea, mutta voimme hakea esimerkiksi ContactNamen tai minkä tahansa muun yksittäisen tiedon tai useampia tietoja, jos emme tahdo kaikkia tietoja. Jos tahdomme nähdä vain asiakkaan ja kontaktihenkilön tiedot, voimme muokata hakua seuraavasti: *SELECT CustomerName, ContactName FROM Customers;*