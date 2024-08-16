# Perusmuotoilua CSS:llä

## Tekstin tyyli

Tekstille voidaan määritellä fontin koko, väri, fonttiperhe jne.

```js
p {
    color: blue;
    text-align: center;
    text-align: justify;
    text-decoration: underline;
    font-family: "Times New Roman", Times, serif;
    font-style: italic;
    font-size: 30px;
    font-weight: bold;
}
```

Serif-fontti tarkoittaa fonttia kuten Times New Roman, jossa monissa kirjaimissa on ylhäällä ja alhaalla kirjaimen levennys. Sans-serif-fontti taas on esimerkiksi Arial, jossa ei ole tälläisiä levennyksiä.

Edellä oleva fontti voidaan määritellä myös lyhemmällä syntaksilla:

```js
p {
    font: italic bold 30px "Times New Roman", Times, serif;
}
```

## Fontin mitat

Mitat voidaan antaa pikseleissä *px* tai suhteelisina *em*. Suhteellinen mitta viittaa perusfonttikokoon, joka on annettu koko dokumentille (tässä esimerkissä 16px). 2em tarkoittaa siis kaksi kertaa isompaa fonttia kuin perusfonttikoko, 1.6em tarkoittaa 1.6 kertaa isompaa jne.

```js
body {
    font-size: 16px;
}
h1 {
    font-size: 2em;
}
h2 {
    font-size: 1.6em;
}
```

Lisäksi fonttikoon vaihtoehtoina ovat large, larger, medium, small, smaller, xlarge, xsmall, xxlarge, xxsmall. 

## Listat

Listamerkinnän tyylin voi muokata. Usein tyyli otetaan pois esimerkiksi navigaatiopalkissa laittamalla arvoksi *none*.

```js
li {
  list-style-type: circle;
}
```

Listan erilaisista listatyyleistä löydät [täältä](https://www.w3schools.com/cssref/pr_list-style-type.php)<base target="_blank">.

_______________

## Demoharjoitus 1

1. Muokkaa aiemmin tehtyä HTML-tiedostoasi linkitetyllä CSS-tiedostolla. Ensimmäisenä valitse *body* ja poista siltä margin eli kirjoita ``margin: 0;`` Tämä estää myöhemmin marginaaliongelmia.
2. Suurenna tekstikokoa ja vaihda fonttia. Vaihda myös tekstin väri tummanharmaaksi.
3. Lisää tiedostoon numeroimaton lista. Testaa erilaisia listatyyppejä. Lopuksi testaa, että osaat poistaa listatyypin näkyvistä.

_______________

## Tekstin asemointi

Tekstit on automaattisesti rivitetty vasempaan reunaan. *text-align* -ominaisuudella se voidaan kuitenkin asettaa myös oikeaan reunaan, keskitetyksi tai jakautumaan tilaan tasaisesti. *text-align*illa on siis neljä eri arvoa, jotka ovat *left* (oletus), *right*, *center* ja *justify*.

___________

## Demoharjoitus 2

1. Jatka aiempaan tiedostoon. Kokeile keskittää jokin tiedoston otsikoista. Voit valita selektoriksi joko kaikki sen elementin otsikot tai antaa yhdelle otsikolle luokan.
2. Laita ``<p>`` -elementeille *text-align: right;* ja katso, mitä tapahtuu. Vaihda se nyt *text-align: justify*ksi ja katso, mitä tapahtuu. 