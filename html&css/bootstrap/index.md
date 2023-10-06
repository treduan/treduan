# Bootstrap

Bootstrap on muotoilukirjasto, jolla voi osin tai täysin korvata CSS:n käytön HTML:n muotoilussa. Siinä on myös sisään rakennettuja toiminnallisuuksia, joilla voi osin korvata JavaScriptiä. Kun sitä osaa käyttää, on mahdollista luoda siistin näköisiä sivuja nopeammin. Toisaalta yhtä aikaa menettää hieman vapautta tehdä omannäköistä tyyliä. Bootstrapin merkittävin hyöty on siinä, että sitä käyttämällä suurin osa elementeistä on helposti responsiivisia eli ne skaalautuvat näytön leveyden mukaan, kun niitä käytetään oikein. Bootstrapin muotoilut yhdistetään elementin luokkaan eli *class*iin.

Opettelemme käyttämän versiota 4, mutta myös versio 5 on olemassa (kaikki selaimet eivät tue sitä, mistä syystä keskitymme vähän vanhempaan versioon). Emme käy läpi kaikkia Bootstrapin mahdollisuuksia, vaan tutustumme siihen sen verran, että on mahdollista etsiä siitä lisää hyödyllisiä ominaisuuksia. 

## Bootstrapin ottaminen käyttöön

Jotta sitä voidaan käyttää, täytyy HTML-tiedostoon linkittää joitakin asioita. Sen voi tehdä muutamalla eri tavalla, mutta tässä suosittelen lisäämään Bootstrapin linkkinä ja scriptinä headiin. Ne voi kopioida alla olevasta koodista ja lisätä oikeaan kohtaan omaa koodia.

````html
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <h1>Hello, world!</h1>
  </body>
</html>
````

## Bootstrapin ominaisuuksia

Useimmat elementit on kannattavaa laittaa luokan *container* sisään. Se antaa niille järkevät marginaalit useimmissa tapauksissa.

### Grid

CSS:ssä on asettelussa mahdollista käyttää *grid*iä tai muita asettelumenetelmiä, mutta Bootstrapissa se on ensisijainen asettelutyökalu. Bootstrapin gridissä on kaksitoista pystyriviä, joista on mahdollista jakaa tilaa elementeille. Alla olevassa kuvassa on demonstroitu, miten sivun voi jakaa joko tasakokoisiin tai vaihtuvakokoisiin paloihin.

![Bootstrapin grid](bootstrapgrid.PNG)

Lisäksi Bootstrapissa on määritelty *grid-luokat* näytön leveyden perusteella. 
- col- (puhelimille, alle 576 pikseliä)
- col-sm- (isoille puhelimille ja tableteille, yli 576 pikseliä)
- col-md- (isoille tableteille, yli 768 pikseliä)
- col-lg- (kannettaville tietokoneille, yli 992 pikseliä)
- col-xl- (suurille tietokoneruuduille ja muille näytöille, yli 1200 pikseliä)

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
4. Laita kaikki elementit luokan *container* sisään ja katso, millainen ero asettelussa on.

### Tekstinkäsittely

Yksittäiselle elementille voidaan antaa monta eri luokkaa, jolloin ne erotetaan välilyönnillä.

Tekstiä voidaan muotoilla monilla tavoilla Bootstrapilla. Kaikkia eri tapoja on listattu [täällä](https://www.w3schools.com/bootstrap/bootstrap_typography.asp)<base target="_blank">. 

Esimerkiksi tekstin taustan värin voi säätää sen merkityksen mukaan eli esimerkiksi onnistumisella on vihreä tausta, varoituksella keltainen ja vaaralla tai virheellä punainen. Nämä onnistuvat nopeasti antamalla tekstille luokan *bg-success*, *bg-warning* tai *bg-danger*.

## Demotehtävä 2

1. Käytä aiempaa demotehtävää pohjana. Katso linkin takaa ohjeita.
2. Muuta ensimmäistä tekstielementtiä niin, että se on kokonaan kirjoitettu isoilla kirjaimilla.
3. Muuta toista tekstielementtiä niin, että se on kirjoitettu pienellä tekstillä.
4. Muuta kolmatta tekstielementtiä niin, että se on "onnistumisteksti" eli vihreällä kirjoitettu.
5. Muuta neljättä tekstielementtiä niin, että se on muotoiltu koodiksi.

### Kuvat

Kuvia voi nopeasti käsitellä Bootstrapilla eli niille voi lisätä pyöristetyt kulmat (*img-rounded*), niistä voi tehdä täysin pyöristetyt (*img-circle*) tai niille voi antaa kehykset (*img-thumbnail*). *thumbnail*-luokkaa voi hyödyntää esimerkiksi kuvagallerian luomiseen ([ks. esimerkki](https://www.w3schools.com/bootstrap/bootstrap_images.asp)<base target="_blank">).

### Taulukot

Taulukoille on monia muotoiluvaihtoehtoja Bootstrapissa. Perustaulukon saa, kun antaa ``<table>`` -elementille luokan *table*. Jos haluaa joka toisen rivin vähän tummemmaksi, luokka voi olla *table.striped*. Luokkia on muutama muukin. 

Myös yksittäisiä taulukon rivejä voi muotoilla samoilla väreillä kuin tekstiä tai tekstin taustaa eli *success* on vihreä, *danger* on punainen, *warning* on keltainen ja *info* on sininen. 

Lisää taulukoista voi lukea [täältä](https://www.w3schools.com/bootstrap4/bootstrap_tables.asp)<base target="_blank">

## Demotehtävä 3

1. Lisätkää aikaisemmalle sivulle jokin kuva, jolle annat kehykset ja kuvatehstin Bootstrapilla (ks. esimerkkilinkki kuvagalleriasta ylempänä).
2. Lisää sivulle pieni taulukko, johon on kerätty vähintään neljä hedelmää, niiden ostopaikka ja niiden kilohinta (saat keksiä itse). Valitse taulukolle Bootstrap-luokka, joita voit katsoa lisää yllä olevan linkin takaa.
3. Väritä taulukon kalleimman tuoterivin tausta punaisella ja taulukon edullisimman tuoterivin tausta vihreällä käyttämällä Bootstrapia.

### Napit

Bootstrap tarjoaa joukon valmiita nappityylejä erilaisiin tilanteisiin. Ne eroavat väriltään ja niissä on valmiit hover-efektit. Ensin jokaisessa pitää olla luokka *btn*, minkä jälkeen sen ominaisuuksia voi tarkentaa. Napit voivat olla joko taustavärillisiä tai vain reunoiltaan väritettyjä.

[Bootstrapin napit](https://www.w3schools.com/bootstrap4/bootstrap_buttons.asp)<base target="_blank">

Lisäksi napin kokoa voi säätää antamalla vielä uuden luokan eli suurentaa *btn-lg*:llä tai pienentää *btn-sm*:llä tai *btn-xs*:llä.

Jos taas haluaa täysleveän napin, luokka on *btn-block*.