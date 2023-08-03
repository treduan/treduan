# HTML perusteet

HTML (Hypertext Markup Language) on avoimesti standardoitu merkkikieli, jolla internetsivut on kirjoitettu. Sillä voidaan merkitä sivuston rakenne sekä monia sisällön merkityksiä. Vaikka internetsivuja voidaan nykyään kirjoittaa monella eri teknologialla ja ohjelmointikielellä, kaikki teknologiat muuntavat koodin jossakin vaiheessa HTML:ksi.

---



## HTML-dokumentin perusteet

Selaimen täytyy tietää, mitä tyyppiä dokumentti on, mistä syystä HTML dokumentti aloitetaan aina 

````HTML 
<!DOCTYPE html>
````

Sen jälkeen kaikki koodi tulee ``<html>`` tagin sisään. Sen sisään kannattaa lisätä sivuston pääasiallinen kieli, esim. ````<html lang=”fi”>````, jos sivusto on suomeksi.

Kaikki tagit kuuluu sulkea oikeassa kohdassa. Tageja voi olla sisäkkäin. Jos tageja ei sulje oikein, on vaarana, että selain tulkitsee HTML:ää väärin ja se sotkee sivuston, vaikka se edelleen näkyy. Siksi ``<html>`` tagin parina täytyy tiedoston lopussa olla ``</html>`` eli sulkutag.

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
<body>
    <h1>Pääotsikko</h1>
    <h2>Ensimmäinen alaotsikko</h2>
    <p>Tässä on ensimmäinen kappale, joka varmaan   jotenkin liittyy alaotsikkoon.</p>
</body>
```

___

## Demotehtävä 1

1. Mene omaan Githubiisi ja luo uusi kansio nimellä htlmdemoharjoitus1_2023. Luo samalla README, johon voit kirjoittaa otsikoksi HTML-harjoitus 1 markdownilla (eli pääotsikon eteen tulee #). Tätä voi täydentää myöhemmin
2. Kopioi kansion osoite. 
3. Avaa sitten koodieditori (Visual Studio Code). Kloonaa Github-kansio ja tallenna se K-levylle. Voit tehdä sitä varten kansion ”HTML&CSS”, jotta koodi löytyy myöhemmin helposti. 
4. Kun projekti on auki, luo siihen kansio ”demoharjoitus1”. Luo kansioon tiedosto nimeltään ”index.html”. 
5. Luo aikaisemmin käydyn perusteella pohja HTML-sivulle.
6. Kirjoita pääotsikoksi (``<h1>``) oma nimesi.
7. Kirjoita ensimmäiseen kappaleeseen (``<p>``) pari lausetta itsestäsi. Esimerkiksi "Olen Anna, tamperelainen ohjelmoinnin opettaja. Asun perheeni ja kissojeni kanssa Hervannassa." Muista sulkutagit!
8. Tallenna dokumentti.
9. Käy katsomassa sivuasi. Mene Resurssienhallintaan, navigoi K-levylle ja oikeaan kansioon. Kaksoisklikkaa index.html-tiedoston tekstiä. Selaimen pitäisi avata sivu sinulle.