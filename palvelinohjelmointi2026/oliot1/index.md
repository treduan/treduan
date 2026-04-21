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

## Getter ja setter

Tämän lisäksi yleensä on niin sanotut setter ja getter -funktiot, joiden avulla oliota muutellaan. Setter-funktiolla asetetaan olion muuttujaan arvo ja getter-funktiolla haetaan olion muuttujan arvo. Niinpä lopulta luokka näyttää seuraavalta:

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

## Constructor

Näiden lisäksi luokassa voi olla yksi tai useampi *constructor*-funktio. Se on ikään kuin malli siitä, mitä uutta oliota määritellessä tapahtuu eli mitä muuttujia oliolla voi heti alkuun olla.

Jos *constructor* lisätään lemmikkiluokkaan kaikkien ominaisuuksien kanssa, se näyttäisi tältä:

````php
function __construct($spec, $bree, $na, $birth) {
    $this->species = $spec;
    $this->breed = $bree;
    $this->name = $na;
    $this->birthday = $birth;
}
````

*constructor*eja voi olla myös useampi, jos jotkut ominaisuudet eivät ole pakollisia eli meillä voisi olla vaikka versio lemmikistä, jossa lemmikin syntymäpäivä ei ole tiedossa, jolloin on *constructor*, josta ei löydy syntymäpäivää.

Jos luokassa on construktorin lisäksi setter-funktiot, construktori kutsuu setter-funktioita seuraavasti:

````php
function __construct($spec, $bree, $na, $birth) {
    $this->setSpecies($spec);
    $this->setBreed($bree);
    $this->setName($na);
    $this->setBirthday($birth);
}
````

## Demotehtävä 1

1. Luo oma luokka verkkokaupassa olevasta tuotteesta. Mieti siis, mitä muuttujia tarvitaan esimerkiksi verkkokaupassa olevalla tuotteella. Voisiko tuotteella olla myös omia funktioita? 
2. Lisää tuotteelle myös getter- ja setter-funktiot sekä constructor.

## Olio

Luokasta voidaan tehdä joukko olioita. Silloin luokan määrittelemille muuttujille annetaan arvot sen antaman mallin mukaan. Jos mietitään verkkokaupan tuotetta, josta loimme luokkia, tässä kohtaa alamme nimetä tuotteita sekä asettaa niille kuvauksia, hintoja. Ne ovat silloin olioita eli luokasta luotuja luokan ilmentymiä, joilla on konkreettisia arvoja.

Olion luomisessa käytetään avainsanaa *new*. Samasta luokasta voi luoda loputtoman määrän uusia olioita.

````php
$rekku = new pet;
$misse = new pet;
````

Voimme sitten määritellä lemmikin muuttujien arvot käyttämällä setter-funktiota.

````php
$rekku->setSpecies("Dog");
$rekku->setBreed("Golden retriever");
$rekku->setName("Rekku");
$rekku->setBirthday("2021/10/21");

$misse->setSpecies("Cat");
$misse->setBreed("Norwegian Forestcat");
$misse->setName("Misse");
$misse->setBirthday("2019/05/25");
````

Tosin useammin asetamme muuttujille arvot jo luodessamme ne.

````php
$marvin = new pet("Hamster", "Robovski", "Marvin", "2022/03/15");
````

Voimme hakea ja tulostaa olion muuttujien arvoja seuraavalla tavalla:

````php
echo $marvin->getName();
````

## Demotehtävä 2

1. Luo tekemästäsi tuoteluokasta vähintään kaksi oliota, jonka muuttujille annat arvot.
2. Tulosta molemmista toisen ominaisuuden arvo.