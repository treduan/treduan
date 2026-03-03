## Evästeet (Cookies)

Evästeet ovat istunnon ohella yksi tapa, millä henkilökohtaista dataa saa tallennettua verkkosivulta, jos ei käytetä tietokantoja.

Käy ensimmäisenä lukemassa linkitetty artikkeli [What are cookies?](https://www.kaspersky.com/resource-center/definitions/cookies)<base target="_blank">.

Luo Word-dokumentti, jossa vastaat seuraaviin kysymyksiin pääosin artikkelin pohjalta. Palauta dokumentti Teamsiin kansioon kanavalla Sähköinen asiakaspalvelu - php.

1. Miksi HTTP evästeet kehitettiin?
2. Minne evästeet tallennetaan ja mitä etua siitä on yritysten näkökulmasta?
3. Mikä on evästeiden toimintaperiaate?
4. Mihin evästeitä yleensä käytetään?
5. Mitkä ovat HTTP evästeiden kaksi tyyppiä ja miten ne eroavat toisistaan?
6. Miten istunto (session) ja evästeet (cookies) eroavat toisistaan (ei löydy artikkelista)?
7. Miten pääset tarkastelemaan evästeitä ja istuntoa kehittäjätyökaluista (ei löydy artikkelista)? Mitä tietoja artikkelin sivusto tallentaa sinusta (jotkut esimerkit riittävät)?

## Demotehtävä 1

Harjoitellaan, miten käytetään yksinkertaista evästettä.

1. Luo tiedosto cookietest.php. Lisää HTML-pohja.
2. Lisää tiedostoon lomake, josa on kenttä tekstin kirjoittamista varten sekä nappi, joka tallentaa evästeen. Luo myös toinen lomake, jossa on vain nappi evästeiden tyhjentämistä varten. Näiden täytyy olla eri lomakkeissa, jotta ne voidaan lukea erikseen.
 
````php 
<form method="post">
<label for="cookie">Give the cookie some information</label><br />
<input type="text" name="cookie" value="" /><br />
<input type="submit" value="Save cookie" /><br />
</form>
<form method="post">
<input type="submit" name="remove" value="Remove cookie" />
</form>
````

Tämän jälkeen meidän täytyy lisätä koodi, joka käsittelee lomakkeet:

````php
<?php
// lomakkeen käsittely
if (isset($_POST["cookie"])) {
 // yritetään tallentaa
    setcookie("our_cookie",$_POST["cookie"], time() +1800);
 }
 // jos lähetetään tyhjennä:
if (isset($_POST["remove"])) {
    setcookie("our_cookie","", time() -1800);
 }
?>
````

Esimerkissä *time() +1800* merkitsee sitä, kuinka pitkään eväste on voimassa sekunteina sen asettamishetkestä (tässä tapauksessa se on puoli tuntia, sillä 1800 sekuntia on puoli tuntia). Kun eväste poistetaan, sen kestokin poistetaan.

3. Tarkista kehittäjätyökalujen kautta, että eväste todella tallennetaan ja poistetaan.

## Demotehtävä 2

1. Tehdään alku salasanan käsittelylle. Luo uusi tiedosto nimeltään password.php ja lisää siihen HTML-pohja.
2. Lisää sivulle lomake, jossa on kenttä salasanalle sekä nappi kirjautumista varten. Ne näytetään, mikäli sivulle ei ole kirjauduttu. Jos taas sivulle on kirjauduttu, näytetään nappi, josta voi kirjautua ulos. 

````php
<?php
// lomakkeenkäsittely
// apumuuttuja - ollaanko kirjauduttu
$ok = false; // oletuksena ei kirjauduttu
// -- TÄHÄN LOMAKKEENKÄSITTELIJÄ --

// 1. jos ei olla kirjauduttu
if ($ok == false) {
?>

<form method="post">
<label for="password">Syötä salasana</label><br />
<input type="password" name="password" /><br />
<input type="submit" value="Kirjaudu" />
</form>

<?php
}
else {
   // 2. jos ollaan kirjauduttu niin
?>

<form method="post">
<input type="submit" name="logoff" value="Kirjaudu ulos" />
</form>

<?php
}
?>
````

3. Lisää sivulle koodi lomakkeen käsittelyä varten. Ensin sisäänkirjautuminen.

````php
if (isset($_COOKIE["ok"])) {
 $ok = $_COOKIE["ok"];
 }
 else if (isset($_POST["password"])) {
 if ($_POST["password"] == "salasana") {
 // käyttäjä antoi oikean salasanan
 setcookie("ok", true, time() +1800);
 echo "Tunnus oikein!";
 $ok = true;
 }
 else {
 // käyttäjä antoi väärän salasanan
 echo "Tunnus väärin :( ";
 }
 }
 ````

 Sitten uloskirjautuminen.

 ````php
 // jos painettiin logoff-submit:
if (isset($_POST["logoff"])) {
  setcookie("ok","", time() -1800);
  $ok = false;
}
````