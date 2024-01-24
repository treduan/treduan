## Tyyppimuunnokset

Kuten JavaScriptkin, PHP on dynaamisesti tyypitetty ohjelmointikieli, mikä tarkoittaa, että muuttujan tyyppi määritellään automaattisesti. Tämä on joskus helpottava asia, mutta joskus se tuottaa myös ongelmia. Haasteita tuovat erityisesti tilanteet, joissa pitäisi tehdä laskutoimituksia. 

Useimmiten tulee tilanne, jossa merkkijono halutaan muuttaa numeroksi. Se tapahtuu kirjoittamalla *(int)* muuttujan eteen. Vastaavasti toimisi myös *(float)* eli desimaaliluku tai *(string)* eli merkkijono. Tätä kutsutaan eksplisiittiseksi muuttamiseksi (explicit cast) eli muuttujan tyyppi todella muuttuu.

````php
<?php
$num = "33";
$toInt = (int)$num;
?>
````

Vaihtoehtona on käyttää metodeja *intval()*, *floatval()* tai *strval()* -funktioita. Nämä eivät varsinaisesti muuta muuttujan tyyppiä, vaan antavat sen kerran käsitellä muuttujaa ikään kuin se olisi toista tyyppiä.

````php
<?php
   $num = "5.6";
   echo 7/intval($num) . "<br>";
   echo $num; // edelleen "5.6"
?>
````

## Muuttujien tyyppi funktioissa

On myös mahdollista pakottaa vastaanotettaville muuttujille tyyppi funktiossa. Silloin parametrien eteen laitetaan haluttu tyyppi. Esimerkissä funktio ottaa vastaan *float*-tyypin muuttujia, jotta niillä voidaan tehdä jakolasku.

````php
<?php
   function division(float $x, float $y) {
       if($y >= 0) {
           return $x/$y;
       }
       else {
           return "You cannot divide with 0.";
       }
   }
   echo division(8.7, 0);
?>
````

Huomiona, että jos ylläolevassa käyttää tyyppiä *int*, funktio ottaa vastaan kokonaisluvun, mitä ei välttämättä haluta, jos tarkkuudella on merkitystä. Silloin desimaalit vain tiputettaisiin pois parametristä eli laskutoimitus olisi 8/19.

## Funktioiden palautustyyppi

Voimme myös haluta, että funktio voi palauttaa vain tietyn tyyppisen palautuksen.