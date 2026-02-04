# Tiedon käsittely taulussa

## Lisääminen - ``INSERT INTO``

Lopulta pääsemme lisäämään tauluun tietoja. Käytämme aiemmin luomaamme Students-taulua esimerkkinä.

````sql
INSERT INTO Students (name, age)
VALUES ("Anna", 22);
````

Huomiona, että taulussa on myös *id*, mutta koska sillä on ``AUTO_INCREMENT``, taulu hoitaa sen lisäämisen itse automaattisesti.

Me siis määrittelemme ensin taulun nimen, sen sarakkeet ja lopulta annamme tiedot pilkulla eroteltuna.

On myös mahdollista lisätä useampia rivejä kerrallaan pilkulla eroteltuna.

````sql
INSERT INTO Students (name, age)
VALUES 
  ("Laura", 23),
  ("Oskari", 20),
  ("Emilia", 22);
  ````

## Muokkaaminen - ``UPDATE``

Voimme muokata jälkikäteen tietokannan tietoja. Esimerkissä vaihdamme opiskelijan ikää.

````sql
UPDATE Students
SET age = 23
WHERE name = "Anna";
````

Useimmiten käytämme *id*tä, kun valitsemme, mitä muutamme, mutta voimme luonnollisesti asettaa mitä tahansa ehtoja.

Voimme muokata myös useampia tietoja kerralla.

````sql
UPDATE Students
SET age = 24, name = "Anna Virtanen"
WHERE id = 1;
````

Muistakaa aina, että ``UPDATE`` vaatii jonkin ehdon eli ``WHERE``n tai jokainen rivi muuttuu.

## Tietojen poistaminen - ``DELETE``

Myös ``DELETE`` vaatii jonkin ehdon, jonka mukaan rivi poistetaan (jos haluamme poistaa vain yhden tiedon riviltä, käytetään ``UPDATE``a ja asetetaan poistettavan tiedon sijaan ``NULL``).

````sql
DELETE FROM Students
WHERE id = 3;
````

Useimmiten käytetään jälleen *id*tä, jolla etsitään poistettava rivi, mutta myös muita ehtoja voi käyttää.

````sql
DELETE FROM Students
WHERE age < 18;
````

## Turvallisuusvinkki

Hyvä nyrkkisääntö:

Kirjoita ensin ``SELECT``

Tarkista, että oikeat rivit valikoituvat

Vaihda ``SELECT`` → ``UPDATE`` tai ``DELETE``

## Demotehtävä

1. Lisää tauluun *Courses* vähintään kolme kurssia. Valitse siis niille nimi, opintopistemäärä, aloituspäivä (muodossa 'YYYY-MM-DD') ja opettaja.
2. Muokkaa yhtä tietoa. Toisen kurssin opintopistemäärä muuttui ja kasvoi kuuteen.
3. Poista ensimmäinen kurssi.
4. Hae kaikki kurssit ja järjestä ne aloituspäivän mukaan.