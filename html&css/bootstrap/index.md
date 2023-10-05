# Bootstrap

Bootstrap on muotoilukirjasto, jolla voi osin tai täysin korvata CSS:n käytön HTML:n muotoilussa. Siinä on myös sisään rakennettuja toiminnallisuuksia, joilla voi osin korvata JavaScriptiä. Opettelemme käyttämän versiota 3, mutta myös versiot 4 ja 5 ovat olemassa (kaikki selaimet eivät tue niitä, mistä syystä keskitymme vähän vanhempaan versioon). Bootstrapin merkittävin hyöty on siinä, että sitä käyttämällä suurin osa elementeistä on helposti responsiivisia eli ne skaalautuvat näytön leveyden mukaan, kun niitä käytetään oikein.

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

### Grid

CSS:ssä on asettelussa mahdollista käyttää *grid*iä tai muita asettelumenetelmiä, mutta Bootstrapissa se on ensisijainen asettelutyökalu. Bootstrapin gridissä on kaksitoista pystyriviä, joista on mahdollista jakaa tilaa elementeille. Alla olevassa kuvassa on demonstroitu, miten sivun voi jakaa joko tasakokoisiin tai vaihtuvakokoisiin paloihin.

![Bootstrapin grid](bootstrapgrid.PNG)

Lisäksi Bootstrapissa on määritelty *grid-luokat* näytön leveyden perusteella. 
- xs (puhelimille, alle 768 pikseliä)
- sm (tableteille, yli 768 pikseliä)
- md (kannettaville tietokoneille, yli 992 pikseliä)
- lg (isommille kannettaville ja tietokoneruuduille, yli 1200 pikseliä)

Jotta pääsemme käyttämään Bootsrapin gridiä, ensin meidän pitää määritellä rivi eli *row* -elementti, joka pitää sisällään kaikki ne elementit, jotka haluamme gridiin.

````html
<div class="row">
  <div class="col-sm-3">Here is the first part</div>
  <div class="col-sm-3">Here is the second part</div>
  <div class="col-sm-6">Here is the third part which is wider than the first two</div>
</div>
````