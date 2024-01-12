# Olio (object) ja luokka (class)

Tutustumme tässä olio-ohjelmointiin PHP:n avulla.

## Luokka 

Luokka on käytännössä tapa esittää jokin kokonaisuus, jota voidaan käyttää myöhemmin esimerkiksi tietokantaan tallennettaessa tai sieltä tietoa luettaessa. Luokan tarkoitus on piilottaa tiedon esitysmuoto, ja estää sen käyttäminen suoraan. Luokalla voi olla joukko muuttujia sekä funktioita.

Esimerkki luokasta voi olla vaikka seuraavanlainen. Meillä on siis malli lemmikkieläimestä.

````php
<?php
class pet {
    $species;
    $breed;
    $name;
    $birthday;
    function play() {
        echo "The pet is playing."
    }
}
?>
````
Tämän lisäksi yleensä on niin sanotut setter ja getter -funktiot, joiden avulla oliota muutellaan. Niinpä lopulta luokka näyttää seuraavalta:

````php
<?php
class pet {
    $species;
    $breed;
    $name;
    $birthday;
    function play() {
        echo "The pet is playing."
    }
    function setSpecies($spec) {
        $this->species = $spec;
    }
    function getSpecies() {
        return $this->species;
    }
    function setBreed($bree) {
        $this->breed = $bree;
    }
    function getBreed() {
        return $this->breed;
    }
        function setName($na) {
        $this->name = $na;
    }
    function getName() {
        return $this->name;
    }
        function setBirthday($birth) {
        $this->birthday = $birth;
    }
    function getBirthday() {
        return $this->birthday;
    }
}
?>
````

Setter-metodeihin voidaan laittaa joukko ehtoja, joiden mukaan arvot voi asettaa, mikä on niiden suurin etu. Voimme esimerkiksi määritellä, että nimellä pitää olla vähimmäis- ja enimmäispituus.


## Demotehtävä 1

1. Luo oma luokka 
## Olio

Luokasta voidaan tehdä joukko olioita. Silloin luokan määrittelemille muuttujille annetaan arvot sen antaman mallin mukaan.