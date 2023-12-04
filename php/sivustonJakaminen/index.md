# Sivuston jakaminen eri tiedostoihin

On hyvin tyypillistä, että Php:llä sivuston rakenne jaetaan osiin, erityisesti, jos meillä on osia, joita toistetaan eri sivuilla. Sellaisia ovat esimerkiksi header ja footer. Voimme haluta tehdä omaan tiedostoonsa, jolloin käytännössä muokkaamme vain yhtä tiedostoa, joka ei paisu valtavan suureksi. Jos sivulla on monta eri osiota, nekin usein jaetaan eri tiedostoihin. Ne voidaan yhdistää lopulliseen sivuun *require*n avulla.

Meillä voi esimerkiksi olla seuraavanlainen verkkosivun alku, jossa on käytännössä tiedoston *head*, johon kuuluu myös CSS-tiedoston linkitys, *header*, jossa on sivuston otsikko, sekä navigointi.

```php
<!DOCTYPE html>
<html lang="fi">
<head>
    <title>PHP</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <h1>Learn PHP with Anna</h1>
    </header>
<nav>
    <ul>
        <li><a href="index.php">Main Page</a></li>
        <li><a href="part1.php">Part One</a></li>
        <li><a href="assignments1.php">Assignments 1</a></li>
    </ul>
</nav>
```

Sivuston viimeisenä oleva *footer* puolestaan voisi näyttää seuraavalta. Siinä siis suljetaan tageja, jotka ovat aikaisemmin jääneet auki.

```php
<footer>
<p>Trademark by Anna Metsäpelto 2023</p>
</footer>
</body>
</html>
```

Seuraavana palasena olisi sivun varsinainen sisältö, jossa voi olla ohjelmointilogiikkaa. Eri palasten *require* on sillä kohdalla tiedostoa, mihin sen sisltö halutaan.

```php
<?php require "header.php"; ?>

<h2>Lesson 1</h2>

<?php require "footer.php"; ?>
```