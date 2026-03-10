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

Funktion kutsu palauttaa taulukon, joka sisältää assosiatiivisia taulukoita. Ensin tarvitsemme HTML-pohjan. Jos haluamme luoda verkkosivulle listan kaikista noudetuista pelien nimistä, se onnistuu seuraavalla koodilla, joka lisätään HTML-sivun body-osioon:

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

 HTML-osiossa voi lukea esimerkiksi:

 ````php
 $one_game = getGameById(4);
echo "<p> Yksi peli: " . $one_game["name"] .", " . $one_game["company"] . "</p>";
````


 Uuden pelin voi lisätä seuraavalla koodilla (huom, täydennä arvot funktion kutsussa):

 ````php
 function insertNewGame($name, $company, $release) {
    $pdo = connect();
    $sql = "INSERT INTO test_games (`name`, company, `release`) VALUES (?, ?, ?)";
    $stm = $pdo->prepare($sql);
    $ok = $stm->execute([$name, $company, $release]);
    return $ok;
 }
````
Funktion kutsu voi näyttää esimerkiksi seuraavalta:

````php
insertNewGame("World of Warcraft", "Blizzard", 2004);
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

Kutsu voi näyttää seuraavalta:

````php
insertNewGame("World of Warcraft: Burning Crusade", "Blizzard", 2007, 18);
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

 Poistamisen kutsu näyttää seuraavalta:

 ````php
 deleteGame(18);
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

Lomake tarvitsee kolme kenttää eli Name, Company ja Year sekä tallennusnapin.

````php
<form> 
    <label>Name <input type="text" name="name"></label>
    <label>Company <input type="text" name="company"></label>
    <label>Release year <input type="number" name="year" min=1950 max=2026></label>
    <input type="submit" value="Add a new game" name="add">
</form>
````

Sitten tarkistamme, onko lomake lähetetty. Lisäksi teemme tarkistuksen, että kaikki syöte on toimivaa, mitä varten meillä on erillinen funktio.

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
function checkInput($name, $company, $year) {
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
        echo $game["name"] . " " . $game["company"] . " " . $game["release"]. "<a href='./index.php?deletedid=" . $game["gameid"] . "'>Remove</a>" . " " . "<a href='./edit.php?editedid=" . $game["gameid"] . "'>Muokkaa</a>" . "<br>";
    }
?>
````

Tehdään muokkaamista varten oma sivu nimeltään edit.php. Jos muokkaaminen halutaan tehdä oikein hyvin, ensin sivulla haetaan kyseinen peli id:n avulla ja vanhat arvot laitetaan kenttiin oletusarvoiksi. Lisätään tähän tiedostoon myös getGamebyId() ja updateGame() -funktiot. Lomake voi siis näyttää seuraavalta:

````php
<?php
  require "./dbfunctions.php";
  $id = $_GET["editedid"];
  $game = getGameById($id);

function updateGame($name, $company, $release, $id) {
  $pdo = connect();
  $sql = "UPDATE test_games SET `name`=?, company=?, `release`=? WHERE gameid=?";
  $stm = $pdo->prepare($sql);
  $ok = $stm->execute([$name, $company, $release, $id]);
  return $ok;
}
function getGameById($id) {
  $pdo = connect();
  $sql = "SELECT * FROM test_games WHERE gameid=?";
  $stm = $pdo->prepare($sql);
  $stm->execute([$id]);
  $game = $stm->fetch(PDO::FETCH_ASSOC);
  return $game;
} 
// tarkista, onko muuttujat asetettu
if (isset($_GET["name"], $_GET["company"], $_GET["release"], $_GET["gameid"])) {
    //luo muuttujat ja sanitoi ne
    echo "Lomake lähetetty";
    $name = htmlspecialchars($_GET["name"]);
    $company = htmlspecialchars($_GET["company"]);
    $release = htmlspecialchars($_GET["release"]);
    // käytä apufunktiota, joka tarkistaa vielä syötteen tiedot
    if (checkInput($name, $company, $release)) {
      $ok = updateGame($name, $company, $release, $_GET["gameid"]);
      header("Location: ./index.php");
    } else {
      echo "<p>Failed to update the game. Input is not valid.</p>";
    }
  }
  // funktio saa kaikki lomakkeen tiedot ja tarkistaa, täyttävätkö ne ehdot
  function checkInput($name, $company, $release) {
    $inputIsFine = false;
    if (strlen($name >= 2) || strlen($company >= 2) || $release > 1950) {
      $inputIsFine = true;
    } 
    // palautetaan totuusarvo
    return $inputIsFine;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Muokkaa peliä</h1>
<form action="" method="get">
    <label for="name">Name</label><br>
    <input type="text" name="name" id="" value="<?= $game['name'] ?>"><br>
    <label for="company">Company</label><br>
    <input type="text" name="company" id="" value="<?= $game['company'] ?>"><br>
    <label for="release">Year</label><br>
    <input type="number" name="release" id="" value="<?= $game['release'] ?>"><br>
    <input type="hidden" name="gameid" value="<?= $game['gameid'] ?>">
    <input type="submit" value="Save">
</form>
</body>
</html>
````

Muutoin voidaan toimia hyvin pitkälle samoin kuin uuden pelin luomisen kanssa, mutta toki epäonnistuessa teksti on eri.

## Demotehtävä 3

Toteuta esimerkin pohjalta pelien poistaminen, lisääminen ja muokkaaminen.