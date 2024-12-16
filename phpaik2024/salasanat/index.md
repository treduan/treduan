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

Kun taas halutaan tarkistaa salasana, käytetään funktiota *password-verify()*, jolle annetaan tarkistettava salasana sekä hash-versio salasanasta. Se tarkistaa, vastaavatko nämä toisiaan.

*password_verify()* -funktiota käytetään sisäänkirjautumisessa seuraavasti:

````php
function login($username, $password){
    $pdo = connectDB();
    $sql = "SELECT * FROM users WHERE username=?";
    $stm= $pdo->prepare($sql);
    $stm->execute([$username]);
    $user = $stm->fetch(PDO::FETCH_ASSOC);
    $hashedpassword = $user["password"];

    if($hashedpassword && password_verify($password, $hashedpassword))
        return $user;
    else 
        return false;
}
````