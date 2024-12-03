# Parametrien välittäminen osoitekentässä

Kun sivu pyydetään palvelimelta, sille voidaan pyynnön mukana erilaisia parametreja. Esim. käyttäjältä voidaan kysyä hänen nimeään. Tämä tieto välitetään palvelimelle osoitekentässä kuljetettavissa muuttujissa. Esimerkiksi *name*-muuttujalle voidaan antaa arvo osoitekentässä:

```browser
index.php?name=Anna
```

PHP:ssa näin saatuja arvoja kutsutaan superglobaaleiksi muuttujiksi. Ne tallentuvat taulukkoon, jonka nimi on $_GET[]. Superglobaalin muuttujan 'name' saa poimittua taulukosta sen nimen avulla:

```php
<?php  
    echo "Hello, " .  $_GET['name'];
?>
```

Koska osoiteriviin voi kirjoittaa mitä tahansa, myös vahingollista koodia, joka muuttaa sivun toimintaa, näitä superglobaaleja muuttujan arvoja ei saa koskaan käyttää ilman että ne käsittelee niin, että ne eivät toimi koodina, tätä kutsutaan sanitoinniksi (*sanitation*).

Käytännössä tämä tapahtuu niin, että kaikki erikoismerkit muunnetaan HTML-entiteeteiksi *htmlspecialchars*-funktion avulla:

```php
 <?= "Hello, " .  htmlspecialchars($_GET['name']); ?>
 ```

## Demotehtävä 1

1. Kokeile kirjoittaa superglobaaliin muuttujaan ilman sanitointia:

```cmd
 index.php?name=<a href="http://google.com">Anna</a>
```

2. Kokeile, mitä tapahtuu, jos superglobaali koodi sisältääkin JavaScriptiä:

```cmd
 index.php?name=<script>alert("You got hacked!")</script>
```

3. Kokeile nyt samaa sanitoinnin kanssa. Sanitointi tekee koodista pelkkää tekstiä.

## Parametrien tarkistaminen

PHP-ohjelman kannalta on oleellista testata lähettikö selain tietyt parametrit vai ei eli, onko muuttujalle annettu arvo. Sen voi testata *isset()*-funktion avulla. *isset()* - palauttaa totuusarvon, jota voi testata joko perinteisellä if-else - ehtolauseella tai sitä vastaavalla lyhennettyllä muodolla, joka muodostetaan kysymysmerkin avulla (*ternary operator*).

```php
<?php
    if(isset($_GET['name'])){
        $name = htmlspecialchars($_GET['name']);
        if(isset($name))
            echo "Hello " . $name;
        else 
            echo "Hello, stranger";
    }
     ?>
```

Tämän lyhyempi versio olisi:

```php
    <?= isset($name) ? "Hello {$name}" : "Hello, stranger"; ?>
```

Myös ehtolauseen voi katkaista ja kirjoittaa väliin HTML-koodia:

```php
<?php if(isset($name))) : ?>
    <p> Hello <?= $name ?></p>
<?php else : ?>
    <p> Hello, stranger </p>
<?php endif?>
```

## Demotehtävä 2

1. Laita osoitekentän parametriksi jokin tervehdys. Eli $namen sijaan siellä on *greeting*.
2. Tarkista koodilla, onko parametri olemassa. Jos se on olemassa, sanitoi se ja näytä se sivustolla.
3. Jos parametriä ei ole olemassa, näytä sivustolla teksti "I don't know how to greet you".