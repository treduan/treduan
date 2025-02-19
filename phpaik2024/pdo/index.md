## Tietokantayhteys

PHP:llä voidaan luoda tietokantaan yhteys.

## Luo tietokanta

Lisää samariumille phpmyadminiin taulu ja tiedot lukemalla [sql-tiedosto](./sql.md)<base target="_blank"> (kopioi linkin takaa sql-tiedostoksi).

- Kirjaudu cPaneliin (https://cpanel.tunnus.treok.io/) ja avaa MySQL Databases
- Tee uusi tietokanta nimeltä (oma tunnus)_sasp
- Tämän jälkeen tee uusi käyttäjä, (oma tunnus)_sasp, luo salasana Password Generatorin avulla, kopioi salasana itsellesi talteen!
- Lisää vielä tekemäsi käyttäjä tietokannalle (Add User to Database), voit antaa kaikki oikeudet (ALL PRIVILEGES).
- Avaa seuraavaksi cPanelin työkaluista phpMyAdmin, tuo sql-tiedosto tietokantaasi.
- Tarvittaessa käy lisäämässä cPanelissa Remote Host (ohjeita alla linkin takana).

Jos olet epävarma siitä, miten se tapahtuu, löydät ohjeita [täältä](https://eermau.github.io/sasp23/sivut/cpanel_ohjeita.html)<base target="_blank">.

## dbfunctions.php

Tietokantayhteys luodaan käyttämällä tiedostoa dbfunctions.php ja kirjoittamalla sinne funktio *connect()*. Siinä luodaan yhteys, jossa on kaikki yhteyteen vaadittavat tiedot. Huomaathan, että tässä käytetään olio-ohjelmointia eli PDO on olio, joka luodaan antamalla sille tarvittavat parametrit, joita se käyttää yhteyden muodostamiseen.

````php
<?php
/**
 * Ottaa yhteyden tietokantaan, palauttaa 
 * pdo-olion.
 * 13.2.2023/EM
 */
function connect() {
    $servername = "tunnus.treok.io";
    $username = "tunnus_sasp";
    $password = "salasana";
    //$port = 3306;
    $dbname = "tunnus_sasp";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
}
````

Toisessa tiedostossa voimme sitten käyttää *require*a tuomaan kyseisen funktion tiedostoon ja käyttämään funktiota.

````php
<?php
  require "./dbfunctions.php";

  $pdo = connect(); 
  ````
## Demotehtävä

1. Luo ensin ohjeen mukaan kurssia varten tietokanta.
2. Luo tietokantaan ohjeen mukaan taulu ja syötä sinne tietoja linkin takaa.
3. Luo uusi kansio, johon luot tiedoston dbfunctions.php. Voit kopioida yllä olevan sisällön, mutta vaihda siihen oman tietokantasi tiedot.
4. Luo samaan kansioon toinen tiedosto, index.php, johon yhdistät tiedoston dbfunctions.php ja avaat tietokantayhteyden. Kun laitat serverin pyörimään ja avaat sivun, siellä pitäisi lukea "Connected successfully", jos kaikki on kunnossa.
