# Salasanat

Kun salasanoja tallennetaan tietokantaan, niitä ei kirjoitetan siinä muodossa, missä käyttäjä ne antaa, sillä se olisi tietoturvariski, jos joku pääsisi käsiksi tietokantaan. Siksi salaanat tallennetaan ns. hash-muodossa.

Eri ohjelmointikielillä ja eri koodikirjastoilla on eri tapoja hoitaa hasin luominen, mutta PHP:lla on oma, helppokäyttöinen tapansa luoda hash. Tässä funktiolle lähetetään salasana, jota ei ole hashatty ja palautetaan sen hash-versio.

````php
<?php
function hashPassword($password){
    $password = trim($password);
    $hashedpassword = password_hash($password,PASSWORD_DEFAULT);
    return $hashedpassword;
}
````