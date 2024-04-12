# PHP ja JavaScript

Samalla verkkosivulla käytetään usein useampia ohjelmointikieliä. Toisin sanoen pääosin PHP:llä tehtävällä verkkosivulla voi olla osuuksia, jotka onkin tehty JavaScriptillä, sillä kyseiset ohjelmointikielet soveltuvat erityisen hyvin eri asioihin.

## PHP:n vahvuuksia

PHP:tä käytetään yleensä serveripuolen koodaukseen kuten tietokantayhteyksiin, tiedostojen lataamiseen ja lomakkeiden käsittelemiseen jne. Sillä voi myös tehokkaasti generoida HTML-koodia. Se toimii myös hyvin autentikaatiota ja auktorisaatioita tarkastellessa (eli onko joku kirjautunut ja mitä oikeuksia kirjautuneella on jne).

## Javascriptin vahvuuksia

Javascriptillä on helpompaa muokata käyttöliittymää eli esimerkiksi näyttää dropdowneja, modaaleja ja muita elementtejä. Se toimii myös käyttöliittymän puolella hyvin lomakkeiden validointiin. Se muokkaa suoraan DOMia, joten sitä voi käyttää lisäämään ja poistamaan HTML-elementtejä ja muokkaamaan niiden ulkoasua. Javasriptillä on paljon helpompaa muokata erilaisia CSS-ominaisuuksia kuin PHP:llä.

## Esimerkki validoinnista

Alla on esimerkki siitä, miten lomake voidaan validoida Javascriptillä sekä PHP:llä. Javascriptin avulla muun muassa voidaan luoda Alert-laatikko, joka kertoo, jos annettu syöte ei ole kelvollista. HTML-pohja on index.php -tiedostossa ja lomake otetaan vastaan process_form.php -tiedostossa. Lomake käsitellään vasta, jos ``onsubmit`` palauttaa arvona ``true``, jolloin Javascript on tehnyt validoinnin. PHp vielä muun muassa sanitoi syötteen.

````HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<script>
        // JavaScript function to validate the form
        function validateForm() {
            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;

            if (name.trim() === '') {
                alert('Please enter your name.');
                return false;
            }

            if (email.trim() === '') {
                alert('Please enter your email.');
                return false;
            }

            // Additional email validation (basic format)
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert('Please enter a valid email address.');
                return false;
            }

            return true; // Form is valid
        }
    </script>
</head>
<body>
    <h2>Form Validation Example</h2>
    <form action="process_form.php" method="post" onsubmit="return validateForm()">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
````

````php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Server-side validation (additional validation can be added here)
    if (empty($name) || empty($email)) {
        // Handle validation error
        echo "Please fill out all fields.";
    } else {
        // Process the form data (e.g., save to database, send email, etc.)
        echo "<p>Form submitted successfully!<br>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br> </p>";
    }
}
?>
````

## Demotehtävä

1. Luo palautelomake, jossa on kenttinä nimi, sähköpostiosoite sekä palaute. Palaute on tekstikenttä, johon voi kirjoittaa pidemmän tekstin.
2. Lisää Javascriptillä validointi, mutta alert-laatikoiden sijaan kirjoita tekstit punaisella värillä lomakkeen alle.
3. Käsittele lomake vielä PHP:llä toisessa tiedostossa muun muassa sanitoimalla syöte turvalliseksi.
4. Näytä syötetyt tiedot ruudulla.