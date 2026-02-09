## Taulujen yhdistäminen

Samassa tietokannassa on usein monta eri taulua. Usein taulujen välille luodaan yhteyksiä ja hakuja.

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

## Demotehtävä 1
1. Tee haku, jossa etsit kaikki opiskelijat, joiden ryhmän nimi on Ohjelmistokehitys (eli lisää hakuun ``WHERE``-ehto).

## Liitostaulut

Yllä oleva tilanne onnistuu, kun yhdellä opiskelijalla voi olla vain yksi ryhmä.

Mutta jos meillä on tilanne, jossa meillä on opiskelijoita ja kursseja ja jokaisella kurssilla voi olla monta opiskelijaa ja jokaisella opiskelijalla monta kurssia, joudumme tekemään jotain erilaista.

Oletetaan, että meillä on nyt seuraavanlaiset opiskelija ja kurssi:

````sql
CREATE TABLE Students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);
````

````sql
CREATE TABLE Courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);
````

Jotta saamme nämä yhdistettyä niin, että kummallakin voi olla monta kumpaakin, meidän täytyy tehdä liitostaulu eli käytännössä taulu, joka pitää sisällään listan molemmista. Tässä tapauksessa se voisi olla nimeltään *Enrollments*.

````sql
CREATE TABLE Enrollments (
    student_id INT,
    course_id INT,
    PRIMARY KEY (student_id, course_id),
    FOREIGN KEY (student_id) REFERENCES Students(id),
    FOREIGN KEY (course_id) REFERENCES Courses(id)
);
````

Tämä taulu ei tarvitse omaa id:tä, sillä yksi ja sama opiskelija ei voi olla samalla kurssilla kahta kertaa, joten joka kerta saamme uniikin yhdistelmän student_id:stä ja course_id:stä (huom. jos meillä voisi olla tilanne, että yhdellä opiskelijalla voisi olla monta samaa kurssia, me tarvitsisimme sarakkeen kappalemäärille).

Lisäksi taulussa voi olla lisää tietoja. Loogista voisi olla esimerkiksi ilmoittautumispäivä tai arvosana.

````sql
CREATE TABLE Enrollments (
    student_id INT,
    course_id INT,
    enrollment_date DATE,
    grade INT,
    PRIMARY KEY (student_id, course_id),
    FOREIGN KEY (student_id) REFERENCES Students(id),
    FOREIGN KEY (course_id) REFERENCES Courses(id)
);
````

Tauluun voi lisätä opiskelijan seuraavasti:

````sql
INSERT INTO Enrollments (student_id, course_id)
VALUES (1, 2);
````

Jos haluamme hakea opiskelijan ja hänen kurssinsa, se onnistuu seuraavasti:

````sql
SELECT s.name, c.name
FROM Enrollments e
JOIN Students s ON e.student_id = s.id
JOIN Courses c ON e.course_id = c.id;
````

Ja jos haluamme hakea kaikki opiskelijat tietyllä kurssilla, se onnistuu näin:

````sql
SELECT s.name
FROM Enrollments e
JOIN Students s ON e.student_id = s.id
JOIN Courses c ON e.course_id = c.id
WHERE c.name = "Ohjelmistokehitys";
````

## Demotehtävä 2

1. Luo uusi taulu nimeltään Hobbies. Sillä pitää olla vähintään sarakkeet id (pääavain, automaattinen) ja name (merkkijono, max 150 merkkiä, pakollinen).
2. Lisää tauluun vähintään kolme eri harrastusta.
3. Koska yhdellä opiskelijalla voi olla monta harrastusta ja harrastuksessa monta opiskelijaa, luo myös liitostaulu nimeltään StudentHobbies. Siinä pitää olla student_id, hobby_id, jotka ovat viiteavaimia, sekä yhdistelmäavain molempiin tauluihin.
4. Lisää vähintään kaksi harrastusta samalle opiskelijalle.
5. Hae tämän opiskelijan nimi ja kaikki hänen harrastuksensa samalla haulla.