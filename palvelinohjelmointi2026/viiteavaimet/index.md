## Taulujen yhdistäminen

Samassa tietokannassa on usein monta eri taulua. Meidänkin testitietokannassamme on nyt yksi taulu opiskelijalle ja kurssille. Näillä ei kuitenkaan vielä ole minkäänlaista yhteyttä, vaikka loogista olisi ajatella, että opiskelijalla voisi olla kursseja useampikin yhtä aikaa.

## Foreign Key

``FOREIGN KEY`` on avainsana, jolla voidaan yhdistää taulu johonkin sarakkeeseen toisessa taulussa. 

Jos meillä on tietokannassa taulu nimeltään *Groups*, johon luodaan opetusryhmiä, me voimme liittää opiskelija yhteen tällaiseen opiskelijaryhmään.

````sql
CREATE TABLE Groups (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    groupTeacher VARCHAR(100) NOT NULL
);
````

````sql
CREATE TABLE Students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    group_id INT NOT NULL,
    FOREIGN KEY (group_id) REFERENCES Groups(id)
);
````

Tämä koodi lisää viiteavaimen ``group_id``-sarakkeelle. ``REFERENCES``in jälkeen kerrotaan, mihin tauluun yhdistetään, ja suluissa on sen taulun sarake, johon yhdistys tehdään (useimmiten se on id).

Kun teemme tauluja tällä tavalla, meidän on luotava ensin ryhmä, sillä opiskelijaa ei voi lisätä, jos sille yritetään antaa ryhmä, jota ei ole olemassa.