<?php

$etunimet = array("viljo", "jönssi", "make", "tarik", "salla");

$sukunimi = array("veltti", "kallio", "väntti", "grozdanic", "päivärinta");


for ($i = 0; $i < count($etunimet); $i++) {
    echo $etunimet[$i]  . ", " .$sukunimi[$i]. "\n";
}
?>