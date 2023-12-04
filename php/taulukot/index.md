# Taulukot

Taulukot ovat Php:ssa pohjimmiltaan hyvin samanlaiset kuin JavaScriptissäkin. Ne voi alustaa kahdella eri tavalla:

````php
$names = ["Tom", "Charlotte", "Lindsay"];
$cities = array("London", "Birmingham", "Edinburg");
````

Taulukon arvoihin pääsee käsiksi viittaamalla sen indeksiin, joka alkaa nollasta.

````php
<ul>
    <?php
        echo  "<li>$names[0]</li>";
        echo  "<li>$names[1]</li>";
        echo  "<li>$names[2]</li>";
    ?>
</ul>
````

Tämä kuitenkin toimii vain, jos meillä on tiedossa taulukon koko. Pidemmissä taulukoissa tässä tulee myös paljon toistoa. 

## Toistorakenteet

PHP:ssa on samankaltaiset toistorakenteet kuin muissakin kielissä: for-silmukka, while-silmukka sekä foreach-rakenne.

### While

Tässä käydään taulukko läpi *while* - silmukan avulla. Siinä käytetään metodia *count* laskemaan taulukon pituutta. *while* -silmukkaa voi käyttää muissakin tarkoituksissa kuin vain taulukon läpikäymiseen. 

```php
<?php
$i = 0;
while($i < count($names)) {
    echo $names[$i];
    $i++;
}
?>
```

### For

*for*-silmukka näyttää varsin samalta kuin JavaScriptissäkin ja sitä voi käyttää muuhunkin kuin taulukoihin. 

````php
<?php
for ($i = 0; $i < count($names); $i++) {
    echo $names[$i];
}
?>
````

### Foreach

*foreach* toimii vain taulukoiden kanssa. Tässä esimerkissä oletetaan, että koodipätkä on osa HTML-koodia.

````php
<ul>
<?php
foreach ($names as $name) {
    echo "<li>$name</li>";
}
?>
</ul>
````

## Demotehtävä 1

1. Luo Php-tiedostossa taulukko, johon tallennat neljä ohjelmointikielen nimeä.
2. Tulosta taulukon sisältö konsoliin *while*-loopilla.
3. Tulosta taulukon sisältö konsoliin *for*-loopilla päinvastaisessa järjestyksessä.
4. Tulosta taulukon sisältö konsoliin *foreach*-loopilla.

## Taulukon muokkaaminen

Taulukon sisältöä voi muuttaa monin tavoin. Yksittäisen taulukon alkion voi valita indeksillä ja vaihtaa sen sisällön.

````php
<?php
$names[1] = "Miriam";
?>
````

Taulukon loppuun voi lisätä alkion tai useita funktiolla *array_push*. Sulkujen sisällä on ensin taulukon nimi ja sen jälkeen lisättävät alkiot.

````php
<?php
array_push($names, "Mary", "John");
?>
````

Taulukon alkuun voi lisätä alkion tai useamman funktiolla *array_unshift*.

````php
<?php
array_unshift($names, "Mary", "John");
?>
````

Taulukon lopusta voi poistaa alkion funktiolla *array_pop*. Alusta voi poistaa alkion funktiolla *array_shift*.

*array-map*-funktiolla luodaan uusi taulukko siten, että jokaista sen alkiota voidaan muokata. Tässä esimerkissä jokainen alkio kerrotaan itsellään.

````php
<?php
<!DOCTYPE html>
<html>
<body>

<p>
<?php
function myfunction($num)
{
  return($num*$num);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));
?>
</p>

</body>
</html>
?>
````

## Demotehtävä 2

1. Käytä aiemmin luotua taulukkoa.
2. Tee funktio, jossa ensin poistat taulukon ensimmäisen alkion ja lisäät sitten uuden ohjelmointikielen nimen taulukon loppuun.
3. Tee *array_map*-funktio, jossa jokainen alkio muutetaan [isoille kirjaimille](https://www.w3schools.com/php/func_string_strtoupper.asp)<base target="_blank">. Tulosta sitten jokainen alkio konsoliin käyttäen esimerkiksi *foreach*ia.

## Assosiatiiviset taulukot

Php:ssä on myös taulukoita, joissa kaikilla alkioilla on nimet. Sellaisen voi luoda kahdella eri tavalla.

````php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
````

tai

````php
$age = array();
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
````

Jos haluamme tulostaa jokin alkion, meidän täytyy käyttää alkion nimeä.

````php
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>
````

Assosiatiivisen taulukon läpikäyminen onnistuu seuraavasti:

````php
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key = " . $x . ", Value = " . $x_value;
  echo "<br>";
}
?>
````

## Demotehtävä 3

1. Jatka aiempaan tiedostoon.
2. Luo assosiatiivinen taulukko, jossa on neljä ohjelmointiekielen nimeä, mutta alkioilla on nimet *Most popular*, *Second*, *Third* ja *Fourth*.
3. Lisää taulukkoon vielä yksi ohjelmointikieli, joka on *Fifth*.
4. Tulosta taulukko konsoliin.

## Kaksiulotteiset taulukot

Myös Php:ssä voi olla kaksiulotteisia taulukoita eli taulukoita toisten taulukoiden sisällä. Esimerkkinä voisi olla vaikka taulukko kaupan tuotteista varastossa. Silloin meillä voi olla taulukko, jossa on taulukoita, joissa on tuotenumero, tuotteen nimi, tilausmäärä, varastosaldo, hinta jne.

Kaksiulotteinen taulukko voidaan luoda seuraavasti:

````php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
````

tai

````php
$cars = array [
  ["Volvo",22,18],
  ["BMW",15,13],
  ["Saab",5,2],
  ["Land Rover",17,15]
];

Sen läpikäymiseen tarvitaan kaksi sisäkkäistä silmukkaa. Usein käytetään kahta *for*-silmukkaa. Tässä luodaan uusi taulukko supersankareista.

````php
<?php
// Multidimensional array
$superheroes = array(
    "spider-man" => array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    "super-man" => array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    "iron-man" => array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
 
// Printing all the keys and values one by one
$keys = array_keys($superheroes);
for($i = 0; $i < count($superheroes); $i++) {
    echo $keys[$i] . "{<br>";
    foreach($superheroes[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "}<br>";
}
?>
````

Lisää kaksiulotteisista taulukoista voi lukea [täältä](https://www.phptutorial.net/php-tutorial/php-multidimensional-array/)<base target="_blank">.

## Demotehtävä 4

1. Jatka edelliseen tiedostoon.
2. Luo kaksiulotteinen taulukko lemmikkieläimistä. Taulukossa on vähintään kolme lemmikkieläintä, joilla on nimi, laji ja ikä.
3. Tulosta lemmikkieläimet konsoliin.