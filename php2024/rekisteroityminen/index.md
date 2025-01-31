# Rekisteröityminen ja kirjautuminen

Erittäin monessa verkkopalvelussa täytyy tehdä rekisteröityminen ja kirjautuminen. Katsomme siis, miten sen voi tehdä PHP:llä käyttäen tietokantaa.

Ensimmäisenä meidän täytyy luoda tietokanta nimeltään users. Tätä testiä varten voit käyttää valmista [tietokantadumppia](./user_dump.sql)<base target="_blank">.

Seuraavana teemme uuden kansion, johon teemme dbconnect.php-tiedoston, jossa hoidamme tietokantayhteyden kuntoon. Lisäksi teemme index.php-tiedoston, joka aluksi vahvistaa tietokantayhteyden.

## Rekisteröityminen

Verkkosivulla täytyy olla lomake rekisteröitymistä varten. Se tehdään omaan register.php-tiedostoon. Voit lisätä index.php-tiedostoon linkin register-php-tiedostoon. 

Rekisteröitymislomake voisi näyttää seuraavalta:

````html
<h2 class="centered">Rekisteröidy</h2>

<div class="inputarea">
<form  action="register.php" method="post">
    <label for="fname">Etunimi:</label> 
    <input id="fname" type="text" name="firstname" maxlength=30>
    <label for="lname">Sukunimi:</label>         
    <input id="lname" type="text" name="lastname" maxlength=30>
    <label for="uname">Käyttäjänimi:</label>
    <input id="uname" type="text" name="username" maxlength=30>
    <label for="pword">Salasana:</label>
    <input id="pword" type="password" name="password" maxlength=30>
    <input id="sendbutton" type="submit" value="Lähetä">
</form>
</div>
````

Sitten meidän täytyy tehdä tarkistuksia, kun lomake on lähetetty:

````php
    if(isset($_POST['lastname'], $_POST['firstname'], $_POST['username'], $_POST['password'])){
        $lastname = cleanUpInput($_POST['lastname']);
        $firstname = cleanUpInput($_POST['firstname']);
        $username = cleanUpInput($_POST['username']);
        $password = cleanUpInput($_POST['password']);

        try {
            addUser($firstname, $lastname, $username, $password);
            header("Location: /"); 
        } catch (PDOException $e){
            echo "Virhe tietokantaan tallennettaessa: " . $e->getMessage();
        }
    }
````

Tässä tarkistetaan syötteet ja sanitoidaan ne cleanUpInput-funktion avulla. Jos kaikki on kunnossa, kutsutaan addUser-fuktiota, jolle lähetetään kaikki tiedot. Sen jälkeen käyttäjä viedään etusivulle eli index.php-sivulle. Jos taas rekisteröityminen ei toimi, käyttäjälle annetaan virheviesti.

cleanUpInput on itse rakennettu funktio, joka poistaa mahdolliset tyhjät välilyönnit sekä sanitoi syötteen. Se näyttää seuraavalta:

````php
function cleanUpInput($userinput){
    $input = trim($userinput);
    $cleaninput = filter_var($input,FILTER_SANITIZE_STRING);
    return $cleaninput;
}
````

Lopuksi kutsutaan addUser-funktiota, joka lähettää tiedot tietokantaan. Salasana hashataan, jotta kukaan tietokantaan käsiksi pääsevä ei voi sitä lukea.

````php
function addUser($firstname, $lastname, $username, $password){
    $pdo = connectDB();
    $hashedpassword = hashPassword($password);
    $data = [$firstname, $lastname, $username, $hashedpassword];
    $sql = "INSERT INTO users (firstname, lastname, username, password) VALUES(?,?,?,?)";
    $stm=$pdo->prepare($sql);
    return $stm->execute($data);
}
````

hashPassword-funktio näyttää seuraavalta:

````php
<?php
function hashPassword($password){
    $password = trim($password);
    $hashedpassword = password_hash($password,PASSWORD_DEFAULT);
    return $hashedpassword;
}
````