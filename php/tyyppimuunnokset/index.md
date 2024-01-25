## Tyyppimuunnokset

Kuten JavaScriptkin, PHP on dynaamisesti tyypitetty ohjelmointikieli, mikä tarkoittaa, että muuttujan tyyppi määritellään automaattisesti. Tämä on joskus helpottava asia, mutta joskus se tuottaa myös ongelmia. Haasteita tuovat erityisesti tilanteet, joissa pitäisi tehdä laskutoimituksia. Koodi on myös alttiimpi erilaisille virheille, jos emme millään tavalla varmistele muuttujien tyyppejä.

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
   echo $num; // edelleen "5.6", vaikka laskutoimituksessa se oli 5
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

Voimme myös haluta, että funktio voi palauttaa vain tietyn tyyppisen palautuksen. Tämä toimii PHP:n versiossa 7.0 eteenpäin (koulun koneisiin on asennettu versio 8.->) eli tätä ei välttämättä näe kovin vanhassa PHP-koodissa. Silloin funktioon ennen ensimmäistä kaarisuljetta kirjoitetaan kaksoispiste ja haluttu tyyppi. Esimerkissä funktio ottaa vastaan kaksi *integer*iä ja palauttaa *integer*in. 

````php
<?php
<?php

function add(int $x, int $y): int
{
    return $x + $y;
}

echo add(10, 20);
?>
````

Jos taas funktio ei palauta yhtään mitään, voi sen tyypiksi ilmoittaa *void*.

PHP 8.0 alkaen funktion palautustyyppi voi olla myös yhdistelmä (union) eli kaksi tai useampi eri tyyppiä. Silloin nämä vaihtoehdot erotetaan pystyviivalla. Esimerkissä funktio palauttaa joko *integer*in tai *float*in rippuen siitä, onko laskutoimituksen lopputulos kokonaisluku vai desimaaliluku.

````php
<?php

function add($x, $y): int | float
{
    return $x * $y;
}

echo add(10, 20); // 200 (int) 
echo add(1.5, 2.5); // 3.75 (float)
?>
````

Jos palautustyyppi voi olla oikeastaan mikä vain, sen tyyppi voi olla myös *mixed*.

Lopuksi on mahdollista, että otetaan huomioon se, että parametrin tyyppi onkin *null* eli sitä ei ole. Silloin voidaan ikään kuin ilmaista, että kyseinen parametri on vapaaehtoinen. Se tapahtuu lisäämällä kysymysmerkki oletetun tyypin eteen. Tässä esimerkissä funktio ottaa vastaan joko merkkijonon tai tyhjän ja palauttaa merkkijonon, joka on mahdollisesti tyhjä.

````php
<?php
function upper(?string $str): string
{
    return "Returning " . strtoupper($str);
}

$str = null;
echo upper($str);
?>
````

## Demotehtävä

1. Luo funktio, joka plussaa kaksi lukua yhteen ja palauttaa tuloksen. Tulosta tulos konsoliin tai verkkosivulle.
2. Katso, mitä tapahtuu, jos annat sille parametreiksi "3.5" ja "4.8". Pidä lainausmerkit.
3. Katso, mitä tapahtuu, jos muutat funktiota ottamaan parametreiksi vain *int*-tyyppisiä lukuja.
4. Katso, mitä tapahtuu, jos poistat funktion parametreistä *int*it ja vaihdat funktion palauttamaan *int*-tyyppisen muuttujan.