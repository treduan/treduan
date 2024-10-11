# HTML perusteet

HTML (Hypertext Markup Language) on avoimesti standardoitu merkkikieli, jolla internetsivut on kirjoitettu. Sillä voidaan merkitä sivuston rakenne sekä monia sisällön merkityksiä. Vaikka internetsivuja voidaan nykyään kirjoittaa monella eri teknologialla ja ohjelmointikielellä, kaikki teknologiat muuntavat koodin jossakin vaiheessa HTML:ksi.

---



## HTML-dokumentin perusteet

Selaimen täytyy tietää, mitä tyyppiä dokumentti on, mistä syystä HTML dokumentti aloitetaan aina 

````HTML 
<!DOCTYPE html>
````

Sen jälkeen kaikki koodi tulee ``<html>`` tagin sisään. Sen sisään kannattaa lisätä sivuston pääasiallinen kieli, esim. ````<html lang=”fi”>````, jos sivusto on suomeksi.

Kaikki tagit kuuluu sulkea oikeassa kohdassa. Tageja voi olla sisäkkäin. Jos tageja ei sulje oikein, on vaarana, että selain tulkitsee HTML:ää väärin ja se sotkee sivuston, vaikka se edelleen näkyy. Siksi ``<html>`` tagin parina täytyy tiedoston lopussa olla ``</html>`` eli sulkutag. Tagit esiintyvät siis lähes aina pareina.

```HTML 
<!DOCTYPE html>
    <html lang="fi">
    </html>
```

HTML-tiedostossa ``<html>``-tagin sisällä on vähintään kaksi osaa eli ``<head>`` ja ``<body>``.

``<head>`` sisältää monenlaista metatietoa, mutta se ei näy internetsivulla pääosin. Poikkeuksena mahdollinen favicon (välilehdellä näkyvä pikkukuvake) sekä ``<title>`` eli sivuston nimi, joka näkyy myös välilehdellä ja joka on merkittävä hakukoneille. 

``<head>``in sisään kannattaa laittaa myös tieto käytetystä merkistöstä, jotta varsinkaan suomen kanssa ei tulisi ääkkösongelmaa. Tyypillisimmin käytetty merkistö on UTF-8, mutta myös UTF-16 ja UTF-32 ovat olemassa, mutta ne vaativat enemmän tallennustilaa eivätkä ole suomen tai muidenkaan länsimaisten kielten kannalta olennaisia, joten todennäköisesti UTF-8 soveltuu kaikkeen. Merkistö ilmoitetaan metatagilla, joita voi olla useampiakin. ``<meta charset=”UTF-8”>`` ``<head>``in sisään voidaan myös linkittää ulkopuolisia tyylitiedostoja kuten CSS-tiedostoja tai ulkopuolisia muita tyylikirjastoja.

```HTML 
<!DOCTYPE html>
    <html lang="fi">
        <head>
            <meta charset="UTF-8"/>
            <title>Aloitussivu</title>
        </head>
        <body>
        </body>
    </html>
```

___

## Dokumentin sisältö

Varsinainen käyttäjälle näkyvä sisältö tulee kirjoittaa ``<body>``n sisään. 

Otsikot merkitään h-tagilla (h = headline). Niitä on 1-6. Jokaisella sivulla pitäisi olla ``<h1>`` ja siitä loogisessa järjestyksessä pienempiä otsikoita. Otsikon näkyvä koko säädetään lopuksi CSS:llä eikä valitsemalla visuaalisesti miellyttävä h-tag. 

Perusteksti kirjoitetaan p-tagilla (p = paragraph). Se rivittyy automaattisesti annettuun tilaan sopivaksi, ellei sitä säädä CSS:llä toisin. Koodin luettavuuden vuoksi kannattaa kuitenkin rivittää kappaleita, vaikka editori sallii erittäin leveälle kirjoittamisen.

```HTML 
<!DOCTYPE html>
    <html lang="fi">
        <head>
            <meta charset="UTF-8"/>
            <title>Aloitussivu</title>
        </head>
        <body>
            <h1>Pääotsikko</h1>
            <h2>Ensimmäinen alaotsikko</h2>
            <p>Tässä on ensimmäinen kappale, joka varmaan   jotenkin liittyy alaotsikkoon.</p>
        </body>
    </html>
```

___

## Demotehtävä 1

1. Avaa Githubista kloonaamasi kansio Visual Studio Codella.
2. Luo sinne uusi kansio nimeltään Demotehtävät.
3. Luo Demotehtävät-kansioon tiedosto nimeltään demo1.html.
4. Lisää tiedostoon HTML-pohja yllä olevan esimerkin mukaisesti.
5. Lisää tiedoston body-osioon otsikko (eli ``<h1>``), jossa on oma nimesi, ja lyhyt teksti (eli ``<p>``), jossa kerrot, kuka olet.

_________

## HTML-tiedoston tarkasteleminen

On useampia tapoja, miten HTML-tiedoston voi avata omalla koneella.

Yksinkertaisin on navigoida tietokoneella siihen sijaintiin, jossa tiedosto on, ja kaksoisklikata sitä. Silloin tietokone avaa sivun oletusselaimella.

Vaihtoehtoisesti VisualStudio Codeen on asennettavissa lisäosia, jotka voivat avata tiedoston.


____

## Demotehtävä 2

1. Etsi tietokoneeltasi paikka, johon olet tallentanut demo1.html-tiedoston. Tuplaklikkaa sitä ja avaa se selaimeen.

____________

## HTML-pohjan oikoluominen

Visual Studio Code tarjoaa jonkin verran apuja koodin kirjoittamiseen, minkä tulette huomaamaan. Sitä voi käyttää apuna myös HTML-pohjan luomiseen.

Pohja luodaan siten, että ensin luodaan uusi tiedosto, jonka pääte on .html (esimerkiksi *testi.html*). Sitten tyhjässä tiedostossa kirjoitataan huutomerkki ja painetaan enteriä. Sen pitäisi luoda seuraavan näköisen tiedoston:


````html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
````

Tuo toinen <meta> vaikuttaa CSS:än ja siihen, miten asiat voisivat asettua sivulle. Sen voi antaa olla paikoillaan, vaikka emme tarvitse sitä pitkään aikaan.


_________

## Demotehtävä 3

Luo kansioon uusi .html-loppuinen tiedosto. Luo siihen HTML-pohja käyttämällä oikotapaa.