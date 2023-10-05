# Bootstrap

Bootstrap on muotoilukirjasto, jolla voi osin tai täysin korvata CSS:n käytön HTML:n muotoilussa. Siinä on myös sisään rakennettuja toiminnallisuuksia, joilla voi osin korvata JavaScriptiä. Opettelemme käyttämän versiota 3, mutta myös versiot 4 ja 5 ovat olemassa (kaikki selaimet eivät tue niitä, mistä syystä keskitymme vähän vanhempaan versioon). Bootstrapin merkittävin hyöty on siinä, että sitä käyttämällä suurin osa elementeistä on helposti responsiivisia eli ne skaalautuvat näytön leveyden mukaan, kun niitä käytetään oikein. Bootstrapin muotoilut yhdistetään elementin luokkaan eli *class*iin.

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

Jotta pääsemme käyttämään Bootsrapin gridiä, ensin meidän pitää määritellä rivi eli *row* -elementti, joka pitää sisällään kaikki ne elementit, jotka haluamme gridiin. Kun pystyrivien numeroiden määrä lasketaan yhteen, lopputulokseksi pitää saada 12. Alla esimerkissä kaksi ensimmäistä elementtiä on kapeampia (25%) ja kolmas leveämpi (50%). Ne olisi myös mahdollista kaikki saada yhtä suuriksi antamalla jokaisen arvoksi 4. Sitten pitää määritellä, mikä on suurin näyttö, millä tämä toimii eli pienemmällä näytöllä tämä sääntö ei enää päde, vaan elementit menevät allekkain. Tässä esimerkissä elementit menevät allekkain, kun mennään tabletin kokoluokkaan.

````html
<div class="row">
  <div class="col-sm-3"><p>Here is the first part</p></div>
  <div class="col-sm-3"><p>Here is the second part</p></div>
  <div class="col-sm-6"><p>Here is the third part which is wider than the first two</p></div>
</div>
````

## Demotehtävä 1

1. Luo uusi HTML-sivu, jolle linkkaat tarvittavan Bootstrapin (voit kopioida ylempänä olevan pohjan).
2. Luo sivulle neljä elementtiä, joihin kirjoitat jotain tekstiä.
3. Asettele nämä elementit niin, että leveällä ruudulla kolmas elementti vie tilaa yhtä paljon kuin kolme muuta yhteensä, ja kapealla ruudulla ne asettuvat allekkain.

## Tekstinkäsittely

Yksittäiselle elementille voidaan antaa monta eri luokkaa, jolloin ne erotetaan välilyönnillä.

Tekstiä voidaan muotoilla monilla tavoilla Bootstrapilla. Kaikkia eri tapoja on listattu [täällä](https://www.w3schools.com/bootstrap/bootstrap_typography.asp)<base target="_blanck">. 

Esimerkiksi tekstin taustan värin voi säätää sen merkityksen mukaan eli esimerkiksi onnistumisella on vihreä tausta, varoituksella keltainen ja vaaralla tai virheellä punainen. Nämä onnistuvat nopeasti antamalla tekstille luokan *bg-success*, *bg-warning* tai *bg-danger*.

## Demotehtävä 2

1. Käytä aiempaa demotehtävää pohjana. Katso linkin takaa ohjeita.
2. Muuta ensimmäistä tekstielementtiä niin, että se on kokonaan kirjoitettu isoilla kirjaimilla.
3. Muuta toista tekstielementtiä niin, että se on kirjoitettu pienellä tekstillä.
4. Muuta kolmatta tekstielementtiä niin, että se on "onnistumisteksti" eli vihreällä kirjoitettu.
5. Muuta neljättä tekstielementtiä niin, että se on muotoiltu koodiksi.