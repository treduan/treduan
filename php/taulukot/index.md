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

Tässä käydään taulukko läpi *while* - silmukan avulla. Siinä käytetään metodia *count* laskemaan taulukon pituutta. 

```php
<?php
$i = 0;
while($i < count($names)) {
    echo "<li> $names[$i] </li>";
    $i++;
}
?>
```

### For

### Foreach