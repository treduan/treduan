# Tietojen poisto SQL:ssä

Jos meillä on taulu, joka ei ole yhdistetty millään tavalla toiseen tauluun, meillä ei ole ongelmia tietojen poiston kanssa. Voimme ongelmitta poistaa niin rivejä kuin vaikka koko taulun.

Mutta jos taulu on yhdistetty toisiin viiteavaimella, meidän on mietittävä, mitä tapahtuu jäljelle jääville tiedoille, jos me poistamme dataa.

Otetaan esimerkiksi Students-taulu, joka viittaa Groups-tauluun. Jokaisella opiskelijalla on siis ryhmä. Jos me poistamme jonkin ryhmistä, mitä tapahtuu opiskelijalle?

Jos emme ole laatineet sääntöjä poistolle, tietokanta saattaa estää poiston tai jättää opiskelijat ilman ryhmää.

Niinpä yleensä ``FOREING KEY``n määrittelyn jälkeen lisäämme tauluun rivit, jotka alkavat ``ON DELETE`` ja ``ON UPDATE``. Niillä voimme kertoa, mitä haluamme tapahtuvan, jos tietoja poistetaan tai muutetaan.

## Yleisimmät vaihtoehdot

````sql
ON DELETE RESTRICT
````

Jos käytämme tätä vaihtoehtoa, tietokanta estää poiston, jos viittauksia on olemassa. Eli jos meillä on opiskelija ryhmässä, jonka id on 1, emme voi poistaa ryhmää, jonka id on 1. Meidän pitää vaihtaa opiskelijan ryhmä, jos haluamme poistaa ryhmän.

````sql
ON DELETE CASCADE
````

Jos käytämme tätä vaihtoehtoa, jos poistamme ryhmän, myös siihen kuuluvat opiskelijat poistetaan. Poistaminen siis ketjuuntuu.

````sql
ON DELETE SET NULL
````

Jos käytämme tätä, voimme poistaa ryhmän, vaikka siinä olisi opiskelijoita, ja opiskelijan viiteavaimen arvoksi tulee ``NULL``. Jos ryhmä kuitenkin on ``NOT NULL``, tätä ei voi käyttää.

````sql
ON DELETE SET DEFAULT
````

Tässä viiteavain asetetaan oletusarvoon. Silloin jokin oletusarvo kuitenkin pitää olla olemassa. Tämä on harvoin käytetty.

## ``ON UPDATE``

Tätä ei kovin usein tarvitse erikseen kirjoittaa, mutta joskus haluamme mahdollisuuden käyttää ``ON UPDATE CASCADE``. Silloin jos pääavaimen id vaihtuu, vaihdetaan se automaattisesti myös muihin tauluihin. Pääavainta tosin muutetaan hyvin harvoin. Kuitenkin jos me muuttaisimme ryhmästä id 1:n id 6:ksi, jos haluaisimme, että myös opiskelijoiden ryhmien id vaihtuu automaattisesti, meillä pitäisi olla taulussa ``ON UPDATE CASCADE``.

## CASCADE liitostauluissa

Liitostauluissa ``ON DELETE CASCADE`` on yleensä oikea valinta (opiskelijan tai ryhmän taulujen kaltaisissa ei). Jos meillä on kurssi-ilmoittautumisten kaltainen liitostaulu, on loogista, että ilmoittautuminen katoaa tietokannasta, jos joko kurssi tai opiskelija poistetaan. Kun ``CASCADE`` on pelkästään liitostaulussa, kurssit tai opiskelijat eivät katoa, kun ilmoittautuminen katoaa.

````sql
CREATE TABLE Enrollments (
    student_id INT,
    course_id INT,
    PRIMARY KEY (student_id, course_id),
    FOREIGN KEY (student_id)
        REFERENCES Students(id)
        ON DELETE CASCADE,
    FOREIGN KEY (course_id)
        REFERENCES Courses(id)
        ON DELETE CASCADE
);
````

## Demotehtävä
1. Katso, että tietokannassasi on taulu Groups.
````sql
CREATE TABLE Groups (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);
````
Sekä taulu Students
````sql
CREATE TABLE Students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    group_id INT,
    FOREIGN KEY (group_id)
        REFERENCES Groups(id)
        ON DELETE SET NULL
        ON UPDATE CASCADE
);
````
2. Hae ensin opiskelijat ja heidän ryhmiensä nimet käyttäen ``LEFT JOIN``ia. Tarvittaessa lisää opiskelijoita niin, että sinulla on vähintään kaksi eri ryhmää ja kolme opiskelijaa, joista kaksi on keskenään samassa ryhmässä.

3. Poista ryhmistä ensimmäinen. Hae uudelleen opiskelijat ja heidän ryhmänsä.

4. Muuta ryhmän 2 id => 10 (``SET id = 10``).

5. Hae opiskelijat ja ryhmien nimet uudelleen. Hae myös opiskelijoiden ``group_id``.