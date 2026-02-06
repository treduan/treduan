## Taulujen yhdistäminen

Samassa tietokannassa on usein monta eri taulua. Meidänkin testitietokannassamme on nyt yksi taulu opiskelijalle ja kurssille. Näillä ei kuitenkaan vielä ole minkäänlaista yhteyttä, vaikka loogista olisi ajatella, että opiskelijalla voisi olla kursseja useampikin yhtä aikaa.

## Foreign Key

``FOREIGN KEY`` on avainsana, jolla voidaan yhdistää taulu johonkin sarakkeeseen toisessa taulussa. 

Jos meillä on tietokannassa taulu nimeltään *Groups*, johon luodaan opetusryhmiä, me voimme liittää opiskelija yhteen tällaiseen opiskelijaryhmään.

````sql
CREATE TABLE Groups (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    group_teacher VARCHAR(100) NOT NULL
);
````

````sql
CREATE TABLE Students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    group_id INT,
    FOREIGN KEY (group_id) REFERENCES Groups(id)
);
````

Tämä koodi lisää viiteavaimen ``group_id``-sarakkeelle. ``REFERENCES``in jälkeen kerrotaan, mihin tauluun yhdistetään, ja suluissa on sen taulun sarake, johon yhdistys tehdään (useimmiten se on id).

Kun teemme tauluja tällä tavalla, meidän on luotava ensin ryhmä, sillä opiskelijaa ei voi lisätä, jos sille yritetään antaa ryhmä, jota ei ole olemassa.

Lisätään siis muutama ryhmä ensin.

````sql
INSERT INTO Groups (name, group_teacher)
VALUES
  ("Ohjelmistokehitys", "Anna"),
  ("IT-tuki", "Hannu");
  ````

  Sitten voimme lisätä opiskelijoita omaan tauluunsa ryhmänumeron kanssa.

  ````sql
  INSERT INTO Students (name, group_id)
VALUES
  ("Elton", 1),
  ("Minna", 1),
  ("Laura", 2),
  ("Oona");
  ````

## JOIN eli taulujen yhdistäminen hauissa

Tällä hetkellä opiskelijalla näkyy yhteys ryhmätauluun vain sen id:ssä. Me saattaisimme kuitenkin haluta, että pelkän id:n lisäksi voisimme tulostaa vaikka opiskelijan ryhmän nimen. Silloin meidän täytyy liittää tauluja. Tässä siis haluamme hakuun opiskelijan nimen ja hänen ryhmänsä nimen.

````sql
SELECT Students.name, Groups.name
FROM Students
JOIN Groups
ON Students.group_id = Groups.id;
````

Tässä siis Students.group_id ja Groups.id ovat sama asia ja sillä SQL voi yhdistää oikean ryhmän oikealle opiskelijalle.

Usein lisäksi käytetään aliasta lyhentämään kirjoitettavan tekstin määrää.

````sql
SELECT s.name, g.name
FROM Students s
JOIN Groups g
ON s.group_id = g.id;
````

Koodissa siis *Students*-sarakkeelle annetaan nimi *s* ja *Groups*-sarakkelle nimi *g*, jotta pidempiä nimiä ei tarvitse toistaa useita kertoja.

Tuossa tapauksessa viimeinen lisäämämme opiskelija jää kuitenkin pois listasta, koska hänellä ei ole ryhmää. Jos haluamme, että joka tapauksessa kaikki opiskelijat mainitaan riippumatta siitä, onko heillä ryhmää vai ei, voimme käyttää sellaista kuin ``LEFT JOIN``.

````sql
SELECT s.name, g.name
FROM Students s
LEFT JOIN Groups g
ON s.group_id = g.id;
````