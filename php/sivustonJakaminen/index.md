# Sivuston jakaminen eri tiedostoihin

On hyvin tyypillistä, että Php:llä sivuston rakenne jaetaan osiin, erityisesti, jos meillä on osia, joita toistetaan eri sivuilla. Sellaisia ovat esimerkiksi header ja footer, jotka toistuvat samanlaisia sivuston kaikilla sivuilla, kun sivujen muu sisältö vaihtuu. Voimme haluta tehdä ne omaan tiedostoonsa, jolloin käytännössä muokkaamme vain yhtä tiedostoa, joka ei paisu valtavan suureksi ja vältymme toistamasta paljon koodia. Jos sivulla on monta eri osiota, nekin usein jaetaan eri tiedostoihin. Ne voidaan yhdistää lopulliseen sivuun *require*n avulla.

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

Seuraavana palasena olisi sivun varsinainen sisältö, jossa voi olla ohjelmointilogiikkaa. Eri palasten *require* on sillä kohdalla tiedostoa, mihin sen sisältö halutaan.

```php
<?php require "header.php"; ?>

<h2>Lesson 1</h2>

<?php require "footer.php"; ?>
```

## Demotehtävä 1

1. Luo uuteen kansioon tiedostot nimiltään *index.php*, *header.php*, *article.php* ja *footer.php*. 
2. *header.php*-tiedostoon tulee HTML-sivun alku sekä *header*, jossa on otsikko, ja navigointi. Teemana on uutissivu eli otsiko voi olla vaikka Tredun uutiset. Navigoinnissa voi olla esimerkiksi Etusivu, Tuoreimmat, Kaikki uutiset, Arkisto, Toimitus.
3. *article.php*-tiedostoon tulee esimerkkiartikkeli, johon kuuluu artikkelin nimi, kirjoittaja, julkaisuajankohta, kuva ja tekstiä (tässä tapauksessa teksti voi olla lorem ipsumia tms).
4. *footer.php*-tiedostoon tulee footerille tyypillisiä asioita kuten copyright sekä HTML-tiedoston sulkutagit.
5. Yhdistä nämä tiedostot toisiinsa *index.php*-tiedostossa ja tarkista, että ne toimivat.