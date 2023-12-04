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