# CRUD (Create, Read, Update, Delete)

Niin sanotut CRUD-operaatiot ovat tietokantafunktioiden perusta eli käytännössä kaikki muut ovat jollakin tavalla variaatioita näistä eli niissä voi olla esimerkiksi hakuehtoja tms.

## Read eli hakufunktiot

Hakufunktioita on kaksi eli sellainen, joka hakee kaikki tiedot tietokannasta (tai variaationa hakee kaikki tietyin ehdoin) ja sellainen, joka hakee tietyn id:n perusteella tietoja tietokannasta.

Ensin tämän fuktion pitäisi hakea kaikki pelit tietokannasta:

````php
  /**
  * Hakee kaikki pelit taulusta test_games
  */
 function getAllGames() {
     $pdo = connect();
     $sql = "SELECT * FROM test_games";
     $stm = $pdo->query($sql);
     $games = $stm->fetchAll(PDO::FETCH_ASSOC);
     return $games;
 } 
 ````

Funktion kutsu palauttaa taulukon, joka sisältää assosiatiivisia taulukoita. Jos haluamme luoda verkkosivulle listan kaikista noudetuista pelien nimistä, se onnistuu seuraavalla koodilla:

````php
<ul>
<?php 
$games = getAllGames();
foreach($games as $game) {
  echo "<li>" . $game["name"] . "</li>";
}
?>
</ul>
````

 Tämä funktio hakee yhden pelin sen id:n avulla:

 ````php
   /**
  * Palauttaa tietyn pelin
  */
 function getGameById($id) {
     $pdo = connect();
     $sql = "SELECT * FROM test_games WHERE gameid=?";
     $stm = $pdo->prepare($sql);
     $stm->execute([$id]);
     $game = $stm->fetch(PDO::FETCH_ASSOC);
     return $game;
 }  
 ````

 Yksittäisen pelin nimen saa tulostettua sivulle seuraavasti:

 ````php
 <p>
    <?php
    $game = getGameById(3);
    echo $game["name"];
    ?>
 </p> 
````

 Uuden pelin voi lisätä seuraavalla koodilla:

 ````php
 function insertNewGame($name, $company, $release) {
    $pdo = connect();
    $sql = "INSERT INTO test_games (`name`, `company`, `release`) VALUES (?, ?, ?)";
    $stm = $pdo->prepare($sql);
    $ok = $stm->execute([$name, $company, $release]);
    return $ok;
````

Uuden pelin funktion kutsu voi näyttää vaikka seuraavalta:

````php
insertNewGame("Warcraft III", "Blizzard Entertainment", 2002);
````

Peliä voi muokata seuraavalla koodilla: 

````php
  function updateGame($name, $company, $release, $id) {
    $pdo = connect();
    $sql = "UPDATE test_games SET `name`=?, company=?, `release`=? WHERE gameid=?";
    $stm = $pdo->prepare($sql);
    $ok = $stm->execute([$name, $company, $release, $id]);
    return $ok;
} 
````

Ja seuraava koodi poistaa pelin id:n perusteella:

````php
 /**
  * Poistaa pelin jonka gameid on $id
  */
 function deleteGame($id) {
     $pdo = connect();
     $sql = "DELETE FROM test_games WHERE gameid=?";
     $stm = $pdo->prepare($sql);
     $ok = $stm->execute([$id]);
     return $ok;
 }  
 ````

## Demotehtävä 1

 1. Tulosta kaikki pelit verkkosivulle.
 2. Tulosta kolmas peli verkkosivulle.
 3. Lisää uusi peli.
 4. Muokkaa olemassaolevaa peliä.
 5. Poista viides peli tietokannasta.

### Extra

Hae kaikki pelit jollakin kriteerillä eli muokkaa SQL-koodiin jokin ehto esimerkiksi *company*n mukaan. 

## Demotehtävä 2

Jatka edelliseen tehtävään.
1. Sen sijaan, että tiedot haettaisiin välittömästi, lisää HTML-sivulle nappi, jolla käyttäjä voi hakea kaikki pelit tietokannasta.
2. Lisää sivulle myös lomake, johon voi laittaa numeron, ja nappi, josta sivulle haetaan kyseisen id:n peli, jos se on olemassa.

## Poistaminen, lisääminen ja muokkaaminen sivulla

Ylläolevat toimivat sellaisenaan koodin puolella, mutta yleensä ne halutaan toimivan sivustolla, jotta käyttäjät voivat todella lisätä ja poistaa asioita.

### Poistaminen

Tyypillisintä sivustolla on, että listassa on jokaisen rivin lopussa joko linkki tai nappi, josta rivin voi poistaa. Tässä tapauksessa esimerkkinä on linkki. Eli lisäämme tällaisen rivin koodia jokaiselle riville: ``"<a href='./index.php?deletedid=" . $game["gameid"] . "'>Remove</a>" .`` Linkki siis johtaa reitityksellä sivulle *?deletedid=*, johon lisätään kyseisen pelin id. Kaikkien pelien näyttäminen näyttää siis seuraavalta:

````php
<?php
$games = getAllGames();
    foreach($games as $game) {
        echo $game["name"] . " " . $game["company"] . " " . $game["release"]. "<a href='./index.php?deletedid=" . $game["gameid"] . "'>Remove</a>" . "<br>";
    }
?>
````

Lisäksi täytyy seurata, painetaanko jotain linkeistä. Se onnistuu seuraavalla koodilla:

````php
    if (isset($_GET["deletedid"])) {
        $id = $_GET["deletedid"];
        $ok = deleteGame($id);
        // ohjataan sivu lataamaan uudestaan
        header("Location: ./index.php");
      }
````

Ensin siis tarkistetaan, onko *deletedid*tä asetettu, jos se on asetettu, haetaan se ja sitten kutsutaan poistofunktiota, jolle id annetaan. Lopuksi ladataan pääsivu uudelleen, jotta muutos myös päivittyy sivulle.

### Lisääminen

Lisäämistä varten tarvitaan lomake.

Luodaan siis uusi PHP-tiedosto, jolle lomake laitetaan. Lomake tarvitsee kolme kenttää eli Name, Company ja Year sekä tallennusnapin. Lisäksi alkuun pitää liittää tiedosto, jolla tietokantaan luodaan yhteys sekä funktio, jolla kirjan voi lisätä.

````php 
// tarkista, onko muuttujat asetettu
if (isset($_GET["name"], $_GET["company"], $_GET["year"])) {
  //luo muuttujat ja sanitoi ne
  $name = htmlspecialchars($_GET["name"]);
  $company = htmlspecialchars($_GET["company"]);
  $year = htmlspecialchars($_GET["year"]);
  // käytä apufunktiota, joka tarkistaa vielä syötteen tiedot
  if (checkInput($name, $company, $year)) {
    $ok = insertNewGame($name, $company, $year);
  } else {
    echo "<p>Failed to insert a new game. Input is not valid.</p>";
  }
}
// funktio saa kaikki lomakkeen tiedot ja tarkistaa, täyttävätkö ne ehdot
function checkInput($name, $company, $year): boolean {
  $inputIsFine = false;
  if (strlen($name >= 2) || strlen($company >= 2) || $year > 1950) {
    $inputIsFine = true;
  } 
  // palautetaan totuusarvo
  return $inputIsFine;
}
````

### Muokkaaminen

Myös muokkaamista varten tarvitaan lomake, ja se näyttää täsmälleen samanlaiselta kuin lisäämisessä. Kuitenkin muokkaamista varten tarvitaan jälleen linkki, jotta saadaan tietoon id. 

Lisätään siis pelien listaan seuraava koodi, jotta saamme siihen linkin:

````php
<?php
$games = getAllGames();
    foreach($games as $game) {
        echo $game["name"] . " " . $game["company"] . " " . $game["release"]. "<a href='./index.php?deletedid=" . $game["gameid"] . "'>Remove</a>" . "<a href='./edit.php?editedid=" . $game["gameid"] . "'>muokkaa</a>" . "<br>";
    }
?>
````

Jos muokkaaminen halutaan tehdä oikein hyvin, ensin sivulla haetaan kyseinen peli id:n avulla ja vanhat arvot laitetaan kenttiin oletusarvoiksi. Lomake voi siis näyttää seuraavalta:

````php
<?php
  require "./dbfunctions.php";
  require "./index.php";
  $id = $_GET["editedid"];
  $game = getGameById($id);
?>
<h3>Muokkaa peliä</h3>
<form action="" method="POST">
    <label for="name">Name</label><br>
    <input type="text" name="name" id="" value="<?= $game['name'] ?>"><br>
    <label for="company">Company</label><br>
    <input type="text" name="company" id="" value="<?= $game['company'] ?>"><br>
    <label for="release">Year</label><br>
    <input type="number" name="release" id="" value="<?= $game['release'] ?>"><br>
    <input type="hidden" name="gameid" value="<?= $game['gameid'] ?>">
    <input type="submit" value="Save">
</form>
````

Muutoin voidaan toimia hyvin pitkälle samoin kuin uuden pelin luomisen kanssa, mutta toki epäonnistuessa teksti on eri.

## Demotehtävä 3

Toteuta esimerkin pohjalta pelien poistaminen, lisääminen ja muokkaaminen.