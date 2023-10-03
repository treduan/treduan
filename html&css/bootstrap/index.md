# Bootstrap

Bootstrap on muotoilukirjasto, jolla voi osin tai täysin korvata CSS:n käytön HTML:n muotoilussa.

## Bootstrapin ottaminen käyttöön

Jotta sitä voidaan käyttää, täytyy HTML-tiedostoon linkittää joitakin asioita. Sen voi tehdä muutamalla eri tavalla, mutta tässä suosittelen lisäämään Bootstrapin linkkinä ja scriptinä headiin. Ne voi kopioida alla olevasta koodista ja lisätä oikeaan kohtaan omaa koodia.

````html
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <h1>Hello, world!</h1>
  </body>
</html>
````

## Bootstrapin ominaisuuksia