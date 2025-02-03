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

Tiedät, että rekisteröityminen on onnistunut, jos olet siirtynyt takaisin etusivulle, sillä onnistumisen jälkeen meillä on uudelleenohjaus etusivulle. Kannattaa käydä vielä tarkastamassa tietokanta.

## Kirjautuminen

Kun rekisteröityminen on saatu tehtyä, voidaan tehdä sisäänkirjautuminen sekä myös uloskirjautuminen. Sisäänkirjautumiselle tehdään jälleen oma sivu nimeltään login.php.

````php
<h2 class="centered">Login</h2>

<div class="inputarea">
<form  action="login.php" method="post">
    <label for="uname">Käyttäjänimi:</label>
    <input id="uname" type="text" name="username" maxlength=30>
    <label for="pwprd">Salasana:</label>
    <input id="pword" type="password" name="password" maxlength=30>
    <input id="sendbutton" type="submit" value="Lähetä">
</form>
</div>
````

Kun lomake lähetetään, tehdään tarkistukset.

````php
if(isset($_POST['username'], $_POST['password'])){
        $username = cleanUpInput($_POST['username']);
        $password = cleanUpInput($_POST['password']);
  
        $result = login($username, $password);
        if($result){
            $_SESSION['username'] = $result['username'];
            $_SESSION['userid'] = $result['userid'];
            $_SESSION['session_id'] = session_id();
            header("Location: /"); 
        } else {
            echo "Login failed";
        }
    }
````
Tässä käyttäjän syöte sanitoidaan ja niillä kutsutaan funktiota, joka tarkistaa, onko käyttäjänimeä ja salasanaa vastaavaa käyttäjää olemassa. Jos on, käyttäjän käyttäjänimi ja käyttäjä-id asetetaan istuntoon ja sille asetetaan id. Käyttäjä-id:tä voi sitten käyttää esimerkiksi siihen, että voidaan näyttää vain hänen luomaansa sisältöä jne. Lopuksi ohjataan etusivulle. Jos taas tämä epäonnistuu, saamme tekstin "Login failed".

Funktio, joka ottaa yhteyttä tietokantaan, näyttää seuraavalta:

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

Tämä funktio palauttaa käyttäjätiedot, jos tietokannasta löytyi kyseinen käyttäjä ja salasana oli oikein. Muuten se palauttaa falsen. password_verify on PHP:n oma funktio, jolla se tarkistaa, vastaako hashattu salasana annettua salasanaa.

## Uloskirjautuminen

Lopuksi pitää tehdä uloskirjautuminen. Siihen riittää nappi (mielellään lomakkeen sisällä) etusivulla.

````php
function logoutController(){
    session_unset(); //poistaa kaikki muuttujat
    session_destroy();
    setcookie(session_name(),'',0,'/'); //poistaa evästeen selaimesta
    session_regenerate_id(true);
    header("Location: login.php"); // forward eli uudelleenohjaus
    die();
}
````

Uloskirjautumiseen ei tarvita tietokantahakuja, vaan siihen kuuluu vain istunnonhallintaa.