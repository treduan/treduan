# Lomakkeet
Lomakkeiden avulla saadaan käyttäjän antamat tiedot ohjelman käsiteltäväksi. Parametrit voidaan välitää joko HTTP-protokollan *GET-request*:in tai *POST-request*:in avulla. Näiden ero on siinä, että *GET*:issä välitetyt arvot näkyvät URL-osoiterivillä selaimessa joten ne voivat olla vain merkkijonoja, joilla on rajoitettu pituus. *POST*:in parametrit välittyvät HTTP-viestin sisällä, joten jos HTTP-yhteys on suojattu myös nämä parametrit on suojattu, parametrien tyyppiä tai kokoa ei ole rajoitettu ([lisää GET:in ja POST:in eroista](https://www.w3schools.in/php/get-post/)).

Yksinkertainen HTML-lomake, joka käsittelee lomakkeeseen syötetyt arvot näyttäisi tältä (tiedoston nimi *lomakedemo.php*):

```php
<?php require "header.php"; ?>

<h2>Assignment 2</h2>

<?php
    if(isset($_GET['name'], $_GET['age'])){
        $name = htmlspecialchars($_GET['name']);
        $age = htmlspecialchars($_GET['age']);
        echo "How are you  $name? " . "You are $age years old.";
    }
?>

<form action="lomakedemo.php" method="get">
    <label for="name">First name: </label> 
    <input type="text" name="name" id="name" maxlength=30><br>
    <label for="age">Age:</label>
    <input type="number" name="age" id="age"><br>
    <input type="submit" value="Send">
</form>


<?php require "footer.php"; ?>
```

Tässä syötetyt parametrit näkyvät osoitekentässä. Jos syötetään esim. salasanoja tai jotain muuta mitä ei haluta näkyvän osoitekentässä, käytetään *POST*:ia. Silloin kaikki viittaukset *GET*:iin vaihdetaan *POST*:iin:

```php
<form action="lomakedemo.php" method="post">
...
if(isset($_POST['name'], $_POST['age'])){
...
```

*Huom!* Jos *action* kohdan jättää pois, default-arvo on ko. tiedosto itse. Jos *method*-kohdan jättää pois, default-arvo on *get*.

Edellinen esimerkki toimii, mutta jos halutaan näyttää lomake vain, jos sitä ei vielä ole lähetetty voidaan tarkistaa onko kyseessä ensimmäinen latauskerta (eli lomaketta ei ole vielä kertaakaan lähetetty). Tätä varten lisätään erillinen piilotettu *hidden* kenttä, jonka arvoksi asetetaan 1:

```php
<?php if (isset($_GET['form_submitted'])): ?>
    <?php
        if(isset($_GET['name'], $_GET['age'])){
            $name = htmlspecialchars($_GET['name']);
            $age = htmlspecialchars($_GET['age']);
            echo "How are you,  $name? ", "You are $age years old.";
        } else {
            echo "You cannot leave fields empty.";
        }
    ?>
<?php else: ?>
    <h3>Enter your information</h3>
    <form action="h1.php" method="get">
    <label for="name">First name: </label> 
    <input type="text" name="name" id="name" maxlength=30><br>
    <label for="age">Age:</label>
    <input type="number" name="age" id="age"><br>
    <input type="submit" value="Send">
    <input type="hidden" name="form_submitted" value="1" />
    </form>
<?php endif; ?>
```

## Demotehtävä

1. Luo uuteen php-tiedostoon HTML-koodia, jossa on palautelomake juhlapalvelutilalle. Lomakkeessa on kolme kenttää, joista yksi on palautteenantajan nimi, yksi avoin tekstikenttä palautteelle ja yksi numerokenttä kokonaisarvosanalle välillä 1-5.
2. Kun lomake lähetetään, näkyy lomakkeen alla tiedot siten, että palautteenantajaa kiitetään, näytetään sanallinen arvio ja kokonaisarvosana esim: "Thank you for your feedback, Anna. You wrote: "The service was very good". The grade you gave us was: "4".".